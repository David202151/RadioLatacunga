<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Nombre'), 'has-success': fields.Nombre && fields.Nombre.valid }">
    <label for="Nombre" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.equipo.columns.Nombre') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Nombre" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Nombre'), 'form-control-success': fields.Nombre && fields.Nombre.valid}" id="Nombre" name="Nombre" placeholder="{{ trans('admin.equipo.columns.Nombre') }}">
        <div v-if="errors.has('Nombre')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Nombre') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Procesador'), 'has-success': fields.Procesador && fields.Procesador.valid }">
    <label for="Procesador" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.equipo.columns.Procesador') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Procesador" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Procesador'), 'form-control-success': fields.Procesador && fields.Procesador.valid}" id="Procesador" name="Procesador" placeholder="{{ trans('admin.equipo.columns.Procesador') }}">
        <div v-if="errors.has('Procesador')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Procesador') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Marca'), 'has-success': fields.Marca && fields.Marca.valid }">
    <label for="Marca" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.equipo.columns.Marca') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Marca" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Marca'), 'form-control-success': fields.Marca && fields.Marca.valid}" id="Marca" name="Marca" placeholder="{{ trans('admin.equipo.columns.Marca') }}">
        <div v-if="errors.has('Marca')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Marca') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('TargetaGrafica'), 'has-success': fields.TargetaGrafica && fields.TargetaGrafica.valid }">
    <label for="TargetaGrafica" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.equipo.columns.TargetaGrafica') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.TargetaGrafica" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('TargetaGrafica'), 'form-control-success': fields.TargetaGrafica && fields.TargetaGrafica.valid}" id="TargetaGrafica" name="TargetaGrafica" placeholder="{{ trans('admin.equipo.columns.TargetaGrafica') }}">
        <div v-if="errors.has('TargetaGrafica')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('TargetaGrafica') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Modelo'), 'has-success': fields.Modelo && fields.Modelo.valid }">
    <label for="Modelo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.equipo.columns.Modelo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Modelo" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Modelo'), 'form-control-success': fields.Modelo && fields.Modelo.valid}" id="Modelo" name="Modelo" placeholder="{{ trans('admin.equipo.columns.Modelo') }}">
        <div v-if="errors.has('Modelo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Modelo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Antivirus'), 'has-success': fields.Antivirus && fields.Antivirus.valid }">
    <label for="Antivirus" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.equipo.columns.Antivirus') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Antivirus" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Antivirus'), 'form-control-success': fields.Antivirus && fields.Antivirus.valid}" id="Antivirus" name="Antivirus" placeholder="{{ trans('admin.equipo.columns.Antivirus') }}">
        <div v-if="errors.has('Antivirus')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Antivirus') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('SO'), 'has-success': fields.SO && fields.SO.valid }">
    <label for="SO" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.equipo.columns.SO') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.SO" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('SO'), 'form-control-success': fields.SO && fields.SO.valid}" id="SO" name="SO" placeholder="{{ trans('admin.equipo.columns.SO') }}">
        <div v-if="errors.has('SO')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('SO') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('EspacioDisco'), 'has-success': fields.EspacioDisco && fields.EspacioDisco.valid }">
    <label for="EspacioDisco" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.equipo.columns.EspacioDisco') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.EspacioDisco" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('EspacioDisco'), 'form-control-success': fields.EspacioDisco && fields.EspacioDisco.valid}" id="EspacioDisco" name="EspacioDisco" placeholder="{{ trans('admin.equipo.columns.EspacioDisco') }}">
        <div v-if="errors.has('EspacioDisco')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('EspacioDisco') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('MemoriaRAM'), 'has-success': fields.MemoriaRAM && fields.MemoriaRAM.valid }">
    <label for="MemoriaRAM" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.equipo.columns.MemoriaRAM') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.MemoriaRAM" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('MemoriaRAM'), 'form-control-success': fields.MemoriaRAM && fields.MemoriaRAM.valid}" id="MemoriaRAM" name="MemoriaRAM" placeholder="{{ trans('admin.equipo.columns.MemoriaRAM') }}">
        <div v-if="errors.has('MemoriaRAM')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('MemoriaRAM') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Area'), 'has-success': fields.Area && fields.Area.valid }">
    <label for="Area" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.equipo.columns.Area') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Area" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Area'), 'form-control-success': fields.Area && fields.Area.valid}" id="Area" name="Area" placeholder="{{ trans('admin.equipo.columns.Area') }}">
        <div v-if="errors.has('Area')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Area') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('Estado'), 'has-success': fields.Estado && fields.Estado.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="Estado" type="checkbox" v-model="form.Estado" v-validate="''" data-vv-name="Estado"  name="Estado_fake_element">
        <label class="form-check-label" for="Estado">
            {{ trans('admin.equipo.columns.Estado') }}
        </label>
        <input type="hidden" name="Estado" :value="form.Estado">
        <div v-if="errors.has('Estado')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Estado') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('FechaAdquirido'), 'has-success': fields.FechaAdquirido && fields.FechaAdquirido.valid }">
    <label for="FechaAdquirido" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.equipo.columns.FechaAdquirido') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.FechaAdquirido" :config="datePickerConfig" v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('FechaAdquirido'), 'form-control-success': fields.FechaAdquirido && fields.FechaAdquirido.valid}" id="FechaAdquirido" name="FechaAdquirido" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('FechaAdquirido')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('FechaAdquirido') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('AñoEquipo'), 'has-success': fields.AñoEquipo && fields.AñoEquipo.valid }">
    <label for="AñoEquipo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.equipo.columns.AñoEquipo') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.AñoEquipo" :config="datePickerConfig" v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('AñoEquipo'), 'form-control-success': fields.AñoEquipo && fields.AñoEquipo.valid}" id="AñoEquipo" name="AñoEquipo" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('AñoEquipo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('AñoEquipo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Prioridad'), 'has-success': fields.Prioridad && fields.Prioridad.valid }">
    <label for="Prioridad" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.equipo.columns.Prioridad') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Prioridad" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Prioridad'), 'form-control-success': fields.Prioridad && fields.Prioridad.valid}" id="Prioridad" name="Prioridad" placeholder="{{ trans('admin.equipo.columns.Prioridad') }}">
        <div v-if="errors.has('Prioridad')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Prioridad') }}</div>
    </div>
</div>


