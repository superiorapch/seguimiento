<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\ConfirmarEmail' => [
            'App\Listeners\EnviarNotificacionConfirmarEmail',
        ],
        'App\Events\EmailConfirmado' => [
            'App\Listeners\EnviarNotificacionEmailConfirmado',
        ],
        'App\Events\NotificacionesEstudiante' => [
            'App\Listeners\CrearNotificacionesEstudiante',
        ],
        'App\Events\NotificacionesEmpresa' => [
            'App\Listeners\CrearNotificacionesEmpresa',
        ],
        'App\Events\ActualizarSession' => [
            'App\Listeners\RefrescarSesionUsuario',
        ],
        'App\Events\MarcarComoLeida' => [
            'App\Listeners\MarcarNotificacion',
        ],
        'App\Events\GenerarLineaTiempo' => [
            'App\Listeners\CrearEvento',
        ],
        'App\Events\NotificacionesUsuario' => [
            'App\Listeners\CrearNotificacionesUsuario',
        ],
        'App\Events\NotificacionesOferta' => [
            'App\Listeners\CrearNotificacionOferta',
        ],
        'App\Events\NotificacionesAplicacion' => [
            'App\Listeners\CrearNotificacionAplicacion',
        ],
        'App\Events\NotificacionesCandidato' => [
            'App\Listeners\CrearNotificacionCandidato',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
