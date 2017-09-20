<?php 
namespace Kaankilic\WTFilter\Providers;
use Illuminate\Support\ServiceProvider;
class WTFilterServiceProvider extends ServiceProvider {
  protected $defer = false;

   /**
     * Bootstrap the application services.
     *
     * @return void
    */
  public function boot(\Illuminate\Routing\Router $router){
    $this->publishes([
      __DIR__.'/../../config/wtfilter.php' => config_path('wtfilter.php')
    ]);
  }
 
  /**
    * Register the application services.
    *
    * @return void
  */
  public function register(){
    $this->mergeConfigFrom(__DIR__ . '/../../config/wtfilter.php', 'wtfilter');
    return array('WTFilter');
  }
}