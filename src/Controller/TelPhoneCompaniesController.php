<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TelPhoneCompanies Controller
 *
 * @property \App\Model\Table\TelPhoneCompaniesTable $TelPhoneCompanies
 *
 * @method \App\Model\Entity\TelPhoneCompany[] paginate($object = null, array $settings = [])
 */
class TelPhoneCompaniesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $telPhoneCompanies = $this->paginate($this->TelPhoneCompanies);

        $this->set(compact('telPhoneCompanies'));
        $this->set('_serialize', ['telPhoneCompanies']);
    }

    /**
     * View method
     *
     * @param string|null $id Tel Phone Company id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $telPhoneCompany = $this->TelPhoneCompanies->get($id, [
            'contain' => []
        ]);

        $this->set('telPhoneCompany', $telPhoneCompany);
        $this->set('_serialize', ['telPhoneCompany']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $telPhoneCompany = $this->TelPhoneCompanies->newEntity();
        if ($this->request->is('post')) {
            $telPhoneCompany = $this->TelPhoneCompanies->patchEntity($telPhoneCompany, $this->request->getData());
            if ($this->TelPhoneCompanies->save($telPhoneCompany)) {
                $this->Flash->success(__('The tel phone company has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tel phone company could not be saved. Please, try again.'));
        }
        $this->set(compact('telPhoneCompany'));
        $this->set('_serialize', ['telPhoneCompany']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tel Phone Company id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $telPhoneCompany = $this->TelPhoneCompanies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $telPhoneCompany = $this->TelPhoneCompanies->patchEntity($telPhoneCompany, $this->request->getData());
            if ($this->TelPhoneCompanies->save($telPhoneCompany)) {
                $this->Flash->success(__('The tel phone company has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tel phone company could not be saved. Please, try again.'));
        }
        $this->set(compact('telPhoneCompany'));
        $this->set('_serialize', ['telPhoneCompany']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tel Phone Company id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $telPhoneCompany = $this->TelPhoneCompanies->get($id);
        if ($this->TelPhoneCompanies->delete($telPhoneCompany)) {
            $this->Flash->success(__('The tel phone company has been deleted.'));
        } else {
            $this->Flash->error(__('The tel phone company could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
