<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->subject('Verificar Dirección de Correo Electrónico')
                ->line('Haga clic en el botón a continuación para verificar su dirección de correo electrónico')
                ->action('Confirmar Cuenta', $url)
                ->line('Si no creó una cuenta, no es necesario realizar ninguna acción. Recuerde no compartir este correo electrónico con nadie. Gracias.');
        });
        //
    }
}
