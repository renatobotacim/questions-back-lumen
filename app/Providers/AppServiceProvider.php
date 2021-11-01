<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {

        /**
         * comando para registrar o provaider para quando for habilitar autencicação via jwt
         * 
         * $this->app->register(\Tymon\JWTAuth\Providers\LumenServiceProvider::class);
         * 
         */
        $this->app->bind('App\Repositories\questionsRepositoryInterface', 'App\Repositories\questionsRepositoryEloquent');
        $this->app->bind('App\Repositories\dimensionsRepositoryInterface', 'App\Repositories\dimensionsRepositoryEloquent');
    }

}
