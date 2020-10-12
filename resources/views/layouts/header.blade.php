<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        
    <!-- Navbar-Header-->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/home" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('funcionarios') }}" class="nav-link">Servidores</a>
        </li>

        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        
        <!-- Encerrar sessão -->
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    {{ __('Sair') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <!-- /Encerrar sessão -->
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/home" class="brand-link">
        <img src=" {{ asset('Temp/dist/img/ifaclogo.png')}}" alt="SINAE - IFAC Logo" class="brand-image"
            style="opacity: .8">
        <span class="brand-text font-weight">&emsp; S I N A E</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
        
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/agenda" class="nav-link">
                    <i class="nav-icon far fa-calendar-alt"></i>
                    <p>
                        Agendamentos
                    </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="/atendimento" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Atendimentos
                    </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="/discentes" class="nav-link">
                    <i class="nav-icon far fa-user"></i>
                    <p>Discentes</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                <a href="/cursos" class="nav-link">
                    <i class="nav-icon far fa-flag"></i>
                    <p>Cursos</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        