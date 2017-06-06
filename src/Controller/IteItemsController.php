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
            'contain' => ['IteBudgets', 'IteAcquisitionTypes', 'IteStatuses', 'IteClasses', 'IteTypes'],
            'conditions'=> ['IteItems.status_id'=> 1],//SOLO MUESTRA LOS QUE ESTAN DADO DE ALTA
            'limit'=> 100
        ];
        $iteItems = $this->paginate($this->IteItems);
        $iteBudgets = $this->IteItems->IteBudgets->find('all', ['limit' => 200]);
        $iteAcquisitionTypes = $this->IteItems->IteAcquisitionTypes->find('all', ['limit' => 200]);
        $iteStatuses = $this->IteItems->IteStatuses->find('all', ['limit' => 200]);
        $iteClasses = $this->IteItems->IteClasses->find('all', ['limit' => 200]);
        $iteTypes = $this->IteItems->IteTypes->find('all', ['limit' => 200]);
        $this->set(compact('iteItems', 'iteBudgets','iteAcquisitionTypes','iteStatuses','iteClasses','iteTypes'));
        $this->set('_serialize', ['iteItems', 'iteBudgets','iteAcquisitionTypes','iteStatuses','iteClasses','iteTypes']);
    }

    public function getIndexClass($id)
    {
        $this->autoRender = false;
        // $iteItems = $this->IteItems->find('all', array(
        // 'conditions' => ['IteItems.item_class_id' => $id],
        // 'limit'=>8, //SI CONTIENE MUCHOS ITEMS LA VARIABLE $IteItems SE HACE MUY GRANDE POR LO CUAL DEBEMOS MODIFICAR LA CONFIGURACION DEL PHP.INI
        // 'contain' => ['IteBudgets', 'IteAcquisitionTypes', 'IteStatuses', 'IteClasses', 'IteTypes']));
        $this->paginate = [
            'contain' => ['IteBudgets', 'IteAcquisitionTypes', 'IteStatuses', 'IteClasses', 'IteTypes'],
            'conditions'=> ['IteItems.status_id'=> 1,'IteItems.item_class_id' => $id],//SOLO MUESTRA LOS QUE ESTAN DADO DE ALTA
            'limit'=> 8
        ];
        $iteItems = $this->paginate($this->IteItems);
        $a = array();
        $a = $iteItems->toArray();//CASTEA LA VARIABLE EN UN ARREGLO
        $a = print_r(json_encode($a));// CONVIERTE EL ARREGLO EN UN ARREGLO JSON PARA QUE PUEDA SER LEIDO EN LA FUNCION GET YA QUE ESTA SOLO LEE TEXTOS PLANOS Y JSON
          // pr($a);
        $this->set(compact(array(
            'data' => $a,
             '_serialize' => array('data')
        )));
    }
    public function getEditItem($id)
    {
      $this->autoRender = false;
      $iteItem = $this->IteItems->get($id, [
          'contain' => []
      ]);
      $a = array();
      $a = $iteItem->toArray();//CASTEA LA VARIABLE EN UN ARREGLO
      $a = print_r(json_encode($a));// CONVIERTE EL ARREGLO EN UN ARREGLO JSON PARA QUE PUEDA SER LEIDO EN LA FUNCION GET YA QUE ESTA SOLO LEE TEXTOS PLANOS Y JSON
        // pr($a);
      $this->set(compact(array(
          'data' => $a,
           '_serialize' => array('data')
      )));
    }
    public function view($id = null)
    {
        $iteItem = $this->IteItems->get($id, [
            'contain' => ['IteBudgets', 'IteAcquisitionTypes', 'IteStatuses', 'IteClasses', 'IteTypes']
        ]);

        $this->set('iteItem', $iteItem);
        $this->set('_serialize', ['iteItem']);
    }
    public function add()
    {
        $iteItem = $this->IteItems->newEntity();
        if ($this->request->is('post')) {
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
        $iteClasses = $this->IteItems->IteClasses->find('all', ['limit' => 200]);
        $iteTypes = $this->IteItems->IteTypes->find('all',['limit' => 200]);
        // pr($iteTypes);
        $this->set(compact('iteItem', 'iteBudgets', 'iteAcquisitionTypes', 'iteStatuses', 'iteClasses', 'iteTypes'));
        $this->set('_serialize', ['iteItem']);
    }
    public function edit($id = null)
    {
        $iteItem = $this->IteItems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $this->autoRender = false;
            $iteItem = $this->IteItems->patchEntity($iteItem, $this->request->getData());
            // pr($iteItem);
            if ($this->IteItems->save($iteItem)) {
                // $this->Flash->success(__('The ite item has been saved.'));
                $this->set(compact(array(
                    'data' => "El registro se actualizo correctamente",
                     '_serialize' => array('data')
                )));
            }
            $this->set(compact(array(
                'data' => "Hubo un problema, no pudimos actualizar el registro, intente nuevamente",
                 '_serialize' => array('data')
            )));
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
    public function delete($id = null)
    {
        // $this->request->allowMethod(['post', 'delete']);
        $iteItem = $this->IteItems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['get'])){
          $this->autoRender = false;
          $iteItem->status_id = 2;
          if ($this->IteItems->save($iteItem)) {

          }
        }else{
        }
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
