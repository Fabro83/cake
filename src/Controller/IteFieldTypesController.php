<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * IteFieldTypes Controller
 *
 * @property \App\Model\Table\IteFieldTypesTable $IteFieldTypes
 *
 * @method \App\Model\Entity\IteFieldType[] paginate($object = null, array $settings = [])
 */
class IteFieldTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $iteFieldTypes = $this->paginate($this->IteFieldTypes);

        $this->set(compact('iteFieldTypes'));
        $this->set('_serialize', ['iteFieldTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Ite Field Type id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $iteFieldType = $this->IteFieldTypes->get($id, [
            'contain' => []
        ]);

        $this->set('iteFieldType', $iteFieldType);
        $this->set('_serialize', ['iteFieldType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $iteFieldType = $this->IteFieldTypes->newEntity();
        if ($this->request->is('post')) {
            $iteFieldType = $this->IteFieldTypes->patchEntity($iteFieldType, $this->request->getData());
            if ($this->IteFieldTypes->save($iteFieldType)) {
                $this->Flash->success(__('The ite field type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ite field type could not be saved. Please, try again.'));
        }
        $this->set(compact('iteFieldType'));
        $this->set('_serialize', ['iteFieldType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ite Field Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $iteFieldType = $this->IteFieldTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $iteFieldType = $this->IteFieldTypes->patchEntity($iteFieldType, $this->request->getData());
            if ($this->IteFieldTypes->save($iteFieldType)) {
                $this->Flash->success(__('The ite field type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ite field type could not be saved. Please, try again.'));
        }
        $this->set(compact('iteFieldType'));
        $this->set('_serialize', ['iteFieldType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ite Field Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $iteFieldType = $this->IteFieldTypes->get($id);
        if ($this->IteFieldTypes->delete($iteFieldType)) {
            $this->Flash->success(__('The ite field type has been deleted.'));
        } else {
            $this->Flash->error(__('The ite field type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
