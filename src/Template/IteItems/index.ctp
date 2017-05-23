<?php
/**
  * @var \App\View\AppView $this
  */
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
              <tr ng-repeat="item in $iteItems">
                  <td title="'Picture'" filter="{ name: 'text'}" sortable="'name'">
                      {{item.name}}</td>
                  <td title="'Expediente'" filter="{ age: 'number'}" sortable="'age'">
                      {{item.age}}</td>
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


  <script>



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
