<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * IteBudgets Controller
 *
 * @property \App\Model\Table\IteBudgetsTable $IteBudgets
 *
 * @method \App\Model\Entity\IteBudget[] paginate($object = null, array $settings = [])
 */
class IteBudgetsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $iteBudgets = $this->paginate($this->IteBudgets);

        $this->set(compact('iteBudgets'));
        $this->set('_serialize', ['iteBudgets']);
    }

    /**
     * View method
     *
     * @param string|null $id Ite Budget id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $iteBudget = $this->IteBudgets->get($id, [
            'contain' => []
        ]);

        $this->set('iteBudget', $iteBudget);
        $this->set('_serialize', ['iteBudget']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $iteBudget = $this->IteBudgets->newEntity();
        if ($this->request->is('post')) {
            $iteBudget = $this->IteBudgets->patchEntity($iteBudget, $this->request->getData());
            if ($this->IteBudgets->save($iteBudget)) {
                $this->Flash->success(__('The ite budget has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ite budget could not be saved. Please, try again.'));
        }
        $this->set(compact('iteBudget'));
        $this->set('_serialize', ['iteBudget']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ite Budget id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $iteBudget = $this->IteBudgets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $iteBudget = $this->IteBudgets->patchEntity($iteBudget, $this->request->getData());
            if ($this->IteBudgets->save($iteBudget)) {
                $this->Flash->success(__('The ite budget has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ite budget could not be saved. Please, try again.'));
        }
        $this->set(compact('iteBudget'));
        $this->set('_serialize', ['iteBudget']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ite Budget id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $iteBudget = $this->IteBudgets->get($id);
        if ($this->IteBudgets->delete($iteBudget)) {
            $this->Flash->success(__('The ite budget has been deleted.'));
        } else {
            $this->Flash->error(__('The ite budget could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
