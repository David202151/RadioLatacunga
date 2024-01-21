@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.componente.actions.edit', ['name' => $componente->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <componente-form
                :action="'{{ $componente->resource_url }}'"
                :data="{{ $componente->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.componente.actions.edit', ['name' => $componente->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.componente.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </componente-form>

        </div>
    
</div>

@endsection