<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ItePropietyValues Controller
 *
 * @property \App\Model\Table\ItePropietyValuesTable $ItePropietyValues
 *
 * @method \App\Model\Entity\ItePropietyValue[] paginate($object = null, array $settings = [])
 */
class ItePropietyValuesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ItePropieties']
        ];
        $itePropietyValues = $this->paginate($this->ItePropietyValues);

        $this->set(compact('itePropietyValues'));
        $this->set('_serialize', ['itePropietyValues']);
    }

    /**
     * View method
     *
     * @param string|null $id Ite Propiety Value id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $itePropietyValue = $this->ItePropietyValues->get($id, [
            'contain' => ['ItePropieties']
        ]);

        $this->set('itePropietyValue', $itePropietyValue);
        $this->set('_serialize', ['itePropietyValue']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $itePropietyValue = $this->ItePropietyValues->newEntity();
        if ($this->request->is('post')) {
            $itePropietyValue = $this->ItePropietyValues->patchEntity($itePropietyValue, $this->request->getData());
            if ($this->ItePropietyValues->save($itePropietyValue)) {
                $this->Flash->success(__('The ite propiety value has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ite propiety value could not be saved. Please, try again.'));
        }
        $itePropieties = $this->ItePropietyValues->ItePropieties->find('list', ['limit' => 200]);
        $this->set(compact('itePropietyValue', 'itePropieties'));
        $this->set('_serialize', ['itePropietyValue']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ite Propiety Value id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $itePropietyValue = $this->ItePropietyValues->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $itePropietyValue = $this->ItePropietyValues->patchEntity($itePropietyValue, $this->request->getData());
            if ($this->ItePropietyValues->save($itePropietyValue)) {
                $this->Flash->success(__('The ite propiety value has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ite propiety value could not be saved. Please, try again.'));
        }
        $itePropieties = $this->ItePropietyValues->ItePropieties->find('list', ['limit' => 200]);
        $this->set(compact('itePropietyValue', 'itePropieties'));
        $this->set('_serialize', ['itePropietyValue']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ite Propiety Value id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $itePropietyValue = $this->ItePropietyValues->get($id);
        if ($this->ItePropietyValues->delete($itePropietyValue)) {
            $this->Flash->success(__('The ite propiety value has been deleted.'));
        } else {
            $this->Flash->error(__('The ite propiety value could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
