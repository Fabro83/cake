<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PerPersons Controller
 *
 * @property \App\Model\Table\PerPersonsTable $PerPersons
 *
 * @method \App\Model\Entity\PerPerson[] paginate($object = null, array $settings = [])
 */
class PerPersonsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $perPersons = $this->paginate($this->PerPersons);

        $this->set(compact('perPersons'));
        $this->set('_serialize', ['perPersons']);
    }

    /**
     * View method
     *
     * @param string|null $id Per Person id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $perPerson = $this->PerPersons->get($id, [
            'contain' => []
        ]);

        $this->set('perPerson', $perPerson);
        $this->set('_serialize', ['perPerson']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $perPerson = $this->PerPersons->newEntity();
        if ($this->request->is('post')) {
            $perPerson = $this->PerPersons->patchEntity($perPerson, $this->request->getData());
            if ($this->PerPersons->save($perPerson)) {
                $this->Flash->success(__('The per person has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The per person could not be saved. Please, try again.'));
        }
        $this->set(compact('perPerson'));
        $this->set('_serialize', ['perPerson']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Per Person id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $perPerson = $this->PerPersons->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $perPerson = $this->PerPersons->patchEntity($perPerson, $this->request->getData());
            if ($this->PerPersons->save($perPerson)) {
                $this->Flash->success(__('The per person has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The per person could not be saved. Please, try again.'));
        }
        $this->set(compact('perPerson'));
        $this->set('_serialize', ['perPerson']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Per Person id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $perPerson = $this->PerPersons->get($id);
        if ($this->PerPersons->delete($perPerson)) {
            $this->Flash->success(__('The per person has been deleted.'));
        } else {
            $this->Flash->error(__('The per person could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
