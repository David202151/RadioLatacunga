import AppForm from '../app-components/Form/AppForm';

Vue.component('solicitudes-mantenimiento-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                FechaMantenimineto:  '' ,
                HoraMantenimineto:  '' ,
                AreaMantenimineto:  '' ,
                MotivoMantenimineto:  '' ,
                ObservacionesMantenimineto:  '' ,
                TiempoDuracion:  '' ,
                HoraSalida:  '' ,
                HoraRegreso:  '' ,
                EstadoSolicitud:  '' ,
                Parte:  '' ,
                Equipo_id:  '' ,
                Usuario_id:  '' ,
                Mantenimiento_id:  '' ,
                Componente_id:  '' ,
                
            }
        }
    }

});