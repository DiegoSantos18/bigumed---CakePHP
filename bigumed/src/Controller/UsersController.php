<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */

    public function initialize()
    {
        parent::initialize();
        //debug($this->request->session()->read('Auth.User'));
        //$this->isAuthorized($this->request->session()->read('Auth.User'));
        $this->Auth->allow(['login', 'add']);
    }

    public function isAuthorized($user)
    {
        if ($this->request->getParam('action') === 'login') {
            return true;
        }

        return parent::isAuthorized($user);
    }

    public function login()
    {
        $this->viewBuilder()->setLayout('login');
        if ($this->request->is(['post'])) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Usuário ou senha inválidos!'));
        }
    }

    public function logout()
    {
        $this->Flash->success('Você foi deslogado!');
        return $this->redirect($this->Auth->logout());
    }

    public function index()
    {

        $this->paginate = [
            'contain' => ['Roles']
        ];
        $users = $this->paginate($this->Users);
        //Filtro
        if ($this->request->is(['patch', 'post', 'put'])) {
            // (debug teste) print_r($this->request->data);
            $filtro = $this->Users->find()->where([
                'Users.cpf LIKE' => '%' . $this->request->data["cpf"] . '%',
                'Users.nome_completo LIKE' => '%' . $this->request->data["nome_completo"] . '%',
                'Users.roles_id ' => $this->request->data["papel"],
                'Users.status ' => $this->request->data["status"]
            ]);
            $users = $this->paginate($filtro);
        }

        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('users', 'roles'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Roles']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário salvo com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar usuário. Tente novamente!'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário atualizado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao atualizar usuário. Tente novamente!'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('Usuário deletado com sucesso!'));
        } else {
            $this->Flash->error(__('Erro ao deletar usuário. Tente novamente!'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
