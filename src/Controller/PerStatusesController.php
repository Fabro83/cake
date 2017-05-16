<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PerStatuses Controller
 *
 * @property \App\Model\Table\PerStatusesTable $PerStatuses
 *
 * @method \App\Model\Entity\PerStatus[] paginate($object = null, array $settings = [])
 */
class PerStatusesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $perStatuses = $this->paginate($this->PerStatuses);

        $this->set(compact('perStatuses'));
        $this->set('_serialize', ['perStatuses']);
    }

    /**
     * View method
     *
     * @param string|null $id Per Status id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $perStatus = $this->PerStatuses->get($id, [
            'contain' => []
        ]);

        $this->set('perStatus', $perStatus);
        $this->set('_serialize', ['perStatus']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $perStatus = $this->PerStatuses->newEntity();
        if ($this->request->is('post')) {
            $perStatus = $this->PerStatuses->patchEntity($perStatus, $this->request->getData());
            if ($this->PerStatuses->save($perStatus)) {
                $this->Flash->success(__('The per status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The per status could not be saved. Please, try again.'));
        }
        $this->set(compact('perStatus'));
        $this->set('_serialize', ['perStatus']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Per Status id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $perStatus = $this->PerStatuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $perStatus = $this->PerStatuses->patchEntity($perStatus, $this->request->getData());
            if ($this->PerStatuses->save($perStatus)) {
                $this->Flash->success(__('The per status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The per status could not be saved. Please, try again.'));
        }
        $this->set(compact('perStatus'));
        $this->set('_serialize', ['perStatus']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Per Status id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $perStatus = $this->PerStatuses->get($id);
        if ($this->PerStatuses->delete($perStatus)) {
            $this->Flash->success(__('The per status has been deleted.'));
        } else {
            $this->Flash->error(__('The per status could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
