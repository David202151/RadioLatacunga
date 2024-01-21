<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Nombre'), 'has-success': fields.Nombre && fields.Nombre.valid }">
    <label for="Nombre" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.mantenimiento.columns.Nombre') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Nombre" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Nombre'), 'form-control-success': fields.Nombre && fields.Nombre.valid}" id="Nombre" name="Nombre" placeholder="{{ trans('admin.mantenimiento.columns.Nombre') }}">
        <div v-if="errors.has('Nombre')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Nombre') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Actividad'), 'has-success': fields.Actividad && fields.Actividad.valid }">
    <label for="Actividad" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.mantenimiento.columns.Actividad') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Actividad" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Actividad'), 'form-control-success': fields.Actividad && fields.Actividad.valid}" id="Actividad" name="Actividad" placeholder="{{ trans('admin.mantenimiento.columns.Actividad') }}">
        <div v-if="errors.has('Actividad')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Actividad') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Partes'), 'has-success': fields.Partes && fields.Partes.valid }">
    <label for="Partes" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.mantenimiento.columns.Partes') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.Partes" v-validate="'required'" id="Partes" name="Partes"></textarea>
        </div>
        <div v-if="errors.has('Partes')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Partes') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Frecuencia'), 'has-success': fields.Frecuencia && fields.Frecuencia.valid }">
    <label for="Frecuencia" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.mantenimiento.columns.Frecuencia') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Frecuencia" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Frecuencia'), 'form-control-success': fields.Frecuencia && fields.Frecuencia.valid}" id="Frecuencia" name="Frecuencia" placeholder="{{ trans('admin.mantenimiento.columns.Frecuencia') }}">
        <div v-if="errors.has('Frecuencia')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Frecuencia') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Prioridad'), 'has-success': fields.Prioridad && fields.Prioridad.valid }">
    <label for="Prioridad" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.mantenimiento.columns.Prioridad') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Prioridad" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Prioridad'), 'form-control-success': fields.Prioridad && fields.Prioridad.valid}" id="Prioridad" name="Prioridad" placeholder="{{ trans('admin.mantenimiento.columns.Prioridad') }}">
        <div v-if="errors.has('Prioridad')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Prioridad') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Responsable'), 'has-success': fields.Responsable && fields.Responsable.valid }">
    <label for="Responsable" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.mantenimiento.columns.Responsable') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Responsable" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Responsable'), 'form-control-success': fields.Responsable && fields.Responsable.valid}" id="Responsable" name="Responsable" placeholder="{{ trans('admin.mantenimiento.columns.Responsable') }}">
        <div v-if="errors.has('Responsable')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Responsable') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Procedimiento'), 'has-success': fields.Procedimiento && fields.Procedimiento.valid }">
    <label for="Procedimiento" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.mantenimiento.columns.Procedimiento') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Procedimiento" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Procedimiento'), 'form-control-success': fields.Procedimiento && fields.Procedimiento.valid}" id="Procedimiento" name="Procedimiento" placeholder="{{ trans('admin.mantenimiento.columns.Procedimiento') }}">
        <div v-if="errors.has('Procedimiento')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Procedimiento') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('DiasParo'), 'has-success': fields.DiasParo && fields.DiasParo.valid }">
    <label for="DiasParo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.mantenimiento.columns.DiasParo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.DiasParo" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('DiasParo'), 'form-control-success': fields.DiasParo && fields.DiasParo.valid}" id="DiasParo" name="DiasParo" placeholder="{{ trans('admin.mantenimiento.columns.DiasParo') }}">
        <div v-if="errors.has('DiasParo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('DiasParo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Equipo_id'), 'has-success': fields.Equipo_id && fields.Equipo_id.valid }">
    <label for="Equipo_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.mantenimiento.columns.Equipo_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Equipo_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Equipo_id'), 'form-control-success': fields.Equipo_id && fields.Equipo_id.valid}" id="Equipo_id" name="Equipo_id" placeholder="{{ trans('admin.mantenimiento.columns.Equipo_id') }}">
        <div v-if="errors.has('Equipo_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Equipo_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Descripcion'), 'has-success': fields.Descripcion && fields.Descripcion.valid }">
    <label for="Descripcion" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.mantenimiento.columns.Descripcion') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Descripcion" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Descripcion'), 'form-control-success': fields.Descripcion && fields.Descripcion.valid}" id="Descripcion" name="Descripcion" placeholder="{{ trans('admin.mantenimiento.columns.Descripcion') }}">
        <div v-if="errors.has('Descripcion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Descripcion') }}</div>
    </div>
</div>


