<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?= $this->fetch('meta') ?>
        <title>
            <?= $this->assign('title', $pageTitle); ?>
            <?= __($this->fetch('title')); ?>
        </title>
        <?= $this->Html->meta('icon'); ?>

        <?= $this->Html->css('../bower_components/admin-lte/bootstrap/css/bootstrap.min.css'); ?>
        <?= $this->Html->css('../bower_components/admin-lte/plugins/select2/select2.min.css'); ?>
        <?= $this->Html->css('../bower_components/admin-lte/dist/css/AdminLTE.min.css'); ?>
        <?= $this->Html->css('../bower_components/admin-lte/dist/css/skins/skin-black-light.min.css'); ?>
        <?= $this->Html->css('../bower_components/admin-lte/plugins/daterangepicker/daterangepicker-bs3.css'); ?>
        <?= $this->Html->css('../bower_components/admin-lte/plugins/datepicker/datepicker3.css'); ?>
        <?= $this->Html->css('../bower_components/admin-lte/plugins/timepicker/bootstrap-timepicker.min.css'); ?>
        <?= $this->Html->css('../bower_components/jquery-ui/themes/smoothness/jquery-ui.min.css'); ?>
        <?= $this->fetch('css') ?>

        <?= $this->Html->script('/adminlte/plugins/jQuery/jQuery-2.2.0.min'); ?>
        <?= $this->Html->script('/adminlte/bootstrap/js/bootstrap.min'); ?>
        <?= $this->Html->script('/adminlte/plugins/select2/select2.full.min'); ?>
        <?= $this->Html->script('/adminlte/plugins/daterangepicker/daterangepicker.js'); ?>
        <?= $this->Html->script('/adminlte/plugins/datepicker/bootstrap-datepicker.js'); ?>
        <?= $this->Html->script('/adminlte/plugins/datepicker/locales/bootstrap-datepicker.ja.js'); ?>
        <?= $this->Html->script('/adminlte/plugins/timepicker/bootstrap-timepicker.min.js'); ?>

        <?= $this->Html->script('/jqueryui/jquery-ui.min'); ?>
        <?= $this->Html->script('/moment/moment.min'); ?>
        <?= $this->Html->script('jsrender'); ?>
        <?= $this->fetch('script'); ?>
    </head>
    <body class="hold-transition skin-black-light sidebar-mini">
        <?= $this->Flash->render(); ?>
        <div class="wrapper">
            <?= $this->element('header'); ?>
            <?= $this->element('sidebar'); ?>
            <div class="content-wrapper">
                <section class="content-header">
                    <?php $route = ['controller' => 'Tops', 'action' => 'index']; ?>
                    <?php $link  = __('Back to Top'); ?>
                    <a class="btn btn-default" href="<?= $this->Url->build($route); ?>">
                        <i class="fa fa-fw fa-chevron-left"></i>
                        <?= $link; ?>
                    </a>
                </section>
                <?= $this->fetch('content') ?>
            </div>
        </div>
    </body>
</html>