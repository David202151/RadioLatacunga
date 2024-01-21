import AppForm from '../app-components/Form/AppForm';

Vue.component('componente-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                Nombre:  '' ,
                Marca:  '' ,
                Area:  '' ,
                NumeroSerie:  '' ,
                FechaAdquirido:  '' ,
                AñoComponente:  '' ,
                Prioridad:  '' ,
                Estado:  '' ,
                Equipo_id:  '' ,
                
            }
        }
    }

});