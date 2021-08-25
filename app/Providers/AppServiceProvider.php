<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route; //agregado par podificar nombre d rutas
// esto por el motivo de usar Route::resource('curso', CursoController::class);  en web(vistas)
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Route::resourceVerbs([//aqui estoy cambiando los nombre de las rutas que estaban por default
            'create' => 'crear',
            'edit' => 'editar',
        ]);
    }
}
