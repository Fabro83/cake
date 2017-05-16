<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TelPhones Controller
 *
 * @property \App\Model\Table\TelPhonesTable $TelPhones
 *
 * @method \App\Model\Entity\TelPhone[] paginate($object = null, array $settings = [])
 */
class TelPhonesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['TelPhoneTypes', 'TelPhoneCompanies', 'PerPersons']
        ];
        $telPhones = $this->paginate($this->TelPhones);

        $this->set(compact('telPhones'));
        $this->set('_serialize', ['telPhones']);
    }

    /**
     * View method
     *
     * @param string|null $id Tel Phone id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $telPhone = $this->TelPhones->get($id, [
            'contain' => ['TelPhoneTypes', 'TelPhoneCompanies', 'PerPersons']
        ]);

        $this->set('telPhone', $telPhone);
        $this->set('_serialize', ['telPhone']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $telPhone = $this->TelPhones->newEntity();
        if ($this->request->is('post')) {
            $telPhone = $this->TelPhones->patchEntity($telPhone, $this->request->getData());
            if ($this->TelPhones->save($telPhone)) {
                $this->Flash->success(__('The tel phone has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tel phone could not be saved. Please, try again.'));
        }
        $telPhoneTypes = $this->TelPhones->TelPhoneTypes->find('list', ['limit' => 200]);
        $telPhoneCompanies = $this->TelPhones->TelPhoneCompanies->find('list', ['limit' => 200]);
        $perPersons = $this->TelPhones->PerPersons->find('list', ['limit' => 200]);
        $this->set(compact('telPhone', 'telPhoneTypes', 'telPhoneCompanies', 'perPersons'));
        $this->set('_serialize', ['telPhone']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tel Phone id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $telPhone = $this->TelPhones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $telPhone = $this->TelPhones->patchEntity($telPhone, $this->request->getData());
            if ($this->TelPhones->save($telPhone)) {
                $this->Flash->success(__('The tel phone has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tel phone could not be saved. Please, try again.'));
        }
        $telPhoneTypes = $this->TelPhones->TelPhoneTypes->find('list', ['limit' => 200]);
        $telPhoneCompanies = $this->TelPhones->TelPhoneCompanies->find('list', ['limit' => 200]);
        $perPersons = $this->TelPhones->PerPersons->find('list', ['limit' => 200]);
        $this->set(compact('telPhone', 'telPhoneTypes', 'telPhoneCompanies', 'perPersons'));
        $this->set('_serialize', ['telPhone']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tel Phone id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $telPhone = $this->TelPhones->get($id);
        if ($this->TelPhones->delete($telPhone)) {
            $this->Flash->success(__('The tel phone has been deleted.'));
        } else {
            $this->Flash->error(__('The tel phone could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
