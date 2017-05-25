<?php
/**
  * @var \App\View\AppView $this
  */
  use Cake\Routing\Router;

?>
<!-- <div class="iteItems index large-9 medium-8 columns content"> -->
<div class="content" data-ng-controller="getInd">
  <div class="row" ng-init="getItems()">
    <div class="col-xs-12">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <!-- <table id="example1" class="table table-bordered table-striped"> -->
          <table st-table="item" class="table table-striped">
            <thead>
                <tr>
                    <th><input st-search="picture" placeholder="Nombre de la imagen" class="input-sm form-control" type="search"/></th>
                    <th><input st-search="file_id" placeholder="N° Expediente" class="input-sm form-control" type="search"/></th>
                    <th><input st-search="year" placeholder="Año" class="input-sm form-control" type="search"/></th>
                    <th><input st-search="decree" placeholder="Decreto" class="input-sm form-control" type="search"/></th>
                    <th><input st-search="price" placeholder="Precio" class="input-sm form-control" type="search"/></th>
                    <th><input st-search="ite_budget.value" placeholder="Partida" class="input-sm form-control" type="search"/></th>
                </tr>
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
                <td><img ng-src="/cake/img/{{row.picture}}"  alt=""></td>
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

                <!-- Modal -->
                <div id="myModal{{$index}}" class="modal fade" tabindex="1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title">Cambiar valores de la variable</h4>
                            </div>
                            <div class="modal-body">
                                <img ng-src="/cake/img/{{row.picture}}"  alt="">
                                <input type="number" class="form-control" id="file_id" ng-model="row.file_id">
                                <input type="number" class="form-control" id="year" ng-model="row.year">
                                <input type="number" class="form-control" id="decree" ng-model="row.decree">
                                <input type="number" class="form-control" id="price" ng-model="row.price">
                                <input  class="form-control" id="ite_budget.value" ng-model="row.ite_budget.value">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" ng-click="saved(row)" class="btn btn-primary">Save changes</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </tr>
            </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
  </div>
  <!-- /.row -->
</div>




<script type="text/javascript">
mainApp.controller('getInd', function($scope,$http){

    $scope.item = <?php echo json_encode($iteItems) ?>;
    $scope.items = [];
    $scope.getItems = function() {

      $http({
      method: 'get',
      url: "<?php echo Router::url(array('controller' => 'IteItems', 'action' => 'getIndexClass')) ?>" + '/' + '1'
      }).then(function (response) {
          // debugger;
          $scope.items = response.data;
        console.log(response.data);
      },function (error){
          console.log(error);
      });
    };
    $scope.removeRow = function removeRow(row) {
      // debugger;
        var index = $scope.item.indexOf(row);
        if (index !== -1) {
            $scope.item.splice(index, 1);
        }
    }
    $scope.OpenModal = function (index){
      // debugger;
      $('#myModal'+index).modal()
      $('#myModal'+index).on('shown.bs.modal', function () {
        $('#myInput').focus()
      })
    }
    $scope.saved = function (row){
      //Hacer que la vista del edit, se muestre en el modal
      debugger;
      $http({
            method: 'POST',
            url: "<?php echo Router::url(array('controller' => 'IteItems', 'action' => 'edit')) ?>" + '/' + row.id ,
            data: row,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then(function (data, status, headers, config) {
            // handle success things
        }).error(function (data, status, headers, config) {
            // handle error things
        });
    }
});

</script>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primero')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de un total de {{count}}')]) ?></p>
    </div>
