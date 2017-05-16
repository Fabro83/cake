<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TelPhoneTypes Controller
 *
 * @property \App\Model\Table\TelPhoneTypesTable $TelPhoneTypes
 *
 * @method \App\Model\Entity\TelPhoneType[] paginate($object = null, array $settings = [])
 */
class TelPhoneTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $telPhoneTypes = $this->paginate($this->TelPhoneTypes);

        $this->set(compact('telPhoneTypes'));
        $this->set('_serialize', ['telPhoneTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Tel Phone Type id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $telPhoneType = $this->TelPhoneTypes->get($id, [
            'contain' => []
        ]);

        $this->set('telPhoneType', $telPhoneType);
        $this->set('_serialize', ['telPhoneType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $telPhoneType = $this->TelPhoneTypes->newEntity();
        if ($this->request->is('post')) {
            $telPhoneType = $this->TelPhoneTypes->patchEntity($telPhoneType, $this->request->getData());
            if ($this->TelPhoneTypes->save($telPhoneType)) {
                $this->Flash->success(__('The tel phone type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tel phone type could not be saved. Please, try again.'));
        }
        $this->set(compact('telPhoneType'));
        $this->set('_serialize', ['telPhoneType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tel Phone Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $telPhoneType = $this->TelPhoneTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $telPhoneType = $this->TelPhoneTypes->patchEntity($telPhoneType, $this->request->getData());
            if ($this->TelPhoneTypes->save($telPhoneType)) {
                $this->Flash->success(__('The tel phone type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tel phone type could not be saved. Please, try again.'));
        }
        $this->set(compact('telPhoneType'));
        $this->set('_serialize', ['telPhoneType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tel Phone Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $telPhoneType = $this->TelPhoneTypes->get($id);
        if ($this->TelPhoneTypes->delete($telPhoneType)) {
            $this->Flash->success(__('The tel phone type has been deleted.'));
        } else {
            $this->Flash->error(__('The tel phone type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
