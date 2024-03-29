<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/equipos') }}"><i class="nav-icon icon-book-open"></i> {{ trans('admin.equipo.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/componentes') }}"><i class="nav-icon icon-diamond"></i> {{ trans('admin.componente.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/mantenimientos') }}"><i class="nav-icon icon-diamond"></i> {{ trans('admin.mantenimiento.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/solicitudes-mantenimientos') }}"><i class="nav-icon icon-ghost"></i> {{ trans('admin.solicitudes-mantenimiento.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/users') }}"><i class="nav-icon icon-magnet"></i> {{ trans('admin.user.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
