<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Medicos Controller
 *
 * @property \App\Model\Table\MedicosTable $Medicos
 *
 * @method \App\Model\Entity\Medico[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MedicosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $medicos = $this->paginate($this->Medicos);

        $this->set(compact('medicos'));
    }

    /**
     * View method
     *
     * @param string|null $id Medico id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $medico = $this->Medicos->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('medico', $medico);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $medico = $this->Medicos->newEntity();
        if ($this->request->is('post')) {
            $medico = $this->Medicos->patchEntity($medico, $this->request->getData());
            if ($this->Medicos->save($medico)) {
                $this->Flash->success(__('Médico salvo com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar Médico. Tente novamente!'));
        }
        $users = $this->Medicos->Users->find('list', ['limit' => 200]);
        $this->set(compact('medico', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Medico id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $medico = $this->Medicos->get($id, [
            'contain' => ['Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $medico = $this->Medicos->patchEntity($medico, $this->request->getData());
            if ($this->Medicos->save($medico)) {
                $this->Flash->success(__('Médico atualizado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao atualizar Médico. Tente novamente!'));
        }
        $users = $this->Medicos->Users->find('list', ['limit' => 200]);
        $this->set(compact('medico', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Medico id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $medico = $this->Medicos->get($id);
        if ($this->Medicos->delete($medico)) {
            $this->Flash->success(__('Médico deletado com sucesso!'));
        } else {
            $this->Flash->error(__('Erro ao deletar usuário. Tente novamente!'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
