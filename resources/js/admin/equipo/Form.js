import AppForm from '../app-components/Form/AppForm';

Vue.component('equipo-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                Nombre:  '' ,
                Procesador:  '' ,
                Marca:  '' ,
                TargetaGrafica:  '' ,
                Modelo:  '' ,
                Antivirus:  '' ,
                SO:  '' ,
                EspacioDisco:  '' ,
                MemoriaRAM:  '' ,
                Area:  '' ,
                Estado:  false ,
                FechaAdquirido:  '' ,
                AñoEquipo:  '' ,
                Prioridad:  '' ,
                
            }
        }
    }

});