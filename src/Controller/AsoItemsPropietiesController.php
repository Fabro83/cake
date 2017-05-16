<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AsoItemsPropieties Controller
 *
 * @property \App\Model\Table\AsoItemsPropietiesTable $AsoItemsPropieties
 *
 * @method \App\Model\Entity\AsoItemsPropiety[] paginate($object = null, array $settings = [])
 */
class AsoItemsPropietiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['IteItems', 'ItePropieties', 'ItePropietyValues']
        ];
        $asoItemsPropieties = $this->paginate($this->AsoItemsPropieties);

        $this->set(compact('asoItemsPropieties'));
        $this->set('_serialize', ['asoItemsPropieties']);
    }

    /**
     * View method
     *
     * @param string|null $id Aso Items Propiety id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $asoItemsPropiety = $this->AsoItemsPropieties->get($id, [
            'contain' => ['IteItems', 'ItePropieties', 'ItePropietyValues']
        ]);

        $this->set('asoItemsPropiety', $asoItemsPropiety);
        $this->set('_serialize', ['asoItemsPropiety']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $asoItemsPropiety = $this->AsoItemsPropieties->newEntity();
        if ($this->request->is('post')) {
            $asoItemsPropiety = $this->AsoItemsPropieties->patchEntity($asoItemsPropiety, $this->request->getData());
            if ($this->AsoItemsPropieties->save($asoItemsPropiety)) {
                $this->Flash->success(__('The aso items propiety has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aso items propiety could not be saved. Please, try again.'));
        }
        $iteItems = $this->AsoItemsPropieties->IteItems->find('list', ['limit' => 200]);
        $itePropieties = $this->AsoItemsPropieties->ItePropieties->find('list', ['limit' => 200]);
        $itePropietyValues = $this->AsoItemsPropieties->ItePropietyValues->find('list', ['limit' => 200]);
        $this->set(compact('asoItemsPropiety', 'iteItems', 'itePropieties', 'itePropietyValues'));
        $this->set('_serialize', ['asoItemsPropiety']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Aso Items Propiety id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $asoItemsPropiety = $this->AsoItemsPropieties->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $asoItemsPropiety = $this->AsoItemsPropieties->patchEntity($asoItemsPropiety, $this->request->getData());
            if ($this->AsoItemsPropieties->save($asoItemsPropiety)) {
                $this->Flash->success(__('The aso items propiety has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aso items propiety could not be saved. Please, try again.'));
        }
        $iteItems = $this->AsoItemsPropieties->IteItems->find('list', ['limit' => 200]);
        $itePropieties = $this->AsoItemsPropieties->ItePropieties->find('list', ['limit' => 200]);
        $itePropietyValues = $this->AsoItemsPropieties->ItePropietyValues->find('list', ['limit' => 200]);
        $this->set(compact('asoItemsPropiety', 'iteItems', 'itePropieties', 'itePropietyValues'));
        $this->set('_serialize', ['asoItemsPropiety']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Aso Items Propiety id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $asoItemsPropiety = $this->AsoItemsPropieties->get($id);
        if ($this->AsoItemsPropieties->delete($asoItemsPropiety)) {
            $this->Flash->success(__('The aso items propiety has been deleted.'));
        } else {
            $this->Flash->error(__('The aso items propiety could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
