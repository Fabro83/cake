<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * IteClasses Controller
 *
 * @property \App\Model\Table\IteClassesTable $IteClasses
 *
 * @method \App\Model\Entity\IteClass[] paginate($object = null, array $settings = [])
 */
class IteClassesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $iteClasses = $this->paginate($this->IteClasses);

        $this->set(compact('iteClasses'));
        $this->set('_serialize', ['iteClasses']);
    }

    /**
     * View method
     *
     * @param string|null $id Ite Class id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $iteClass = $this->IteClasses->get($id, [
            'contain' => []
        ]);

        $this->set('iteClass', $iteClass);
        $this->set('_serialize', ['iteClass']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $iteClass = $this->IteClasses->newEntity();
        if ($this->request->is('post')) {
            $iteClass = $this->IteClasses->patchEntity($iteClass, $this->request->getData());
            if ($this->IteClasses->save($iteClass)) {
                $this->Flash->success(__('The ite class has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ite class could not be saved. Please, try again.'));
        }
        $this->set(compact('iteClass'));
        $this->set('_serialize', ['iteClass']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ite Class id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $iteClass = $this->IteClasses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $iteClass = $this->IteClasses->patchEntity($iteClass, $this->request->getData());
            if ($this->IteClasses->save($iteClass)) {
                $this->Flash->success(__('The ite class has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ite class could not be saved. Please, try again.'));
        }
        $this->set(compact('iteClass'));
        $this->set('_serialize', ['iteClass']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ite Class id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $iteClass = $this->IteClasses->get($id);
        if ($this->IteClasses->delete($iteClass)) {
            $this->Flash->success(__('The ite class has been deleted.'));
        } else {
            $this->Flash->error(__('The ite class could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
