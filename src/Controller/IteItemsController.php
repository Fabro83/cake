<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;

/**
 * IteItems Controller
 *
 * @property \App\Model\Table\IteItemsTable $IteItems
 *
 * @method \App\Model\Entity\IteItem[] paginate($object = null, array $settings = [])
 */
class IteItemsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['IteBudgets', 'IteAcquisitionTypes', 'IteStatuses', 'IteClasses', 'IteTypes']
        ];
        $iteItems = $this->paginate($this->IteItems);

        $this->set(compact('iteItems'));
        $this->set('_serialize', ['iteItems']);
    }

    public function getIndexClass($id)
    {
          $this->autoRender = false;
          $iteItems = $this->paginate($this->IteItems->find('all', array(
          'conditions' => ['IteItems.item_class_id' => $id],
          'contain' => ['IteBudgets', 'IteAcquisitionTypes', 'IteStatuses', 'IteClasses', 'IteTypes'])));
// pr($iteItems);
// $this->set('iteItems', $iteItems);
 $a = json_encode($iteItems);
$this->set(array(
        'data' => $a,
         '_serialize' => array('data')
    ));
        // $this->set(compact('iteItems'));
        // $this->set('_serialize', ['iteItems']);

    }

    /**
     * View method
     *
     * @param string|null $id Ite Item id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $iteItem = $this->IteItems->get($id, [
            'contain' => ['IteBudgets', 'IteAcquisitionTypes', 'IteStatuses', 'IteClasses', 'IteTypes']
        ]);

        $this->set('iteItem', $iteItem);
        $this->set('_serialize', ['iteItem']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $iteItem = $this->IteItems->newEntity();
        if ($this->request->is('post')) {
          pr($this->request->data);
            $iteItem = $this->IteItems->patchEntity($iteItem, $this->request->getData());
            if ($this->IteItems->save($iteItem)) {
                $this->Flash->success(__('The ite item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ite item could not be saved. Please, try again.'));
        }
        // $files = $this->IteItems->Files->find('list', ['limit' => 200]);
        $iteBudgets = $this->IteItems->IteBudgets->find('list', ['limit' => 200]);
        $iteAcquisitionTypes = $this->IteItems->IteAcquisitionTypes->find('list', ['limit' => 200]);
        $iteStatuses = $this->IteItems->IteStatuses->find('list', ['limit' => 200]);
        $iteClasses = $this->IteItems->IteClasses->find('list', ['limit' => 200]);
        $iteTypes = $this->IteItems->IteTypes->find('list', ['limit' => 200]);
        $this->set(compact('iteItem', 'iteBudgets', 'iteAcquisitionTypes', 'iteStatuses', 'iteClasses', 'iteTypes'));
        $this->set('_serialize', ['iteItem']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ite Item id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $iteItem = $this->IteItems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $iteItem = $this->IteItems->patchEntity($iteItem, $this->request->getData());
            if ($this->IteItems->save($iteItem)) {
                $this->Flash->success(__('The ite item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ite item could not be saved. Please, try again.'));
        }
        // $files = $this->IteItems->Files->find('list', ['limit' => 200]);
        $iteBudgets = $this->IteItems->IteBudgets->find('list', ['limit' => 200]);
        $iteAcquisitionTypes = $this->IteItems->IteAcquisitionTypes->find('list', ['limit' => 200]);
        $iteStatuses = $this->IteItems->IteStatuses->find('list', ['limit' => 200]);
        $iteClasses = $this->IteItems->IteClasses->find('list', ['limit' => 200]);
        $iteTypes = $this->IteItems->IteTypes->find('list', ['limit' => 200]);
        $this->set(compact('iteItem', 'iteBudgets', 'iteAcquisitionTypes', 'iteStatuses', 'iteClasses', 'iteTypes'));
        $this->set('_serialize', ['iteItem']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ite Item id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $iteItem = $this->IteItems->get($id);
        if ($this->IteItems->delete($iteItem)) {
            $this->Flash->success(__('The ite item has been deleted.'));
        } else {
            $this->Flash->error(__('The ite item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function upload (){
      $carpetaAdjunta="imagenes_/";
      // Contar envían por el plugin
      $Imagenes =count(isset($_FILES['imagenes']['name'])?$_FILES['imagenes']['name']:0);
      $infoImagenesSubidas = array();
      for($i = 0; $i < $Imagenes; $i++) {

      	// El nombre y nombre temporal del archivo que vamos para adjuntar
      	$nombreArchivo=isset($_FILES['imagenes']['name'][$i])?$_FILES['imagenes']['name'][$i]:null;
      	$nombreTemporal=isset($_FILES['imagenes']['tmp_name'][$i])?$_FILES['imagenes']['tmp_name'][$i]:null;

      	$rutaArchivo=$carpetaAdjunta.$nombreArchivo;

      	move_uploaded_file($nombreTemporal,$rutaArchivo);

      	$infoImagenesSubidas[$i]=array("caption"=>"$nombreArchivo","height"=>"120px","url"=>"borrar.php","key"=>$nombreArchivo);
      	$ImagenesSubidas[$i]="<img  height='120px'  src='$rutaArchivo' class='file-preview-image'>";

      	}

      $arr = array("file_id"=>0,"overwriteInitial"=>true,"initialPreviewConfig"=>$infoImagenesSubidas,
      			 "initialPreview"=>$ImagenesSubidas);
      echo json_encode($arr);
    }
}
