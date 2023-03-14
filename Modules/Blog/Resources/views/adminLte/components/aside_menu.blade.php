@can('manage-blog')

    <li
        class="nav-item   {{ areActiveRoutes(['posts.index', 'posts.create', 'categories.index', 'tags.index', 'comments.index'],'menu-is-opening menu-open active') }}">
        <a href="#"
            class="nav-link m-2  {{ areActiveRoutes(['posts.index', 'posts.create', 'categories.index', 'tags.index', 'comments.index'],'menu-is-opening menu-open active') }}   ">

                {{ __('blog::view.blog') }}
                <i class="right fas fa-angle-left"></i>

        </a>

        <ul class="nav nav-treeview">
            <!-- create posts -->
            @can('view-posts')
                <li class="nav-item">
                    <a href="{{ fr_route('posts.index') }}" class="nav-link m-2 {{ areActiveRoutes(['posts.index']) }}">
                        {{ __('blog::view.posts') }}
                    </a>
                </li>
            @endcan

            <!-- create post -->
            @can('create-posts')
                <li class="nav-item">
                    <a href="{{ fr_route('posts.create') }}" class="nav-link m-2 {{ areActiveRoutes(['posts.create']) }}">
                        {{ __('blog::view.create_new_post') }}
                    </a>
                </li>
            @endcan

            <!-- categories -->
            @can('view-categories')
                <li class="nav-item">
                    <a href="{{ fr_route('categories.index') }}"
                        class="nav-link m-2 {{ areActiveRoutes(['categories.index']) }}">
                        {{ __('blog::view.categories') }}
                    </a>
                </li>
            @endcan

            <!-- tags -->
            @can('view-tags')
                <li class="nav-item">
                    <a href="{{ fr_route('tags.index') }}" class="nav-link m-2 {{ areActiveRoutes(['tags.index']) }}">
                        {{ __('blog::view.tags') }}
                    </a>
                </li>
            @endcan

            <!-- comments -->
            @can('view-comments')
                <li class="nav-item">
                    <a href="{{ fr_route('comments.index') }}" class="nav-link m-2 {{ areActiveRoutes(['comments.index']) }}">
                        {{ __('blog::view.comments') }}
                    </a>
                </li>
            @endcan
        </ul>
    </li>
@endcan
