<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!-- <div class="iteItems index large-9 medium-8 columns content"> -->
<div class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <!-- <h3 class="box-title">Hover Data Table</h3> -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="itemTable" class="table table-bordered table-hover">
          <table id="example1_wrapper" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('picture') ?></th>
                <th scope="col"><?= $this->Paginator->sort('N° Expediente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('decree') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?php //$this->Paginator->sort('sector_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('budget_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acquisition_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_class_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_type_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($iteItems as $iteItem): ?>
            <tr>
                <td><?= $this->Html->image($iteItem->picture)  ?></td>
                <td><?= $this->Number->format($iteItem->file_id) ?></td>
                <td><?= $this->Number->format($iteItem->year) ?></td>
                <td><?= $this->Number->format($iteItem->decree) ?></td>
                <td><?= $this->Number->format($iteItem->price) ?></td>
                <td><?php //$this->Number->format($iteItem->sector_id) ?></td>
                <td><?= $iteItem->has('ite_budget') ? $this->Html->link($iteItem->ite_budget->value, ['controller' => 'IteBudgets', 'action' => 'edit', $iteItem->ite_budget->id]) : '' ?></td>
                <td><?= $iteItem->has('ite_acquisition_type') ? $this->Html->link($iteItem->ite_acquisition_type->value, ['controller' => 'IteAcquisitionTypes', 'action' => 'view', $iteItem->ite_acquisition_type->value]) : '' ?></td>
                <td><?= $iteItem->has('ite_status') ? $this->Html->link($iteItem->ite_status->value, ['controller' => 'IteStatuses', 'action' => 'view', $iteItem->ite_status->id]) : '' ?></td>
                <td><?= $iteItem->has('ite_class') ? $this->Html->link($iteItem->ite_class->value, ['controller' => 'IteClasses', 'action' => 'view', $iteItem->ite_class->id]) : '' ?></td>
                <td><?= $iteItem->has('ite_type') ? $this->Html->link($iteItem->ite_type->value, ['controller' => 'IteTypes', 'action' => 'view', $iteItem->ite_type->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link('<span class="glyphicon glyphicon-eye-open"></span>', array('action' => 'view', $iteItem->id), array('title' => 'Ver', 'escape' => false)); ?>
                    <?= $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $iteItem->id), array('title' => 'Editar', 'escape' => false)); ?>
                    <?= $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', ['action' => 'delete', $iteItem->id], array('title' => 'eliminar', 'escape' => false,['confirm' => __('Quiere eliminarlo # {0}?', $iteItem->id)])) ?>
                </td>
            </tr>
            <?php endforeach; ?>
          </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
  </div>
  <!-- /.row -->

  <?php
  $this->Html->css([
  'AdminLTE./plugins/datatables/dataTables.bootstrap',
  ],
  ['block' => 'css']);

  $this->Html->script([
  'AdminLTE./plugins/datatables/jquery.dataTables.min',
  'AdminLTE./plugins/datatables/dataTables.bootstrap.min',
  ],
  ['block' => 'script']);
  ?>

  <script>
  $(function () {
  $("#example1").DataTable();
  $('#itemTable').DataTable({
  "paging": true,
  "lengthChange": false,
  "searching": false,
  "ordering": true,
  "info": true,
  "autoWidth": false
  });
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
</div>
