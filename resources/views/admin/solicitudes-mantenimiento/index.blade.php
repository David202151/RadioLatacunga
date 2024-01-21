@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.solicitudes-mantenimiento.actions.index'))

@section('body')

    <solicitudes-mantenimiento-listing
        :data="{{ $data->toJson() }}"
        :url="'{{ url('admin/solicitudes-mantenimientos') }}'"
        inline-template>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> {{ trans('admin.solicitudes-mantenimiento.actions.index') }}
                        <a class="btn btn-primary btn-spinner btn-sm pull-right m-b-0" href="{{ url('admin/solicitudes-mantenimientos/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.solicitudes-mantenimiento.actions.create') }}</a>
                    </div>
                    <div class="card-body" v-cloak>
                        <div class="card-block">
                            <form @submit.prevent="">
                                <div class="row justify-content-md-between">
                                    <div class="col col-lg-7 col-xl-5 form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="{{ trans('brackets/admin-ui::admin.placeholder.search') }}" v-model="search" @keyup.enter="filter('search', $event.target.value)" />
                                            <span class="input-group-append">
                                                <button type="button" class="btn btn-primary" @click="filter('search', search)"><i class="fa fa-search"></i>&nbsp; {{ trans('brackets/admin-ui::admin.btn.search') }}</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto form-group ">
                                        <select class="form-control" v-model="pagination.state.per_page">
                                            
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                </div>
                            </form>

                            <table class="table table-hover table-listing">
                                <thead>
                                    <tr>
                                        <th class="bulk-checkbox">
                                            <input class="form-check-input" id="enabled" type="checkbox" v-model="isClickedAll" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element" @click="onBulkItemsClickedAllWithPagination()">
                                            <label class="form-check-label" for="enabled">
                                                #
                                            </label>
                                        </th>

                                        <th is='sortable' :column="'id'">{{ trans('admin.solicitudes-mantenimiento.columns.id') }}</th>
                                        <th is='sortable' :column="'FechaMantenimineto'">{{ trans('admin.solicitudes-mantenimiento.columns.FechaMantenimineto') }}</th>
                                        <th is='sortable' :column="'HoraMantenimineto'">{{ trans('admin.solicitudes-mantenimiento.columns.HoraMantenimineto') }}</th>
                                        <th is='sortable' :column="'AreaMantenimineto'">{{ trans('admin.solicitudes-mantenimiento.columns.AreaMantenimineto') }}</th>
                                        <th is='sortable' :column="'MotivoMantenimineto'">{{ trans('admin.solicitudes-mantenimiento.columns.MotivoMantenimineto') }}</th>
                                        <th is='sortable' :column="'ObservacionesMantenimineto'">{{ trans('admin.solicitudes-mantenimiento.columns.ObservacionesMantenimineto') }}</th>
                                        <th is='sortable' :column="'TiempoDuracion'">{{ trans('admin.solicitudes-mantenimiento.columns.TiempoDuracion') }}</th>
                                        <th is='sortable' :column="'HoraSalida'">{{ trans('admin.solicitudes-mantenimiento.columns.HoraSalida') }}</th>
                                        <th is='sortable' :column="'HoraRegreso'">{{ trans('admin.solicitudes-mantenimiento.columns.HoraRegreso') }}</th>
                                        <th is='sortable' :column="'EstadoSolicitud'">{{ trans('admin.solicitudes-mantenimiento.columns.EstadoSolicitud') }}</th>
                                        <th is='sortable' :column="'Equipo_id'">{{ trans('admin.solicitudes-mantenimiento.columns.Equipo_id') }}</th>
                                        <th is='sortable' :column="'Usuario_id'">{{ trans('admin.solicitudes-mantenimiento.columns.Usuario_id') }}</th>
                                        <th is='sortable' :column="'Mantenimiento_id'">{{ trans('admin.solicitudes-mantenimiento.columns.Mantenimiento_id') }}</th>
                                        <th is='sortable' :column="'Componente_id'">{{ trans('admin.solicitudes-mantenimiento.columns.Componente_id') }}</th>

                                        <th></th>
                                    </tr>
                                    <tr v-show="(clickedBulkItemsCount > 0) || isClickedAll">
                                        <td class="bg-bulk-info d-table-cell text-center" colspan="16">
                                            <span class="align-middle font-weight-light text-dark">{{ trans('brackets/admin-ui::admin.listing.selected_items') }} @{{ clickedBulkItemsCount }}.  <a href="#" class="text-primary" @click="onBulkItemsClickedAll('/admin/solicitudes-mantenimientos')" v-if="(clickedBulkItemsCount < pagination.state.total)"> <i class="fa" :class="bulkCheckingAllLoader ? 'fa-spinner' : ''"></i> {{ trans('brackets/admin-ui::admin.listing.check_all_items') }} @{{ pagination.state.total }}</a> <span class="text-primary">|</span> <a
                                                        href="#" class="text-primary" @click="onBulkItemsClickedAllUncheck()">{{ trans('brackets/admin-ui::admin.listing.uncheck_all_items') }}</a>  </span>

                                            <span class="pull-right pr-2">
                                                <button class="btn btn-sm btn-danger pr-3 pl-3" @click="bulkDelete('/admin/solicitudes-mantenimientos/bulk-destroy')">{{ trans('brackets/admin-ui::admin.btn.delete') }}</button>
                                            </span>

                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in collection" :key="item.id" :class="bulkItems[item.id] ? 'bg-bulk' : ''">
                                        <td class="bulk-checkbox">
                                            <input class="form-check-input" :id="'enabled' + item.id" type="checkbox" v-model="bulkItems[item.id]" v-validate="''" :data-vv-name="'enabled' + item.id"  :name="'enabled' + item.id + '_fake_element'" @click="onBulkItemClicked(item.id)" :disabled="bulkCheckingAllLoader">
                                            <label class="form-check-label" :for="'enabled' + item.id">
                                            </label>
                                        </td>

                                    <td>@{{ item.id }}</td>
                                        <td>@{{ item.FechaMantenimineto | date }}</td>
                                        <td>@{{ item.HoraMantenimineto | time }}</td>
                                        <td>@{{ item.AreaMantenimineto }}</td>
                                        <td>@{{ item.MotivoMantenimineto }}</td>
                                        <td>@{{ item.ObservacionesMantenimineto }}</td>
                                        <td>@{{ item.TiempoDuracion }}</td>
                                        <td>@{{ item.HoraSalida | time }}</td>
                                        <td>@{{ item.HoraRegreso | time }}</td>
                                        <td>@{{ item.EstadoSolicitud }}</td>
                                        <td>@{{ item.Equipo_id }}</td>
                                        <td>@{{ item.Usuario_id }}</td>
                                        <td>@{{ item.Mantenimiento_id }}</td>
                                        <td>@{{ item.Componente_id }}</td>
                                        
                                        <td>
                                            <div class="row no-gutters">
                                                <div class="col-auto">
                                                    <a class="btn btn-sm btn-spinner btn-info" :href="item.resource_url + '/edit'" title="{{ trans('brackets/admin-ui::admin.btn.edit') }}" role="button"><i class="fa fa-edit"></i></a>
                                                </div>
                                                <form class="col" @submit.prevent="deleteItem(item.resource_url)">
                                                    <button type="submit" class="btn btn-sm btn-danger" title="{{ trans('brackets/admin-ui::admin.btn.delete') }}"><i class="fa fa-trash-o"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="row" v-if="pagination.state.total > 0">
                                <div class="col-sm">
                                    <span class="pagination-caption">{{ trans('brackets/admin-ui::admin.pagination.overview') }}</span>
                                </div>
                                <div class="col-sm-auto">
                                    <pagination></pagination>
                                </div>
                            </div>

                            <div class="no-items-found" v-if="!collection.length > 0">
                                <i class="icon-magnifier"></i>
                                <h3>{{ trans('brackets/admin-ui::admin.index.no_items') }}</h3>
                                <p>{{ trans('brackets/admin-ui::admin.index.try_changing_items') }}</p>
                                <a class="btn btn-primary btn-spinner" href="{{ url('admin/solicitudes-mantenimientos/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.solicitudes-mantenimiento.actions.create') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </solicitudes-mantenimiento-listing>

@endsection