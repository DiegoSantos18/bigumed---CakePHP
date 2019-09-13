<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Medicamentos Controller
 *
 * @property \App\Model\Table\MedicamentosTable $Medicamentos
 *
 * @method \App\Model\Entity\Medicamento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MedicamentosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $medicamentos = $this->paginate($this->Medicamentos);

        $this->set(compact('medicamentos'));
    }

    /**
     * View method
     *
     * @param string|null $id Medicamento id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $medicamento = $this->Medicamentos->get($id, [
            'contain' => ['Prescricoes']
        ]);

        $this->set('medicamento', $medicamento);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $medicamento = $this->Medicamentos->newEntity();
        if ($this->request->is('post')) {
            $medicamento = $this->Medicamentos->patchEntity($medicamento, $this->request->getData());
            if ($this->Medicamentos->save($medicamento)) {
                $this->Flash->success(__('The medicamento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medicamento could not be saved. Please, try again.'));
        }
        $this->set(compact('medicamento'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Medicamento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $medicamento = $this->Medicamentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $medicamento = $this->Medicamentos->patchEntity($medicamento, $this->request->getData());
            if ($this->Medicamentos->save($medicamento)) {
                $this->Flash->success(__('The medicamento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medicamento could not be saved. Please, try again.'));
        }
        $this->set(compact('medicamento'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Medicamento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $medicamento = $this->Medicamentos->get($id);
        if ($this->Medicamentos->delete($medicamento)) {
            $this->Flash->success(__('The medicamento has been deleted.'));
        } else {
            $this->Flash->error(__('The medicamento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
