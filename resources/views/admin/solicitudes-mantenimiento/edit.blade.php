@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.solicitudes-mantenimiento.actions.edit', ['name' => $solicitudesMantenimiento->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <solicitudes-mantenimiento-form
                :action="'{{ $solicitudesMantenimiento->resource_url }}'"
                :data="{{ $solicitudesMantenimiento->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.solicitudes-mantenimiento.actions.edit', ['name' => $solicitudesMantenimiento->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.solicitudes-mantenimiento.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </solicitudes-mantenimiento-form>

        </div>
    
</div>

@endsection