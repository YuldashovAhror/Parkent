<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="/dashboard" class="logo logo-dark">
            <span class="logo-sm">
                <img src="@include('components.dashboard.logo')" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="@include('components.dashboard.logo')" alt="" height="20">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled mt-4" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{route('dashboard.header.index')}}">
                        <i class="uil-star"></i>
                        <span>Заголовок</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-star"></i>
                        <span>Новости</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="{{route('dashboard.news.index')}}">Лист</a></li>
                        <li><a href="{{route('dashboard.news.create')}}">Создать</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-star"></i>
                        <span>Второй слайдер</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="{{route('dashboard.secondbanner.index')}}">Лист</a></li>
                        <li><a href="{{route('dashboard.secondbanner.create')}}">Создать</a></li>
                        
                    </ul>
                    
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-star"></i>
                        <span>О данных</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="{{route('dashboard.secondabout.index')}}">Лист</a></li>
                        <li><a href="{{route('dashboard.secondabout.create')}}">Создать</a></li>
                        
                    </ul>
                    
                </li>
                <li>
                    <a href="{{route('dashboard.about.index')}}">
                        <i class="uil-star"></i>
                        <span>О компании</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-star"></i>
                        <span>Баннеры</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="{{route('dashboard.banner.index')}}">Лист</a></li>
                        <li><a href="{{route('dashboard.banner.create')}}">Создать</a></li>
                        
                    </ul>
                    
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-star"></i>
                        <span>Проекты</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="{{route('dashboard.project.index')}}">Лист</a></li>
                        <li><a href="{{route('dashboard.project.create')}}">Создать</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-star"></i>
                        <span>Здание</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="{{route('dashboard.building.index')}}">Лист</a></li>
                        <li><a href="{{route('dashboard.building.create')}}">Создать</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-star"></i>
                        <span>Апартаменты</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="{{route('dashboard.apartment.index')}}">Лист</a></li>
                        <li><a href="{{route('dashboard.apartment.create')}}">Создать</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-star"></i>
                        <span>Строить планы</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="{{route('dashboard.plan.index')}}">Лист</a></li>
                        <li><a href="{{route('dashboard.plan.create')}}">Создать</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-star"></i>
                        <span>Комната</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="{{route('dashboard.room.index')}}">Лист</a></li>
                        <li><a href="{{route('dashboard.room.create')}}">Создать</a></li>
                        
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>