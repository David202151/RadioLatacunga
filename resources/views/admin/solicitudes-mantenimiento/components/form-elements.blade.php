<div class="form-group row align-items-center" :class="{'has-danger': errors.has('FechaMantenimineto'), 'has-success': fields.FechaMantenimineto && fields.FechaMantenimineto.valid }">
    <label for="FechaMantenimineto" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.solicitudes-mantenimiento.columns.FechaMantenimineto') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.FechaMantenimineto" :config="datePickerConfig" v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('FechaMantenimineto'), 'form-control-success': fields.FechaMantenimineto && fields.FechaMantenimineto.valid}" id="FechaMantenimineto" name="FechaMantenimineto" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('FechaMantenimineto')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('FechaMantenimineto') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('HoraMantenimineto'), 'has-success': fields.HoraMantenimineto && fields.HoraMantenimineto.valid }">
    <label for="HoraMantenimineto" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.solicitudes-mantenimiento.columns.HoraMantenimineto') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
            <datetime v-model="form.HoraMantenimineto" :config="timePickerConfig" v-validate="'required|date_format:HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('HoraMantenimineto'), 'form-control-success': fields.HoraMantenimineto && fields.HoraMantenimineto.valid}" id="HoraMantenimineto" name="HoraMantenimineto" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_time') }}"></datetime>
        </div>
        <div v-if="errors.has('HoraMantenimineto')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('HoraMantenimineto') }}</div>
    </div>
</div>


<div class="form-group row align-items-center" :class="{'has-danger': errors.has('AreaMantenimineto'), 'has-success': fields.AreaMantenimineto && fields.AreaMantenimineto.valid }">
    <label for="AreaMantenimineto" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.solicitudes-mantenimiento.columns.AreaMantenimineto') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.AreaMantenimineto" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('AreaMantenimineto'), 'form-control-success': fields.AreaMantenimineto && fields.AreaMantenimineto.valid}" id="AreaMantenimineto" name="AreaMantenimineto" placeholder="{{ trans('admin.solicitudes-mantenimiento.columns.AreaMantenimineto') }}">
        <div v-if="errors.has('AreaMantenimineto')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('AreaMantenimineto') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('MotivoMantenimineto'), 'has-success': fields.MotivoMantenimineto && fields.MotivoMantenimineto.valid }">
    <label for="MotivoMantenimineto" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.solicitudes-mantenimiento.columns.MotivoMantenimineto') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.MotivoMantenimineto" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('MotivoMantenimineto'), 'form-control-success': fields.MotivoMantenimineto && fields.MotivoMantenimineto.valid}" id="MotivoMantenimineto" name="MotivoMantenimineto" placeholder="{{ trans('admin.solicitudes-mantenimiento.columns.MotivoMantenimineto') }}">
        <div v-if="errors.has('MotivoMantenimineto')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('MotivoMantenimineto') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ObservacionesMantenimineto'), 'has-success': fields.ObservacionesMantenimineto && fields.ObservacionesMantenimineto.valid }">
    <label for="ObservacionesMantenimineto" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.solicitudes-mantenimiento.columns.ObservacionesMantenimineto') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ObservacionesMantenimineto" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ObservacionesMantenimineto'), 'form-control-success': fields.ObservacionesMantenimineto && fields.ObservacionesMantenimineto.valid}" id="ObservacionesMantenimineto" name="ObservacionesMantenimineto" placeholder="{{ trans('admin.solicitudes-mantenimiento.columns.ObservacionesMantenimineto') }}">
        <div v-if="errors.has('ObservacionesMantenimineto')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ObservacionesMantenimineto') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('TiempoDuracion'), 'has-success': fields.TiempoDuracion && fields.TiempoDuracion.valid }">
    <label for="TiempoDuracion" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.solicitudes-mantenimiento.columns.TiempoDuracion') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.TiempoDuracion" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('TiempoDuracion'), 'form-control-success': fields.TiempoDuracion && fields.TiempoDuracion.valid}" id="TiempoDuracion" name="TiempoDuracion" placeholder="{{ trans('admin.solicitudes-mantenimiento.columns.TiempoDuracion') }}">
        <div v-if="errors.has('TiempoDuracion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('TiempoDuracion') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('HoraSalida'), 'has-success': fields.HoraSalida && fields.HoraSalida.valid }">
    <label for="HoraSalida" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.solicitudes-mantenimiento.columns.HoraSalida') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
            <datetime v-model="form.HoraSalida" :config="timePickerConfig" v-validate="'required|date_format:HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('HoraSalida'), 'form-control-success': fields.HoraSalida && fields.HoraSalida.valid}" id="HoraSalida" name="HoraSalida" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_time') }}"></datetime>
        </div>
        <div v-if="errors.has('HoraSalida')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('HoraSalida') }}</div>
    </div>
