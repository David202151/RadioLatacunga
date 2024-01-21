<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'equipo' => [
        'title' => 'Equipos',

        'actions' => [
            'index' => 'Equipos',
            'create' => 'New Equipo',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'Nombre' => 'Nombre',
            'Procesador' => 'Procesador',
            'Marca' => 'Marca',
            'TargetaGrafica' => 'TargetaGrafica',
            'Modelo' => 'Modelo',
            'Antivirus' => 'Antivirus',
            'SO' => 'SO',
            'EspacioDisco' => 'EspacioDisco',
            'MemoriaRAM' => 'MemoriaRAM',
            'Area' => 'Area',
            'Estado' => 'Estado',
            'FechaAdquirido' => 'FechaAdquirido',
            'AñoEquipo' => 'AñoEquipo',
            'Prioridad' => 'Prioridad',
            
        ],
    ],

    'componente' => [
        'title' => 'Componentes',

        'actions' => [
            'index' => 'Componentes',
            'create' => 'New Componente',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'Nombre' => 'Nombre',
            'Marca' => 'Marca',
            'Area' => 'Area',
            'NumeroSerie' => 'NumeroSerie',
            'FechaAdquirido' => 'FechaAdquirido',
            'AñoComponente' => 'AñoComponente',
            'Prioridad' => 'Prioridad',
            'Estado' => 'Estado',
            'Equipo_id' => 'Equipo',
            
        ],
    ],

    'mantenimiento' => [
        'title' => 'Mantenimiento',

        'actions' => [
            'index' => 'Mantenimiento',
            'create' => 'New Mantenimiento',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'Nombre' => 'Nombre',
            'Actividad' => 'Actividad',
            'Partes' => 'Partes',
            'Frecuencia' => 'Frecuencia',
            'Prioridad' => 'Prioridad',
            'Responsable' => 'Responsable',
            'Procedimiento' => 'Procedimiento',
            'DiasParo' => 'DiasParo',
            'Equipo_id' => 'Equipo',
            'Descripcion' => 'Descripcion',
            
        ],
    ],

    'solicitudes-mantenimiento' => [
        'title' => 'Solicitudes Mantenimiento',

        'actions' => [
            'index' => 'Solicitudes Mantenimiento',
            'create' => 'New Solicitudes Mantenimiento',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'FechaMantenimineto' => 'FechaMantenimineto',
            'HoraMantenimineto' => 'HoraMantenimineto',
            'AreaMantenimineto' => 'AreaMantenimineto',
            'MotivoMantenimineto' => 'MotivoMantenimineto',
            'ObservacionesMantenimineto' => 'ObservacionesMantenimineto',
            'TiempoDuracion' => 'TiempoDuracion',
            'HoraSalida' => 'HoraSalida',
            'HoraRegreso' => 'HoraRegreso',
            'EstadoSolicitud' => 'EstadoSolicitud',
            'Parte' => 'Parte',
            'Equipo_id' => 'Equipo',
            'Usuario_id' => 'Usuario',
            'Mantenimiento_id' => 'Mantenimiento',
            'Componente_id' => 'Componente',
            
        ],
    ],

    'user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'email_verified_at' => 'Email verified at',
            'password' => 'Password',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];