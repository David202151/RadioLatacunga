<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'last_login_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Equipo::class, static function (Faker\Generator $faker) {
    return [
        'Nombre' => $faker->sentence,
        'Procesador' => $faker->sentence,
        'Marca' => $faker->sentence,
        'TargetaGrafica' => $faker->sentence,
        'Modelo' => $faker->sentence,
        'Antivirus' => $faker->sentence,
        'SO' => $faker->sentence,
        'EspacioDisco' => $faker->sentence,
        'MemoriaRAM' => $faker->sentence,
        'Area' => $faker->sentence,
        'Estado' => $faker->boolean(),
        'FechaAdquirido' => $faker->date(),
        'AñoEquipo' => $faker->date(),
        'Prioridad' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Componente::class, static function (Faker\Generator $faker) {
    return [
        'Nombre' => $faker->sentence,
        'Marca' => $faker->sentence,
        'Area' => $faker->sentence,
        'NumeroSerie' => $faker->sentence,
        'FechaAdquirido' => $faker->date(),
        'AñoComponente' => $faker->date(),
        'Prioridad' => $faker->sentence,
        'Estado' => $faker->sentence,
        'Equipo_id' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Mantenimiento::class, static function (Faker\Generator $faker) {
    return [
        'Nombre' => $faker->sentence,
        'Actividad' => $faker->sentence,
        'Partes' => $faker->text(),
        'Frecuencia' => $faker->sentence,
        'Prioridad' => $faker->sentence,
        'Responsable' => $faker->sentence,
        'Procedimiento' => $faker->sentence,
        'DiasParo' => $faker->randomNumber(5),
        'Equipo_id' => $faker->sentence,
        'Descripcion' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\SolicitudesMantenimiento::class, static function (Faker\Generator $faker) {
    return [
        'FechaMantenimineto' => $faker->date(),
        'HoraMantenimineto' => $faker->time(),
        'AreaMantenimineto' => $faker->sentence,
        'MotivoMantenimineto' => $faker->sentence,
        'ObservacionesMantenimineto' => $faker->sentence,
        'TiempoDuracion' => $faker->randomNumber(5),
        'HoraSalida' => $faker->time(),
        'HoraRegreso' => $faker->time(),
        'EstadoSolicitud' => $faker->sentence,
        'Parte' => $faker->text(),
        'Equipo_id' => $faker->sentence,
        'Usuario_id' => $faker->sentence,
        'Mantenimiento_id' => $faker->sentence,
        'Componente_id' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\User::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'email' => $faker->email,
        'email_verified_at' => $faker->dateTime,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
