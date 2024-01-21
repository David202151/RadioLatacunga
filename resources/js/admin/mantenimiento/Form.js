import AppForm from '../app-components/Form/AppForm';

Vue.component('mantenimiento-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                Nombre:  '' ,
                Actividad:  '' ,
                Partes:  '' ,
                Frecuencia:  '' ,
                Prioridad:  '' ,
                Responsable:  '' ,
                Procedimiento:  '' ,
                DiasParo:  '' ,
                Equipo_id:  '' ,
                Descripcion:  '' ,
                
            }
        }
    }

});