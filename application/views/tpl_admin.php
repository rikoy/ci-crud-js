<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard - Bootstrap Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/pages/dashboard.css'); ?>" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script>
        var site_url = "<?= site_url() ?>";
    </script>
</head>

<body>
    <div id="wrap">
        <?= $this->load->view('tpl_admin_header'); ?>
        <!-- /navbar -->
        <?= $this->load->view('tpl_admin_nav_bar'); ?>
        <!-- /subnavbar -->
        <div class="main">
            <div class="main-inner">
                <div class="container">
                    <div class="row">
                        <div id="app-content"></div>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /main-inner -->
        </div>
        <!-- /main -->
    </div>
    <?= $this->load->view('tpl_admin_footer'); ?>
    <!-- /footer -->
    <!-- Le javascript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js/jquery-1.7.2.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/excanvas.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/chart.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
    <script language="javascript" type="text/javascript" src="<?php echo base_url('assets/js/full-calendar/fullcalendar.min.js'); ?>"></script>

    <script src="<?php echo base_url('assets/js/base.js'); ?>"></script>
    <script>
        var site_url = "<?= site_url() ?>";
        $(document).ready(function() {
            loadMainContent('crud');
        });

        function loadInputForm(url) {
            $.post(site_url + url, {}, function(result) {
                $('#input-form').html(result);
                $('#input-form').show();
                $('#list-data').hide();

            }, "html");
        }

        function loadListData(url) {
            $.post(site_url + url, {}, function(result) {
                $('#list-data').html(result);
                $('#list-data').show();
                $('#input-form').hide();

            }, "html");
        }

        function backToList() {
            $('#input-form').hide();
            $('#list-data').show();
        }
    </script>
</body>

</html>