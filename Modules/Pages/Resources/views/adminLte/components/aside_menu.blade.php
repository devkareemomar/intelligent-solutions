@can('view-pages')
    <li class="nav-item">
        <a href="{{ fr_route('pages.index') }}" class="nav-link  m-2 {{ areActiveRoutes(['pages.index']) }}">
            {{ __('pages::view.pages') }}
        </a>
    </li>
@endcan
