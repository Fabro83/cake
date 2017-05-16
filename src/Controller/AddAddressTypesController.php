<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AddAddressTypes Controller
 *
 * @property \App\Model\Table\AddAddressTypesTable $AddAddressTypes
 *
 * @method \App\Model\Entity\AddAddressType[] paginate($object = null, array $settings = [])
 */
class AddAddressTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $addAddressTypes = $this->paginate($this->AddAddressTypes);

        $this->set(compact('addAddressTypes'));
        $this->set('_serialize', ['addAddressTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Add Address Type id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $addAddressType = $this->AddAddressTypes->get($id, [
            'contain' => []
        ]);

        $this->set('addAddressType', $addAddressType);
        $this->set('_serialize', ['addAddressType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $addAddressType = $this->AddAddressTypes->newEntity();
        if ($this->request->is('post')) {
            $addAddressType = $this->AddAddressTypes->patchEntity($addAddressType, $this->request->getData());
            if ($this->AddAddressTypes->save($addAddressType)) {
                $this->Flash->success(__('The add address type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The add address type could not be saved. Please, try again.'));
        }
        $this->set(compact('addAddressType'));
        $this->set('_serialize', ['addAddressType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Add Address Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $addAddressType = $this->AddAddressTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $addAddressType = $this->AddAddressTypes->patchEntity($addAddressType, $this->request->getData());
            if ($this->AddAddressTypes->save($addAddressType)) {
                $this->Flash->success(__('The add address type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The add address type could not be saved. Please, try again.'));
        }
        $this->set(compact('addAddressType'));
        $this->set('_serialize', ['addAddressType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Add Address Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $addAddressType = $this->AddAddressTypes->get($id);
        if ($this->AddAddressTypes->delete($addAddressType)) {
            $this->Flash->success(__('The add address type has been deleted.'));
        } else {
            $this->Flash->error(__('The add address type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
