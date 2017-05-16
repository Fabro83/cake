<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AddAddresses Controller
 *
 * @property \App\Model\Table\AddAddressesTable $AddAddresses
 *
 * @method \App\Model\Entity\AddAddress[] paginate($object = null, array $settings = [])
 */
class AddAddressesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $addAddresses = $this->paginate($this->AddAddresses);

        $this->set(compact('addAddresses'));
        $this->set('_serialize', ['addAddresses']);
    }

    /**
     * View method
     *
     * @param string|null $id Add Address id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $addAddress = $this->AddAddresses->get($id, [
            'contain' => []
        ]);

        $this->set('addAddress', $addAddress);
        $this->set('_serialize', ['addAddress']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $addAddress = $this->AddAddresses->newEntity();
        if ($this->request->is('post')) {
            $addAddress = $this->AddAddresses->patchEntity($addAddress, $this->request->getData());
            if ($this->AddAddresses->save($addAddress)) {
                $this->Flash->success(__('The add address has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The add address could not be saved. Please, try again.'));
        }
        $this->set(compact('addAddress'));
        $this->set('_serialize', ['addAddress']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Add Address id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $addAddress = $this->AddAddresses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $addAddress = $this->AddAddresses->patchEntity($addAddress, $this->request->getData());
            if ($this->AddAddresses->save($addAddress)) {
                $this->Flash->success(__('The add address has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The add address could not be saved. Please, try again.'));
        }
        $this->set(compact('addAddress'));
        $this->set('_serialize', ['addAddress']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Add Address id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $addAddress = $this->AddAddresses->get($id);
        if ($this->AddAddresses->delete($addAddress)) {
            $this->Flash->success(__('The add address has been deleted.'));
        } else {
            $this->Flash->error(__('The add address could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
