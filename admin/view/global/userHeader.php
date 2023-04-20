<?php
     session_start();
    
    if(!isset($_SESSION['cargo']) == 1){
    header('location: ../../login.php');
  }
?>

<div class="main-header">
    <!-- Logo Header -->
    <div class="logo-header" style="background-color:rgb(42,42,42);">
        
        <a href="http://localhost/FRANK/admin/view/admin/admin.php" class="logo">
            <img src="http://localhost/FRANK/public/img/favicon2.png" alt="navbar brand" class="navbar-brand" width="45" height="45">
        </a>
        
    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" style="background-color:rgb(42,42,42);">
        
        <div class="container-fluid">
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                <li class="nav-item toggle-nav-search hidden-caret">
                    <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                        <i class="fa fa-search"></i>
                    </a>
                </li>
                
                <li class="nav-item dropdown hidden-caret">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                        <div class="avatar-sm">
                            <img src="http://localhost/FRANK/admin/assets/img/avatar.png" alt="..." class="avatar-img rounded-circle">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <div class="user-box">
                                
                                    <div class="avatar-lg"><img src="http://localhost/FRANK/admin/assets/img/avatar.png" alt="image profile" class="avatar-img rounded"></div>
                                    <div class="u-text">
                                        <h4><?php echo ucfirst($_SESSION['nombre']); ?></h4>
                                        <p class="text-muted">Cliente</p><a href="http://localhost/FRANK/admin/cerrarSesion.php" class="btn btn-xs" style="background-color: rgb(227, 6, 19); color: white">Cerrar Sesión</a>
                                    </div>
                                </div>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>

<!-- Sidebar -->
<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="http://localhost/FRANK/admin/assets/img/avatar.png" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" aria-expanded="true">
                        <span>
                            <?php echo ucfirst($_SESSION['nombre']); ?>
                            <span class="user-level">Cliente</span>
                        </span>
                    </a>
                    <!-- Raya prrona que marca separación -->
                    <div class="clearfix"></div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li id="home" class="nav-item">
                    <a href="http://localhost/FRANK/admin/view/user/user.php">
                        <i class="fas fa-home" style="color:rgb(227, 6, 19);"></i>
                        <p style="color:rgb(42,42,42);"><b>Perfil</b></p>
                    </a>
                    
                <li class="nav-item">
                    <a data-toggle="collapse" href="#base">
                        <i class="fas fa-layer-group" style="color:rgb(227, 6, 19);"></i>
                        <p style="color:rgb(42,42,42);"><b>Citas</b></p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            
                            <li>
                                <a href="../user_app/mostrar.php">
                                    <span class="sub-item" style="color:rgb(42,42,42);">Mostrar</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->