<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PerDocumentTypes Controller
 *
 * @property \App\Model\Table\PerDocumentTypesTable $PerDocumentTypes
 *
 * @method \App\Model\Entity\PerDocumentType[] paginate($object = null, array $settings = [])
 */
class PerDocumentTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $perDocumentTypes = $this->paginate($this->PerDocumentTypes);

        $this->set(compact('perDocumentTypes'));
        $this->set('_serialize', ['perDocumentTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Per Document Type id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $perDocumentType = $this->PerDocumentTypes->get($id, [
            'contain' => []
        ]);

        $this->set('perDocumentType', $perDocumentType);
        $this->set('_serialize', ['perDocumentType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $perDocumentType = $this->PerDocumentTypes->newEntity();
        if ($this->request->is('post')) {
            $perDocumentType = $this->PerDocumentTypes->patchEntity($perDocumentType, $this->request->getData());
            if ($this->PerDocumentTypes->save($perDocumentType)) {
                $this->Flash->success(__('The per document type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The per document type could not be saved. Please, try again.'));
        }
        $this->set(compact('perDocumentType'));
        $this->set('_serialize', ['perDocumentType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Per Document Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $perDocumentType = $this->PerDocumentTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $perDocumentType = $this->PerDocumentTypes->patchEntity($perDocumentType, $this->request->getData());
            if ($this->PerDocumentTypes->save($perDocumentType)) {
                $this->Flash->success(__('The per document type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The per document type could not be saved. Please, try again.'));
        }
        $this->set(compact('perDocumentType'));
        $this->set('_serialize', ['perDocumentType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Per Document Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $perDocumentType = $this->PerDocumentTypes->get($id);
        if ($this->PerDocumentTypes->delete($perDocumentType)) {
            $this->Flash->success(__('The per document type has been deleted.'));
        } else {
            $this->Flash->error(__('The per document type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
