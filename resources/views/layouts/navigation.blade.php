<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <a href="{{ route('profile.show') }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        {{ __('Dashboard') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('tipopagamentos.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-money-check-alt"></i>
                    <p>
                        {{ ('Tipo Pagamento') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('estados.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-suitcase"></i>
                    <p>
                        {{ ('Estado') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('pacientes.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        {{ ('Paciente') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-users-cog nav-icon"></i>
                    <p>
                        Configurações
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Usuários</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->