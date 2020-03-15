<?php declare(strict_types=1);

namespace Nkf\Heroes;

use Nkf\Heroes\Commands\CreateMigration;
use Nkf\Heroes\Commands\Seed;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public const MIDDLEWARE_ALIASES = [
//        'auth' =>
    ];
    public function boot()
    {
        parent::boot();
//        $route
    }


    public function registerComponents()
    {

    }

    public function registerSettings()
    {
    }

    public function register()
    {
        parent::register();
        $this->registerConsoleCommand('heroes:seed', Seed::class);
        $this->registerConsoleCommand('make:migration', CreateMigration::class);
    }


}
