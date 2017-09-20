<?php 
namespace Kaankilic\WTFilter\Providers;
use Illuminate\Support\ServiceProvider;
use Kaankilic\WTFilter\Libraries\Filter;
class WTFilterServiceProvider extends ServiceProvider {
	protected $defer = false;

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	*/
   	public function boot(\Illuminate\Routing\Router $router){
        $this->loadTranslationsFrom(realpath(__DIR__.'/../../resources/lang'), 'Filter');
		$this->publishes([
			__DIR__.'/../../config/wtfilter.php' => config_path('wtfilter.php'),
        	__DIR__.'/../../resources/lang' => resource_path('lang/vendor/wtfilter')
		]);
	}

  /**
	* Register the application services.
	*
	* @return void
  */
	public function register(){
		$this->app->singleton('WTFilter', function (\Illuminate\Container\Container $app) {
			return new Filter(config('wtfilter'),trans('Filter::wtfilter'));
		});
		$this->mergeConfigFrom(__DIR__ . '/../../config/wtfilter.php', 'wtfilter');
		return array('WTFilter');
	}
}