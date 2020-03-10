<?php $this->view('partials/head', array(
    "scripts" => array(
        "clients/client_list.js"
    )
)); ?>

<div class="container">

    <div class="row">

    <?php $widget->view($this, 'timezone'); ?>
    <?php $widget->view($this, 'networktime'); ?>
    <?php $widget->view($this, 'autotimezone'); ?>
    <?php $widget->view($this, 'timezone_graph'); ?>
    <?php $widget->view($this, 'networktime_graph'); ?>
    <?php $widget->view($this, 'autotimezone_graph'); ?>

    </div> <!-- /row -->

</div>  <!-- /container -->

<script src="<?php echo conf('subdirectory'); ?>assets/js/munkireport.autoupdate.js"></script>

<?php $this->view('partials/foot'); ?>
