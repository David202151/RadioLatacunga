@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.mantenimiento.actions.edit', ['name' => $mantenimiento->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <mantenimiento-form
                :action="'{{ $mantenimiento->resource_url }}'"
                :data="{{ $mantenimiento->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.mantenimiento.actions.edit', ['name' => $mantenimiento->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.mantenimiento.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </mantenimiento-form>

        </div>
    
</div>

@endsection