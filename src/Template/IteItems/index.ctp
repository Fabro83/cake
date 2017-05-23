<?php
/**
  * @var \App\View\AppView $this
  */
  use Cake\Routing\Router

?>
<!-- <div class="iteItems index large-9 medium-8 columns content"> -->
<div class="content" data-ng-controller="getInd">
  <div class="row" ng-init="getItems()">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <!-- <h3 class="box-title">Listado de items</h3> -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <!-- <table id="example1" class="table table-bordered table-striped"> -->
          <table ng-table="vm.tableParams" class="table" show-filter="true">
              <tr ng-repeat="a in item">
                  <td title="'Picture'" filter="{ picture: 'text'}" sortable="'picture'">
                      {{a.picture}}</td>
                  <td title="'Expediente'" filter="{ file: 'number'}" sortable="'file'">
                      {{a.file}}</td>
              </tr>
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
    $scope.item2 = [];
    $scope.getItems = function() {

      $http({
      method: 'get',
      url: "<?php echo Router::url(array('controller' => 'IteItems', 'action' => 'getIndexClass')) ?>" + '/' + '1'
      }).then(function (response) {
          debugger;
          $scope.item2 = response.data;
        console.log(response.data);
      },function (error){
          console.log(error);
      });
    };

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
