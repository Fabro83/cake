<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * IteTypes Controller
 *
 * @property \App\Model\Table\IteTypesTable $IteTypes
 *
 * @method \App\Model\Entity\IteType[] paginate($object = null, array $settings = [])
 */
class IteTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['IteClasses']
        ];
        $iteTypes = $this->paginate($this->IteTypes);

        $this->set(compact('iteTypes'));
        $this->set('_serialize', ['iteTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Ite Type id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $iteType = $this->IteTypes->get($id, [
            'contain' => ['IteClasses']
        ]);

        $this->set('iteType', $iteType);
        $this->set('_serialize', ['iteType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $iteType = $this->IteTypes->newEntity();
        if ($this->request->is('post')) {
            $iteType = $this->IteTypes->patchEntity($iteType, $this->request->getData());
            if ($this->IteTypes->save($iteType)) {
                $this->Flash->success(__('The ite type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ite type could not be saved. Please, try again.'));
        }
        $iteClasses = $this->IteTypes->IteClasses->find('list', ['limit' => 200]);
        $this->set(compact('iteType', 'iteClasses'));
        $this->set('_serialize', ['iteType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ite Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $iteType = $this->IteTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $iteType = $this->IteTypes->patchEntity($iteType, $this->request->getData());
            if ($this->IteTypes->save($iteType)) {
                $this->Flash->success(__('The ite type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ite type could not be saved. Please, try again.'));
        }
        $iteClasses = $this->IteTypes->IteClasses->find('list', ['limit' => 200]);
        $this->set(compact('iteType', 'iteClasses'));
        $this->set('_serialize', ['iteType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ite Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $iteType = $this->IteTypes->get($id);
        if ($this->IteTypes->delete($iteType)) {
            $this->Flash->success(__('The ite type has been deleted.'));
        } else {
            $this->Flash->error(__('The ite type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
