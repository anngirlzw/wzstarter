<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Wen Zhang | Interactive Developer</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- icons -->
         <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- end icons -->

        <link rel="stylesheet" href="<?= base_url(); ?>css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

        <script src="<?= base_url(); ?>js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="<?= base_url(); ?>js/master.js"></script>
        <script type="text/javascript">
            var base_url    = "<?= base_url(); ?>";
            var root_dir    = "<?= $this->config->item('root_directory'); ?>";
            var debug       = "<?= $this->config->item('debug'); ?>";
        </script>
        <!--[if (lt IE 9)]><!--><script src="<?= base_url(); ?>js/vendor/respond.min.js"></script><!--<![endif]-->
    </head>
        <!--[if IE 8 ]><body class="ie8"><![endif]-->
        <!--[if (gt IE 9)|!(IE)]><!--><body><!--<![endif]-->

        <div class="site-wrapper">
            <div id="header-container">
                <div id="header-inner">
                    <div id="logo" class="logo"><a href="<?= base_url(); ?>"></a></div>
                    <div id="main-navigation" class="navigation-wrapper">
<!--                         <ul><li><a data-navigate-to="work" href="<?= base_url(); ?>work">WORK</a></li><li><a data-navigate-to="about" href="<?= base_url(); ?>home">ABOUT</a></li><li><a data-navigate-to="people" href="<?= base_url(); ?>home">PEOPLE</a></li></ul> -->
                        <ul>
                            <li><a href="about-secion">ME</a></li>
                            <li><a href="work-section">WORK</a></li>
                            <li><a href="contact-section">SAY HELLO</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="page-container">
                <div id="page-content">
                    <?php $this->load->view( "pages/".$page_id."_view" ); ?>
                </div>
            </div>

            <div id="footer-container">
<!--                 <div id="footer-navigation" class="navigation-wrapper">
                    <ul><li><a data-navigate-to="home" href="<?= base_url(); ?>home">HOME</a></li><li><a data-navigate-to="work" href="<?= base_url(); ?>work">WORK</a></li><li><a data-navigate-to="about" href="<?= base_url(); ?>home">ABOUT</a></li><li><a data-navigate-to="people" href="<?= base_url(); ?>home">PEOPLE</a></li><li><a data-navigate-to="project" href="<?= base_url(); ?>home">PROJECT</a></li></ul>
                </div> -->
            </div>
        </div>

        <script data-main="<?= base_url();?>js/main" src="<?= base_url();?>js/vendor/require.min.js"></script>
        <script>
            // (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            // function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            // e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            // e.src='//www.google-analytics.com/analytics.js';
            // r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            // ga('create',"<?= $this->config->item('ga_account');?>");ga('send','pageview');
        </script>
    </body>
</html>
