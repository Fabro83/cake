<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PerMaritalStatuses Controller
 *
 * @property \App\Model\Table\PerMaritalStatusesTable $PerMaritalStatuses
 *
 * @method \App\Model\Entity\PerMaritalStatus[] paginate($object = null, array $settings = [])
 */
class PerMaritalStatusesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $perMaritalStatuses = $this->paginate($this->PerMaritalStatuses);

        $this->set(compact('perMaritalStatuses'));
        $this->set('_serialize', ['perMaritalStatuses']);
    }

    /**
     * View method
     *
     * @param string|null $id Per Marital Status id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $perMaritalStatus = $this->PerMaritalStatuses->get($id, [
            'contain' => []
        ]);

        $this->set('perMaritalStatus', $perMaritalStatus);
        $this->set('_serialize', ['perMaritalStatus']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $perMaritalStatus = $this->PerMaritalStatuses->newEntity();
        if ($this->request->is('post')) {
            $perMaritalStatus = $this->PerMaritalStatuses->patchEntity($perMaritalStatus, $this->request->getData());
            if ($this->PerMaritalStatuses->save($perMaritalStatus)) {
                $this->Flash->success(__('The per marital status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The per marital status could not be saved. Please, try again.'));
        }
        $this->set(compact('perMaritalStatus'));
        $this->set('_serialize', ['perMaritalStatus']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Per Marital Status id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $perMaritalStatus = $this->PerMaritalStatuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $perMaritalStatus = $this->PerMaritalStatuses->patchEntity($perMaritalStatus, $this->request->getData());
            if ($this->PerMaritalStatuses->save($perMaritalStatus)) {
                $this->Flash->success(__('The per marital status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The per marital status could not be saved. Please, try again.'));
        }
        $this->set(compact('perMaritalStatus'));
        $this->set('_serialize', ['perMaritalStatus']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Per Marital Status id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $perMaritalStatus = $this->PerMaritalStatuses->get($id);
        if ($this->PerMaritalStatuses->delete($perMaritalStatus)) {
            $this->Flash->success(__('The per marital status has been deleted.'));
        } else {
            $this->Flash->error(__('The per marital status could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
