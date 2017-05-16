<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ItePropieties Controller
 *
 * @property \App\Model\Table\ItePropietiesTable $ItePropieties
 *
 * @method \App\Model\Entity\ItePropiety[] paginate($object = null, array $settings = [])
 */
class ItePropietiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['IteTypes', 'IteFieldTypes']
        ];
        $itePropieties = $this->paginate($this->ItePropieties);

        $this->set(compact('itePropieties'));
        $this->set('_serialize', ['itePropieties']);
    }

    /**
     * View method
     *
     * @param string|null $id Ite Propiety id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $itePropiety = $this->ItePropieties->get($id, [
            'contain' => ['IteTypes', 'IteFieldTypes']
        ]);

        $this->set('itePropiety', $itePropiety);
        $this->set('_serialize', ['itePropiety']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $itePropiety = $this->ItePropieties->newEntity();
        if ($this->request->is('post')) {
            $itePropiety = $this->ItePropieties->patchEntity($itePropiety, $this->request->getData());
            if ($this->ItePropieties->save($itePropiety)) {
                $this->Flash->success(__('The ite propiety has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ite propiety could not be saved. Please, try again.'));
        }
        $iteTypes = $this->ItePropieties->IteTypes->find('list', ['limit' => 200]);
        $iteFieldTypes = $this->ItePropieties->IteFieldTypes->find('list', ['limit' => 200]);
        $this->set(compact('itePropiety', 'iteTypes', 'iteFieldTypes'));
        $this->set('_serialize', ['itePropiety']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ite Propiety id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $itePropiety = $this->ItePropieties->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $itePropiety = $this->ItePropieties->patchEntity($itePropiety, $this->request->getData());
            if ($this->ItePropieties->save($itePropiety)) {
                $this->Flash->success(__('The ite propiety has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ite propiety could not be saved. Please, try again.'));
        }
        $iteTypes = $this->ItePropieties->IteTypes->find('list', ['limit' => 200]);
        $iteFieldTypes = $this->ItePropieties->IteFieldTypes->find('list', ['limit' => 200]);
        $this->set(compact('itePropiety', 'iteTypes', 'iteFieldTypes'));
        $this->set('_serialize', ['itePropiety']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ite Propiety id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $itePropiety = $this->ItePropieties->get($id);
        if ($this->ItePropieties->delete($itePropiety)) {
            $this->Flash->success(__('The ite propiety has been deleted.'));
        } else {
            $this->Flash->error(__('The ite propiety could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
