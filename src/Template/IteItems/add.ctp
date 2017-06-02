<?php
/**
  * @var \App\View\AppView $this
  */
?>
<style>
.kv-avatar .file-preview-frame,.kv-avatar .file-preview-frame:hover {
    margin: 0;
    padding: 0;
    border: none;
    box-shadow: none;
    text-align: center;
}
.kv-avatar .file-input {
    display: table-cell;
    max-width: 220px;
}
</style>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?php// __('Actions') ?></li>
        <li><?php //$this->Html->link(__('List Ite Items'), ['action' => 'index']) ?></li>
        <li><?php //$this->Html->link(__('List Ite Budgets'), ['controller' => 'IteBudgets', 'action' => 'index']) ?></li>
        <li><?php //$this->Html->link(__('New Ite Budget'), ['controller' => 'IteBudgets', 'action' => 'add']) ?></li>
        <li><?php //$this->Html->link(__('List Ite Acquisition Types'), ['controller' => 'IteAcquisitionTypes', 'action' => 'index']) ?></li>
        <li><?php //$this->Html->link(__('New Ite Acquisition Type'), ['controller' => 'IteAcquisitionTypes', 'action' => 'add']) ?></li>
        <li><?php //$this->Html->link(__('List Ite Statuses'), ['controller' => 'IteStatuses', 'action' => 'index']) ?></li>
        <li><?php //$this->Html->link(__('New Ite Status'), ['controller' => 'IteStatuses', 'action' => 'add']) ?></li>
        <li><?php //$this->Html->link(__('List Ite Classes'), ['controller' => 'IteClasses', 'action' => 'index']) ?></li>
        <li><?php //$this->Html->link(__('New Ite Class'), ['controller' => 'IteClasses', 'action' => 'add']) ?></li>
        <li><?php //$this->Html->link(__('List Ite Types'), ['controller' => 'IteTypes', 'action' => 'index']) ?></li>
        <li><?php //$this->Html->link(__('New Ite Type'), ['controller' => 'IteTypes', 'action' => 'add']) ?></li>
    </ul>
