<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Prescricoes Controller
 *
 * @property \App\Model\Table\PrescricoesTable $Prescricoes
 *
 * @method \App\Model\Entity\Prescrico[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PrescricoesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Medicos', 'Pacientes', 'Medicamentos']
        ];
        $prescricoes = $this->paginate($this->Prescricoes);

        $this->set(compact('prescricoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Prescrico id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prescrico = $this->Prescricoes->get($id, [
            'contain' => ['Medicos', 'Pacientes', 'Medicamentos']
        ]);

        $this->set('prescrico', $prescrico);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prescrico = $this->Prescricoes->newEntity();
        if ($this->request->is('post')) {
            $prescrico = $this->Prescricoes->patchEntity($prescrico, $this->request->getData());
            if ($this->Prescricoes->save($prescrico)) {
                $this->Flash->success(__('The prescrico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prescrico could not be saved. Please, try again.'));
        }
        $medicos = $this->Prescricoes->Medicos->find('list', ['limit' => 200]);
        $pacientes = $this->Prescricoes->Pacientes->find('list', ['limit' => 200]);
        $medicamentos = $this->Prescricoes->Medicamentos->find('list', ['limit' => 200]);
        $this->set(compact('prescrico', 'medicos', 'pacientes', 'medicamentos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Prescrico id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prescrico = $this->Prescricoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prescrico = $this->Prescricoes->patchEntity($prescrico, $this->request->getData());
            if ($this->Prescricoes->save($prescrico)) {
                $this->Flash->success(__('The prescrico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prescrico could not be saved. Please, try again.'));
        }
        $medicos = $this->Prescricoes->Medicos->find('list', ['limit' => 200]);
        $pacientes = $this->Prescricoes->Pacientes->find('list', ['limit' => 200]);
        $medicamentos = $this->Prescricoes->Medicamentos->find('list', ['limit' => 200]);
        $this->set(compact('prescrico', 'medicos', 'pacientes', 'medicamentos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Prescrico id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prescrico = $this->Prescricoes->get($id);
        if ($this->Prescricoes->delete($prescrico)) {
            $this->Flash->success(__('The prescrico has been deleted.'));
        } else {
            $this->Flash->error(__('The prescrico could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
