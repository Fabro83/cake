<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * IteStatuses Controller
 *
 * @property \App\Model\Table\IteStatusesTable $IteStatuses
 *
 * @method \App\Model\Entity\IteStatus[] paginate($object = null, array $settings = [])
 */
class IteStatusesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $iteStatuses = $this->paginate($this->IteStatuses);

        $this->set(compact('iteStatuses'));
        $this->set('_serialize', ['iteStatuses']);
    }

    /**
     * View method
     *
     * @param string|null $id Ite Status id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $iteStatus = $this->IteStatuses->get($id, [
            'contain' => []
        ]);

        $this->set('iteStatus', $iteStatus);
        $this->set('_serialize', ['iteStatus']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $iteStatus = $this->IteStatuses->newEntity();
        if ($this->request->is('post')) {
            $iteStatus = $this->IteStatuses->patchEntity($iteStatus, $this->request->getData());
            if ($this->IteStatuses->save($iteStatus)) {
                $this->Flash->success(__('The ite status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ite status could not be saved. Please, try again.'));
        }
        $this->set(compact('iteStatus'));
        $this->set('_serialize', ['iteStatus']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ite Status id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $iteStatus = $this->IteStatuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $iteStatus = $this->IteStatuses->patchEntity($iteStatus, $this->request->getData());
            if ($this->IteStatuses->save($iteStatus)) {
                $this->Flash->success(__('The ite status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ite status could not be saved. Please, try again.'));
        }
        $this->set(compact('iteStatus'));
        $this->set('_serialize', ['iteStatus']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ite Status id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $iteStatus = $this->IteStatuses->get($id);
        if ($this->IteStatuses->delete($iteStatus)) {
            $this->Flash->success(__('The ite status has been deleted.'));
        } else {
            $this->Flash->error(__('The ite status could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
