<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    {{-- Logo / Marca --}}
    <div class="sidebar-brand">
        <a href="{{ route('admin.dash') }}" class="brand-link">

            {{-- Caso queira usar logo depois, pode ativar este bloco --}}
            {{--
            <img
                src="{{ asset('dash/assets/img/AdminLTELogo.png') }}"
            alt="DaVilla Logo"
            class="brand-image opacity-75 shadow">
            --}}

            <span class="brand-text fw-light">CD Admin</span>
    </div>
    {{-- Menu lateral --}}
    <div class="sidebar-wrapper">
        <nav class="mt-2">

            <ul
                class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                role="navigation"
                aria-label="Menu principal"
                data-accordion="false"
                id="navigation">

                <li class="nav-item">
                    <a href="{{ route('admin.dash') }}" class="nav-link active">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>Dashboard</p>
                    </a>

                {{-- Site --}}
                <li class="nav-header">SITE</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-window"></i>
                        <p>
                            Conteúdo do Site
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>Banners</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Mensagens de contato</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Sistema --}}
                <li class="nav-header">SISTEMA</li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-gear"></i>
                        <p>
                            Sistema
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">

                                <i class="nav-icon bi bi-circle"></i>

                                <p>Usuários</p>
                            </a>
                        </li>
                    </ul>
                </li>

             
            </ul>

        </nav>
    </div>
</aside>