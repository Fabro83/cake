<?php
$file = $theme['folder'] . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'aside' . DS . 'sidebar-menu.ctp';

if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
?>
<ul class="sidebar-menu">
    <li class="header">MENU</li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Items patrimonio</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/IteItems/add'); ?>"><i class="fa fa-circle-o"></i>Nuevo items</a></li>
            <li><a href="<?php echo $this->Url->build('/IteItems/'); ?>"><i class="fa fa-circle-o"></i> Ver items</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-files-o"></i> <span>Direcciones</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/ite-budgets/add'); ?>"><i class="fa fa-circle-o"></i>Nueva dirección</a></li>
            <li><a href="<?php echo $this->Url->build('/ite-budgets/'); ?>"><i class="fa fa-circle-o"></i> Ver direcciones</a></li>
        </ul>
    </li>
</ul>
<?php } ?>
