<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pacientes Controller
 *
 * @property \App\Model\Table\PacientesTable $Pacientes
 *
 * @method \App\Model\Entity\Paciente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PacientesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usuarios']
        ];
        $pacientes = $this->paginate($this->Pacientes);

        $this->set(compact('pacientes'));
    }

    /**
     * View method
     *
     * @param string|null $id Paciente id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paciente = $this->Pacientes->get($id, [
            'contain' => ['Usuarios']
        ]);

        $this->set('paciente', $paciente);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paciente = $this->Pacientes->newEntity();
        if ($this->request->is('post')) {
            $paciente = $this->Pacientes->patchEntity($paciente, $this->request->getData());
            if ($this->Pacientes->save($paciente)) {
                $this->Flash->success(__('The paciente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paciente could not be saved. Please, try again.'));
        }
        $usuarios = $this->Pacientes->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('paciente', 'usuarios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Paciente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paciente = $this->Pacientes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paciente = $this->Pacientes->patchEntity($paciente, $this->request->getData());
            if ($this->Pacientes->save($paciente)) {
                $this->Flash->success(__('The paciente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paciente could not be saved. Please, try again.'));
        }
        $usuarios = $this->Pacientes->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('paciente', 'usuarios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Paciente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paciente = $this->Pacientes->get($id);
        if ($this->Pacientes->delete($paciente)) {
            $this->Flash->success(__('The paciente has been deleted.'));
        } else {
            $this->Flash->error(__('The paciente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
