<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Nombre'), 'has-success': fields.Nombre && fields.Nombre.valid }">
    <label for="Nombre" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.componente.columns.Nombre') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Nombre" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Nombre'), 'form-control-success': fields.Nombre && fields.Nombre.valid}" id="Nombre" name="Nombre" placeholder="{{ trans('admin.componente.columns.Nombre') }}">
        <div v-if="errors.has('Nombre')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Nombre') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Marca'), 'has-success': fields.Marca && fields.Marca.valid }">
    <label for="Marca" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.componente.columns.Marca') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Marca" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Marca'), 'form-control-success': fields.Marca && fields.Marca.valid}" id="Marca" name="Marca" placeholder="{{ trans('admin.componente.columns.Marca') }}">
        <div v-if="errors.has('Marca')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Marca') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Area'), 'has-success': fields.Area && fields.Area.valid }">
    <label for="Area" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.componente.columns.Area') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Area" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Area'), 'form-control-success': fields.Area && fields.Area.valid}" id="Area" name="Area" placeholder="{{ trans('admin.componente.columns.Area') }}">
        <div v-if="errors.has('Area')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Area') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('NumeroSerie'), 'has-success': fields.NumeroSerie && fields.NumeroSerie.valid }">
    <label for="NumeroSerie" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.componente.columns.NumeroSerie') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.NumeroSerie" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('NumeroSerie'), 'form-control-success': fields.NumeroSerie && fields.NumeroSerie.valid}" id="NumeroSerie" name="NumeroSerie" placeholder="{{ trans('admin.componente.columns.NumeroSerie') }}">
        <div v-if="errors.has('NumeroSerie')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('NumeroSerie') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('FechaAdquirido'), 'has-success': fields.FechaAdquirido && fields.FechaAdquirido.valid }">
    <label for="FechaAdquirido" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.componente.columns.FechaAdquirido') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.FechaAdquirido" :config="datePickerConfig" v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('FechaAdquirido'), 'form-control-success': fields.FechaAdquirido && fields.FechaAdquirido.valid}" id="FechaAdquirido" name="FechaAdquirido" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('FechaAdquirido')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('FechaAdquirido') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('AñoComponente'), 'has-success': fields.AñoComponente && fields.AñoComponente.valid }">
    <label for="AñoComponente" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.componente.columns.AñoComponente') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.AñoComponente" :config="datePickerConfig" v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('AñoComponente'), 'form-control-success': fields.AñoComponente && fields.AñoComponente.valid}" id="AñoComponente" name="AñoComponente" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('AñoComponente')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('AñoComponente') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Prioridad'), 'has-success': fields.Prioridad && fields.Prioridad.valid }">
    <label for="Prioridad" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.componente.columns.Prioridad') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Prioridad" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Prioridad'), 'form-control-success': fields.Prioridad && fields.Prioridad.valid}" id="Prioridad" name="Prioridad" placeholder="{{ trans('admin.componente.columns.Prioridad') }}">
        <div v-if="errors.has('Prioridad')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Prioridad') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Estado'), 'has-success': fields.Estado && fields.Estado.valid }">
    <label for="Estado" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.componente.columns.Estado') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Estado" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Estado'), 'form-control-success': fields.Estado && fields.Estado.valid}" id="Estado" name="Estado" placeholder="{{ trans('admin.componente.columns.Estado') }}">
        <div v-if="errors.has('Estado')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Estado') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Equipo_id'), 'has-success': fields.Equipo_id && fields.Equipo_id.valid }">
    <label for="Equipo_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.componente.columns.Equipo_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Equipo_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Equipo_id'), 'form-control-success': fields.Equipo_id && fields.Equipo_id.valid}" id="Equipo_id" name="Equipo_id" placeholder="{{ trans('admin.componente.columns.Equipo_id') }}">
        <div v-if="errors.has('Equipo_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Equipo_id') }}</div>
    </div>
</div>


