<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            <?= $this->fetch('title') ?>
            <?= ' | ' . \Cake\Core\Configure::read('suffixTitlePage'); ?>
        </title>
        <!-- Tell the browser to be responsive to screen width -->
        <?= $this->Html->meta('icon') ?>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <?= $this->Html->css('/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css') ?>
        <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css') ?>
        <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css') ?>
        <?= $this->Html->css('/bower_components/AdminLTE/dist/css/AdminLTE.min.css') ?>
        <?= $this->Html->css('/bower_components/AdminLTE/dist/css/skins/_all-skins.min.css') ?>
        <?= $this->Html->css('/bower_components/AdminLTE/plugins/iCheck/square/blue.css') ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <?= $this->element('header/logo') ?>
                <!-- Header Navbar: style can be found in header.less -->
                <?= $this->element('header/navbar') ?>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <?= $this->element('left_menu') ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <?= $this->fetch('content') ?>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <?= $this->element('footer') ?>
        </div>
        <!-- ./wrapper -->

        <?= $this->Html->script('/bower_components/AdminLTE/plugins/jQuery/jQuery-2.2.0.min.js') ?>

        <?= $this->Html->script('/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js') ?>
        <?= $this->Html->script('/bower_components/AdminLTE/plugins/iCheck/icheck.min.js') ?>
        <!-- AdminLTE App -->
        <?= $this->Html->script('/bower_components/AdminLTE/plugins/morris/morris.min.js') ?>
        <?= $this->Html->script('/bower_components/AdminLTE/dist/js/app.min.js') ?>
        <?= $this->Html->script('/bower_components/AdminLTE/dist/js/pages/dashboard.js') ?>
        <?= $this->Html->script('/bower_components/AdminLTE/dist/js/demo.js') ?>
    </body>
</html>
