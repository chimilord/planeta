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
        <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/bootstrap-switch.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/docs.css">
        <link rel="stylesheet/less" type="text/css" href="<?php echo base_url(); ?>resources/less/loader.less">

        <script src="<?php echo base_url(); ?>resources/js/vendor/less-1.3.3.min.js"></script>
        <script src="<?php echo base_url(); ?>resources/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <div class="navbar navbar-inverse navbar-fixed-top">
            <?php echo base_url(); ?>
            <div class="navbar-inner">
                <div class="container-fluid">
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
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-white icon-cog"></i>
                                        <span><?php echo $this->ion_auth->user()->row()->first_name; ?></span> <b class="caret"></b></a>
                                    <ul class="dropdown-menu">    
                                        <li><a href="#"><i class="icon icon-user"></i> <span>Perfil</span></a></li>
                                        <li class="divider"></li>
                                        <?php if ($this->ion_auth->is_admin()) { ?>
                                            <li><a href="<?php echo base_url(); ?>index.php/auth/groups"><i class="icon icon-th-large"></i> <span>Groups</span></a></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/auth/groups"><i class="icon icon-user"></i> <span>Users</span></a></li>
                                            <li class="divider"></li>
                                            <!--<li><a href="#">Settings</a></li>-->
                                            <li><a href="#"><i class="icon icon-envelope"></i> <span>Support</span></a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/auth/logout"><i class="icon icon-off"></i> <span>Salir</span></a></li>
                                        <?php } else { ?>
                                            <li><a href="#">Settings</a></li>
                                            <li><a href="#">Support</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/auth/logout"><i class="icon icon-off"></i> <span>Salir</span></a></li>
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

        <div class="container-fluid">

            <?php if ($this->ion_auth->logged_in()) { ?>
                <div class="row-fluid sections">

                    <div class="span2">
                        <div class="sidebar-nav">
                            <ul class="nav">
                                <li class="active"><a href="<?php echo base_url("index.php/auth/"); ?>"><i class="icon-white icon-home"></i> <span>Dashboard</span></a></li>
                                <li><a href="<?php echo base_url("index.php/auth/users"); ?>"><i class="icon-white icon-user"></i> <span>Usuarios</span></a></li>
                                <li><a href="index.html"><i class="icon-white icon-file"></i> <span>Sitios</span></a></li>
                                <li><a href="<?php echo base_url("index.php/sitios/recursos") ?>"><i class="icon-white icon-list-alt"></i> <span>Recursos</span></a></li>
                                <li><a href="<?php echo base_url("index.php/auth/contact"); ?>"><i class="icon-white icon-envelope"></i> <span>Contacto</span></a></li>
                                <li><a href="index.html"><i class="icon-white icon-wrench"></i> <span>Mantenimiento</span></a></li>
                            </ul>
                        </div>
                    </div>
                <?php } ?>