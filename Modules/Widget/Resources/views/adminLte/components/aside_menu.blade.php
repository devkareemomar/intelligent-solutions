@can('view-widgets')
    <li class="nav-item">
        <a href="{{ fr_route('widgets.index') }}" class="nav-link m-2{{ areActiveRoutes(['widgets.index']) }}">
                {{ __('widget::view.widgets') }}
        </a>
    </li>
@endcan
