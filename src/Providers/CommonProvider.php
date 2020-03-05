<?php
namespace App\Providers;

use App\Libraries\Common;
use Illuminate\Support\ServiceProvider;
class CommonProvider extends ServiceProvider
{
    public function boot(){

    }

    public function register(){
        $this->app->bind('Common', function () {
            return new Common();
        });
    }
}