</div>


<div class="form-group row align-items-center" :class="{'has-danger': errors.has('HoraRegreso'), 'has-success': fields.HoraRegreso && fields.HoraRegreso.valid }">
    <label for="HoraRegreso" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.solicitudes-mantenimiento.columns.HoraRegreso') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
            <datetime v-model="form.HoraRegreso" :config="timePickerConfig" v-validate="'required|date_format:HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('HoraRegreso'), 'form-control-success': fields.HoraRegreso && fields.HoraRegreso.valid}" id="HoraRegreso" name="HoraRegreso" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_time') }}"></datetime>
        </div>
        <div v-if="errors.has('HoraRegreso')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('HoraRegreso') }}</div>
    </div>
</div>


<div class="form-group row align-items-center" :class="{'has-danger': errors.has('EstadoSolicitud'), 'has-success': fields.EstadoSolicitud && fields.EstadoSolicitud.valid }">
    <label for="EstadoSolicitud" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.solicitudes-mantenimiento.columns.EstadoSolicitud') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.EstadoSolicitud" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('EstadoSolicitud'), 'form-control-success': fields.EstadoSolicitud && fields.EstadoSolicitud.valid}" id="EstadoSolicitud" name="EstadoSolicitud" placeholder="{{ trans('admin.solicitudes-mantenimiento.columns.EstadoSolicitud') }}">
        <div v-if="errors.has('EstadoSolicitud')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('EstadoSolicitud') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Parte'), 'has-success': fields.Parte && fields.Parte.valid }">
    <label for="Parte" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.solicitudes-mantenimiento.columns.Parte') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.Parte" v-validate="'required'" id="Parte" name="Parte"></textarea>
        </div>
        <div v-if="errors.has('Parte')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Parte') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Equipo_id'), 'has-success': fields.Equipo_id && fields.Equipo_id.valid }">
    <label for="Equipo_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.solicitudes-mantenimiento.columns.Equipo_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Equipo_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Equipo_id'), 'form-control-success': fields.Equipo_id && fields.Equipo_id.valid}" id="Equipo_id" name="Equipo_id" placeholder="{{ trans('admin.solicitudes-mantenimiento.columns.Equipo_id') }}">
        <div v-if="errors.has('Equipo_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Equipo_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Usuario_id'), 'has-success': fields.Usuario_id && fields.Usuario_id.valid }">
    <label for="Usuario_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.solicitudes-mantenimiento.columns.Usuario_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Usuario_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Usuario_id'), 'form-control-success': fields.Usuario_id && fields.Usuario_id.valid}" id="Usuario_id" name="Usuario_id" placeholder="{{ trans('admin.solicitudes-mantenimiento.columns.Usuario_id') }}">
        <div v-if="errors.has('Usuario_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Usuario_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Mantenimiento_id'), 'has-success': fields.Mantenimiento_id && fields.Mantenimiento_id.valid }">
    <label for="Mantenimiento_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.solicitudes-mantenimiento.columns.Mantenimiento_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Mantenimiento_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Mantenimiento_id'), 'form-control-success': fields.Mantenimiento_id && fields.Mantenimiento_id.valid}" id="Mantenimiento_id" name="Mantenimiento_id" placeholder="{{ trans('admin.solicitudes-mantenimiento.columns.Mantenimiento_id') }}">
        <div v-if="errors.has('Mantenimiento_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Mantenimiento_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Componente_id'), 'has-success': fields.Componente_id && fields.Componente_id.valid }">
    <label for="Componente_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.solicitudes-mantenimiento.columns.Componente_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Componente_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Componente_id'), 'form-control-success': fields.Componente_id && fields.Componente_id.valid}" id="Componente_id" name="Componente_id" placeholder="{{ trans('admin.solicitudes-mantenimiento.columns.Componente_id') }}">
        <div v-if="errors.has('Componente_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Componente_id') }}</div>
    </div>
</div>