</nav> -->
<div class="iteItems form large-9 medium-8 columns content" data-ng-controller="AddItem">
    <?= $this->Form->create($iteItem) ?>
    <legend><?= __('Agregar el/los bienes') ?></legend>
    <div class="box box-success">
      <div class="box-header with-border">
      <!-- echo $this->Form->control('year', array('type'=>'text','label'=>'Año')); ?> -->
      <div class="form-group">
        <label>Fecha:</label>
        <div class="input-group date">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          <input type="text" class="form-control pull-right" id="year">
        </div>
      </div>
      <?php
      echo $this->Form->control('file_id',['label'=>'N° Expediente']);
      echo $this->Form->control('decree',['label'=>'Decreto']);
      echo $this->Form->control('budget_id', ['label'=>'Partida','options' => $iteBudgets]);
      echo $this->Form->control('acquisition_type_id', ['label'=>'Tipo de adquisicion','options' => $iteAcquisitionTypes]);
      echo $this->Form->control('status_id', ['label'=>'Estado','options' => $iteStatuses,'disabled']);
       ?>
     </div>
    </div>
    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal" ng-click="OpenModal()">
        <i class="glyphicon glyphicon-plus"></i>
    </button>
    <legend>Listado de bienes previos para ser cargados</legend>
    <fieldset>
      <div class="box box-primary">
        <div class="box-header with-border">
          <table st-table="item" class="table table-striped">
            <thead>
                <tr>
                    <th st-sort="picture" st-skip-natural="true">Imagen</th>
                    <th st-sort="file_id" st-skip-natural="true">N° Expediente</th>
                    <th st-sort="year" st-skip-natural="true">Año</th>
                    <th st-sort="decree" st-skip-natural="true">Decreto</th>
                    <th st-sort="price" st-skip-natural="true">Precio</th>
                    <th st-sort="price" st-skip-natural="true">Partida</th>
                </tr>
          	</thead>

            <tbody>    <!--{{item}}-->

            <tr ng-repeat="row in item">
                <td><img width="60px" ng-src="/cake/img/{{row.picture}}"  class="img-circle" alt=""></td>
                <td>{{row.file_id}}</td>
                <td>{{row.year}}</td>
                <td>{{row.decree}}</td>
                <td>{{row.price}}</td>
                <td>{{row.ite_budget.value}}</td>
                <!--{{row.file_id | date}}-->
                <!-- <td>{{row.file_id | currency}}</td> -->
                <td>
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal" ng-click="OpenModal($index)">
                        <i class="glyphicon glyphicon-edit"></i>
                    </button>
                    <button type="button" ng-click="removeRow(row)" class="btn btn-sm btn-danger">
                        <i class="glyphicon glyphicon-remove-circle"></i>
                    </button>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </fieldset>
    <!-- Modal -->
    <div id="myModal" class="modal fade" tabindex="1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Cambiar valores de la variable</h4>
                </div>
                <div class="modal-body">
                  <form method="post" accept-charset="utf-8" role="form" class="ng-pristine ng-valid">
                    <input placeholder="Ingrese observación" type="text" class="col-xs-6 form-control" id="comment" ng-model="var_comment">
                    <input placeholder="Precio" type="number" class="col-xs-6 form-control" id="price" ng-model="var_price">
                    <div class="form-group">
                      <h3>Busque una imagen</h3>
                      <input id="picture" type="file" class="file" ng-model="row.picture">
                    </div>
                    <select class="col-xs-3" name="repeatSelect" id="repeatSelect" ng-model="var_sector_id">
                        <option ng-repeat="option in SectorList"  value="{{option.id}}">{{option.value}}</option>
                    </select>
                    <select class="col-xs-3" name="repeatSelect" id="repeatSelect" ng-model="var_item_class_id">
                        <option ng-repeat="option in ClassList"  value="{{option.id}}">{{option.value}}</option>
                    </select>
                    <select class="col-xs-3" name="repeatSelect" id="repeatSelect" ng-model="var_item_type_id">
                        <option ng-repeat="option in TypeIteList"  value="{{option.id}}">{{option.value}}</option>
                    </select>
                  </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="col-xs-4 btn btn-default" data-dismiss="modal">Salir</button>
                    <button type="button" class="col-xs-4 btn btn-primary" ng-click="saved(row)" data-dismiss="modal" >Guardar cambios</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
<script type="text/javascript">
  // $("#picture").fileinput({
  //   showCaption: false,
  //   browseClass: "btn btn-primary btn-sm",
  //   fileType: "any"
  // });
</script>
<script type="text/javascript">
mainApp.controller('AddItem', function($scope,$http){
$scope.item = [];
//Iniciando las varibales del modal
$scope.var_comment = "";
$scope.var_price = "";
$scope.var_sector_id = "";
$scope.var_item_class_id = "";
$scope.var_item_type_id = "";
//Fin
$scope.ClassList = <?php echo json_encode ($iteClasses) ?>;
console.log($scope.ClassList);
$scope.TypeIteList = <?php echo json_encode ($iteTypes) ?>;
console.log($scope.TypeIteList);

$scope.OpenModal = function (){
  debugger;
  $('#myModal').modal()
  $('#myModal').on('shown.bs.modal', function () {
    $('#comment').focus()
  })
}

// $("#picture").fileinput({
// uploadUrl: "upload.php",
//   uploadAsync: false,
// showUpload: false,
// showRemove: false,
// initialPreview: [
// <?php //foreach($images as $image){?>
//   "<img src='<?php //echo $image; ?>' height='120px' class='file-preview-image'>",
// <?php //} ?>],
//   initialPreviewConfig: [<?php //foreach($images as $image){ $infoImagenes=explode("/",$image);?>
// {caption: "<?php //echo $infoImagenes[1];?>",  height: "120px", url: "borrar.php", key:"<?php //echo $infoImagenes[1];?>"},
// <?php //} ?>]
// }).on("filebatchselected", function(event, files) {
//
// $("#archivos").fileinput("upload");
//
// });

});

</script>
<script type="text/javascript">
    $(function () {
        $('#year').datepicker({
          format: "dd/mm/yyyy",
          language: "es",
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            },
            autoclose: true
        });
    });
     $("#input-4").fileinput({showCaption: false});
</script>
