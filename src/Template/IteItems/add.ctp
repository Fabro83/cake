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
<div class="iteItems form large-9 medium-8 columns content">
    <?= $this->Form->create($iteItem) ?>
    <fieldset>
        <legend><?= __('Add Ite Item') ?></legend>
        <?php
            echo $this->Form->control('file_id');
            //  echo $this->Form->control('year', array('type'=>'text','label'=>'Año')); ?>
            <div class="form-group">
              <label>Fecha:</label>

              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right" id="year">
              </div>
              <!-- /.input group -->
            </div>
          <?php echo $this->Form->control('decree');
            echo $this->Form->control('comment');
            echo $this->Form->control('price'); ?>
            <div class="form-group">
              <h3>Busque una imagen</h3>
              <input id="picture" type="file" class="file">
            </div>
            <?php //echo $this->Form->control('picture');
            echo $this->Form->control('sector_id');
            echo $this->Form->control('budget_id', ['options' => $iteBudgets]);
            echo $this->Form->control('acquisition_type_id', ['options' => $iteAcquisitionTypes]);
            echo $this->Form->control('status_id', ['options' => $iteStatuses]);
            echo $this->Form->control('item_class_id', ['options' => $iteClasses]);
            echo $this->Form->control('item_type_id', ['options' => $iteTypes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
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
debugger;
$("#picture").fileinput({
uploadUrl: "upload.php",
  uploadAsync: false,
showUpload: false,
showRemove: false,
initialPreview: [
<?php foreach($images as $image){?>
  "<img src='<?php echo $image; ?>' height='120px' class='file-preview-image'>",
<?php } ?>],
  initialPreviewConfig: [<?php foreach($images as $image){ $infoImagenes=explode("/",$image);?>
{caption: "<?php echo $infoImagenes[1];?>",  height: "120px", url: "borrar.php", key:"<?php echo $infoImagenes[1];?>"},
<?php } ?>]
}).on("filebatchselected", function(event, files) {

$("#archivos").fileinput("upload");

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
