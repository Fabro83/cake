<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Patrimonio</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <?php echo $this->Html->script('AdminLTE./js/jquery-3.1.1.min'); ?>
    <?php echo $this->Html->script('AdminLTE./bootstrap/js/bootstrap'); ?>
    <?php echo $this->Html->css('AdminLTE./bootstrap/css/bootstrap'); ?>

    <?php echo $this->Html->script('AdminLTE./datepicker/bootstrap-datepicker'); ?>
    <?php echo $this->Html->css('AdminLTE./datepicker/datepicker3'); ?>

    <?php echo $this->Html->script('AdminLTE./BootstrapFileupload/js/fileinput.min'); ?>
    <?php echo $this->Html->script('AdminLTE./BootstrapFileupload/js/fileinput_locale_es'); ?>
    <?php echo $this->Html->css('AdminLTE./BootstrapFileupload/css/fileinput.min'); ?>

    <?php echo $this->Html->script('AdminLTE./plugins/slimScroll/jquery.slimscroll.min'); ?>
    <?php //echo $this->Html->script('AdminLTE./plugins/fastclick/fastclick'); ?>
    <?php echo $this->Html->script('AdminLTE.AdminLTE.min'); ?>
    <?php echo $this->Html->script(array('angular/angular.js','angular/1.5.6-angular-route.min.js','angular/app/app','bootstrap-notify')); ?>

    <!-- <link rel="stylesheet"; href="https://unpkg.com/ng-table@2.0.2/bundles/ng-table.min.css">
    <script src="https://unpkg.com/ng-table@2.0.2/bundles/ng-table.min.js"></script> -->
    <?php echo $this->Html->script('AdminLTE./angular-smart-table/dist/smart-table'); ?>
    <?php //echo $this->Html->css('AdminLTE./angular-smart-table/src/smart-table.module'); ?>
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Theme style -->
    

    <?php echo $this->Html->css('AdminLTE.AdminLTE.min'); ?>
    <?php echo $this->Html->css('AdminLTE./datatables/jquery.dataTables_themeroller'); ?>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
    <?php echo $this->Html->css('AdminLTE./font-awesome/css/font-awesome'); ?>
    <?php echo $this->Html->css('AdminLTE./font-awesome/css/font-awesome'); ?>


<!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <?php echo $this->Html->css('AdminLTE.skins/skin-blue'); ?>

    <?php echo $this->fetch('css'); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<script>
    var GLOBAL_baseUrl = <?php echo $html->url; ?>;
</script>
<![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="<?php echo $this->Url->build('/'); ?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><?php echo $theme['logo']['mini'] ?></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><?php echo $theme['logo']['large'] ?></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <?php echo $this->element('nav-top') ?>
        </header>

        <!-- Left side column. contains the sidebar -->
        <?php echo $this->element('aside-main-sidebar'); ?>
        

        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <?php echo $this->Flash->render(); ?>
            <?php echo $this->Flash->render('auth'); ?>
            <?php echo $this->fetch('content'); ?>

        </div>
        <!-- /.content-wrapper -->

        <?php echo $this->element('footer'); ?>

        <!-- Control Sidebar -->
        <?php echo $this->element('aside-control-sidebar'); ?>

        <!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<!-- AdminLTE for demo purposes -->
<?php echo $this->fetch('script'); ?>
<?php echo $this->fetch('scriptBotton'); ?>
<script type="text/javascript">
    $(document).ready(function(){
        $(".navbar .menu").slimscroll({
            height: "200px",
            alwaysVisible: false,
            size: "3px"
        }).css("width", "100%");

        var a = $('a[href="<?php echo $this->request->webroot . $this->request->url ?>"]');
        if (!a.parent().hasClass('treeview')) {
            a.parent().addClass('active').parents('.treeview').addClass('active');
        }
    });
</script>
</body>
</html>
