@can('view-menus')
    <li class="nav-item">
        <a href="{{ fr_route('menus.index') }}" class="nav-link  m-2  {{ areActiveRoutes(['menus.index']) }}">
            {{ __('menu::view.menus') }}
        </a>
    </li>
@endcan
