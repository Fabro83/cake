<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * IteAcquisitionTypes Controller
 *
 * @property \App\Model\Table\IteAcquisitionTypesTable $IteAcquisitionTypes
 *
 * @method \App\Model\Entity\IteAcquisitionType[] paginate($object = null, array $settings = [])
 */
class IteAcquisitionTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $iteAcquisitionTypes = $this->paginate($this->IteAcquisitionTypes);

        $this->set(compact('iteAcquisitionTypes'));
        $this->set('_serialize', ['iteAcquisitionTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Ite Acquisition Type id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $iteAcquisitionType = $this->IteAcquisitionTypes->get($id, [
            'contain' => []
        ]);

        $this->set('iteAcquisitionType', $iteAcquisitionType);
        $this->set('_serialize', ['iteAcquisitionType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $iteAcquisitionType = $this->IteAcquisitionTypes->newEntity();
        if ($this->request->is('post')) {
            $iteAcquisitionType = $this->IteAcquisitionTypes->patchEntity($iteAcquisitionType, $this->request->getData());
            if ($this->IteAcquisitionTypes->save($iteAcquisitionType)) {
                $this->Flash->success(__('The ite acquisition type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ite acquisition type could not be saved. Please, try again.'));
        }
        $this->set(compact('iteAcquisitionType'));
        $this->set('_serialize', ['iteAcquisitionType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ite Acquisition Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $iteAcquisitionType = $this->IteAcquisitionTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $iteAcquisitionType = $this->IteAcquisitionTypes->patchEntity($iteAcquisitionType, $this->request->getData());
            if ($this->IteAcquisitionTypes->save($iteAcquisitionType)) {
                $this->Flash->success(__('The ite acquisition type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ite acquisition type could not be saved. Please, try again.'));
        }
        $this->set(compact('iteAcquisitionType'));
        $this->set('_serialize', ['iteAcquisitionType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ite Acquisition Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $iteAcquisitionType = $this->IteAcquisitionTypes->get($id);
        if ($this->IteAcquisitionTypes->delete($iteAcquisitionType)) {
            $this->Flash->success(__('The ite acquisition type has been deleted.'));
        } else {
            $this->Flash->error(__('The ite acquisition type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
