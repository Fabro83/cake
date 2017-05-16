<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PerGenders Controller
 *
 * @property \App\Model\Table\PerGendersTable $PerGenders
 *
 * @method \App\Model\Entity\PerGender[] paginate($object = null, array $settings = [])
 */
class PerGendersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $perGenders = $this->paginate($this->PerGenders);

        $this->set(compact('perGenders'));
        $this->set('_serialize', ['perGenders']);
    }

    /**
     * View method
     *
     * @param string|null $id Per Gender id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $perGender = $this->PerGenders->get($id, [
            'contain' => []
        ]);

        $this->set('perGender', $perGender);
        $this->set('_serialize', ['perGender']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $perGender = $this->PerGenders->newEntity();
        if ($this->request->is('post')) {
            $perGender = $this->PerGenders->patchEntity($perGender, $this->request->getData());
            if ($this->PerGenders->save($perGender)) {
                $this->Flash->success(__('The per gender has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The per gender could not be saved. Please, try again.'));
        }
        $this->set(compact('perGender'));
        $this->set('_serialize', ['perGender']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Per Gender id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $perGender = $this->PerGenders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $perGender = $this->PerGenders->patchEntity($perGender, $this->request->getData());
            if ($this->PerGenders->save($perGender)) {
                $this->Flash->success(__('The per gender has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The per gender could not be saved. Please, try again.'));
        }
        $this->set(compact('perGender'));
        $this->set('_serialize', ['perGender']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Per Gender id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $perGender = $this->PerGenders->get($id);
        if ($this->PerGenders->delete($perGender)) {
            $this->Flash->success(__('The per gender has been deleted.'));
        } else {
            $this->Flash->error(__('The per gender could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
