        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('back/')}}/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="@if(Request::segment(2)== 'panel') active @endif has-sub">
                            <a class="js-arrow" href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-tachometer-alt"></i>Panel</a>
                        </li>
                        <li class="@if(Request::segment(2)== 'tarifler') active @endif">
                            <a href="{{ route('admin.tarifler.index') }}">
                                <i class="fas fa-align-justify"></i>Tüm Tarifler</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
