<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#signet"></use>
        </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        <li class="nav-item"><a class="nav-link" href="/admin/dashboard">
                <svg class="nav-icon">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-speedometer"></use>
                </svg>
                Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
        <li class="nav-title">Components</li>

        @foreach(\App\Models\Menu::all() as $menu)
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-puzzle"></use>
                    </svg>
                    {{__('menu.'.$menu->route)}}
                </a>

                <ul class="nav-group-items">

                    @can($menu->route.'_read')
                        <li class="nav-item"><a class="nav-link" href="/admin/{{$menu->route}}"><span
                                    class="nav-icon"></span> {{__('menu.list')}}</a>
                        </li>
                    @endcan

                    @can($menu->route.'_create')
                        <li class="nav-item"><a class="nav-link" href="/admin/{{$menu->route}}/create"><span
                                    class="nav-icon"></span> {{__('menu.create')}}</a>
                        </li>
                    @endcan
                </ul>
                <hr>
            </li>
        @endforeach

    </ul>

</div>
