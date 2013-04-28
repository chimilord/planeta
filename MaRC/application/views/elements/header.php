<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Planeta - MaRC V.Z(ero)</title>
        <link rel="shortcut icon"  href="<?php echo base_url(); ?>resources/favicon.ico">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 65px;
                padding-bottom: 40px;
            }
        </style>
        <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/docs.css">
        <link rel="stylesheet/less" type="text/css" href="<?php echo base_url(); ?>resources/less/main.less">

        <script src="<?php echo base_url(); ?>resources/js/vendor/less-1.3.3.min.js"></script>
        <script src="<?php echo base_url(); ?>resources/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">MaRC</a>
                    <div class="nav-collapse collapse">
                        <ul id="veo-login-item" class="nav pull-right">
                            <?php if ($this->ion_auth->logged_in()) { ?>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <?php echo $this->ion_auth->user()->row()->first_name; ?> <b class="caret"></b></a>
                                    <ul class="dropdown-menu">    
                                        <li><a href="#">Perfil</a></li>
                                        <li class="divider"></li>
                                        <?php if ($this->ion_auth->is_admin()) { ?>
                                            <li><a href="<?php echo base_url(); ?>/auth/groups">Groups</a></li>
                                            <li><a href="<?php echo base_url(); ?>/auth/groups">Users</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Settings</a></li>
                                            <li><a href="#">Support</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>auth/logout">Salir</a></li>
                                        <?php } else { ?>
                                            <li><a href="#">Settings</a></li>
                                            <li><a href="#">Support</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>auth/logout">Salir</a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                            <?php } else { ?>
                                <li class="divider-vertical"></li>
                            <?php } ?>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">