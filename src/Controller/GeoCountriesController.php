<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GeoCountries Controller
 *
 * @property \App\Model\Table\GeoCountriesTable $GeoCountries
 *
 * @method \App\Model\Entity\GeoCountry[] paginate($object = null, array $settings = [])
 */
class GeoCountriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $geoCountries = $this->paginate($this->GeoCountries);

        $this->set(compact('geoCountries'));
        $this->set('_serialize', ['geoCountries']);
    }

    /**
     * View method
     *
     * @param string|null $id Geo Country id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $geoCountry = $this->GeoCountries->get($id, [
            'contain' => []
        ]);

        $this->set('geoCountry', $geoCountry);
        $this->set('_serialize', ['geoCountry']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $geoCountry = $this->GeoCountries->newEntity();
        if ($this->request->is('post')) {
            $geoCountry = $this->GeoCountries->patchEntity($geoCountry, $this->request->getData());
            if ($this->GeoCountries->save($geoCountry)) {
                $this->Flash->success(__('The geo country has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The geo country could not be saved. Please, try again.'));
        }
        $this->set(compact('geoCountry'));
        $this->set('_serialize', ['geoCountry']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Geo Country id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $geoCountry = $this->GeoCountries->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $geoCountry = $this->GeoCountries->patchEntity($geoCountry, $this->request->getData());
            if ($this->GeoCountries->save($geoCountry)) {
                $this->Flash->success(__('The geo country has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The geo country could not be saved. Please, try again.'));
        }
        $this->set(compact('geoCountry'));
        $this->set('_serialize', ['geoCountry']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Geo Country id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $geoCountry = $this->GeoCountries->get($id);
        if ($this->GeoCountries->delete($geoCountry)) {
            $this->Flash->success(__('The geo country has been deleted.'));
        } else {
            $this->Flash->error(__('The geo country could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
