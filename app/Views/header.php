<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>DASHBOARD</title>
        <link href=" <?php echo base_url(); ?>/css/styles.css" rel="stylesheet" />
        <link href=" <?php echo base_url(); ?>/css/cdn.datatables.net_1.10.20_css_dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src=" <?php echo base_url(); ?>/css/cdnjs.cloudflare.com_ajax_libs_font-awesome_5.15.3_js_all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">DASHBOARD</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <!-- <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form> -->
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#!" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                </li>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#!">Settings</a>
                    <a class="dropdown-item" href="#!">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-basket"></i></div>
                                Productos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url(); ?>productos">Productos</a>
                                    <a class="nav-link" href="<?php echo base_url(); ?>unidades">Unidades</a>
                                    <a class="nav-link" href="<?php echo base_url(); ?>categorias">Categorias</a>
                                </nav>
                            </div>

                            <a class="nav-link" href="<?php echo base_url(); ?>clientes" >
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Clientes
                            </a>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#subAdmin" aria-expanded="false" aria-controls="subAdmin">
                                <div class="sb-nav-link-icon"><i class="fas fa-tools"></i></div>
                                Configuracion
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="subAdmin" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url(); ?>configuracion">Configuracion</a>
                                    <a class="nav-link" href="<?php echo base_url(); ?>usuarios">Usuarios</a>
                                    <a class="nav-link" href="<?php echo base_url(); ?>roles">Roles</a>
                                    <a class="nav-link" href="<?php echo base_url(); ?>cajas">Cajas</a>
                                    <a class="nav-link" href="<?php echo base_url(); ?>accesoa">Registros de Acceso</a>
                                    <a class="nav-link" href="<?php echo base_url(); ?>respaldo">Resplado</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>