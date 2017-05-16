<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * IteItems Controller
 *
 * @property \App\Model\Table\IteItemsTable $IteItems
 *
 * @method \App\Model\Entity\IteItem[] paginate($object = null, array $settings = [])
 */
class IteItemsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['IteBudgets', 'IteAcquisitionTypes', 'IteStatuses', 'IteClasses', 'IteTypes']
        ];
        $iteItems = $this->paginate($this->IteItems);

        $this->set(compact('iteItems'));
        $this->set('_serialize', ['iteItems']);
    }

    /**
     * View method
     *
     * @param string|null $id Ite Item id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $iteItem = $this->IteItems->get($id, [
            'contain' => ['Files', 'IteBudgets', 'IteAcquisitionTypes', 'IteStatuses', 'IteClasses', 'IteTypes']
        ]);

        $this->set('iteItem', $iteItem);
        $this->set('_serialize', ['iteItem']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $iteItem = $this->IteItems->newEntity();
        if ($this->request->is('post')) {
            $iteItem = $this->IteItems->patchEntity($iteItem, $this->request->getData());
            if ($this->IteItems->save($iteItem)) {
                $this->Flash->success(__('The ite item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ite item could not be saved. Please, try again.'));
        }
        $files = $this->IteItems->Files->find('list', ['limit' => 200]);
        $iteBudgets = $this->IteItems->IteBudgets->find('list', ['limit' => 200]);
        $iteAcquisitionTypes = $this->IteItems->IteAcquisitionTypes->find('list', ['limit' => 200]);
        $iteStatuses = $this->IteItems->IteStatuses->find('list', ['limit' => 200]);
        $iteClasses = $this->IteItems->IteClasses->find('list', ['limit' => 200]);
        $iteTypes = $this->IteItems->IteTypes->find('list', ['limit' => 200]);
        $this->set(compact('iteItem', 'files', 'sectors', 'iteBudgets', 'iteAcquisitionTypes', 'iteStatuses', 'iteClasses', 'iteTypes'));
        $this->set('_serialize', ['iteItem']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ite Item id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $iteItem = $this->IteItems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $iteItem = $this->IteItems->patchEntity($iteItem, $this->request->getData());
            if ($this->IteItems->save($iteItem)) {
                $this->Flash->success(__('The ite item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ite item could not be saved. Please, try again.'));
        }
        $files = $this->IteItems->Files->find('list', ['limit' => 200]);
        $iteBudgets = $this->IteItems->IteBudgets->find('list', ['limit' => 200]);
        $iteAcquisitionTypes = $this->IteItems->IteAcquisitionTypes->find('list', ['limit' => 200]);
        $iteStatuses = $this->IteItems->IteStatuses->find('list', ['limit' => 200]);
        $iteClasses = $this->IteItems->IteClasses->find('list', ['limit' => 200]);
        $iteTypes = $this->IteItems->IteTypes->find('list', ['limit' => 200]);
        $this->set(compact('iteItem', 'files', 'sectors', 'iteBudgets', 'iteAcquisitionTypes', 'iteStatuses', 'iteClasses', 'iteTypes'));
        $this->set('_serialize', ['iteItem']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ite Item id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $iteItem = $this->IteItems->get($id);
        if ($this->IteItems->delete($iteItem)) {
            $this->Flash->success(__('The ite item has been deleted.'));
        } else {
            $this->Flash->error(__('The ite item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
