<?php
namespace TPWeb\Iban;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

/**
 *
 * PHP Iban Library
 *
 * @version    1.0.0
 * @package    tpweb/iban
 * @copyright  Copyright (c) 2016 Made I.T. (http://www.madeit.be) - TPWeb.org (http://www.tpweb.org)
 * @author     Made I.T. <info@madeit.be>
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 */
class IbanServiceProvider extends ServiceProvider
{

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	protected $rules = [
		'iban', 'bic'
	];
	
	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		AliasLoader::getInstance()->alias('Iban', 'TPWeb\Iban\Iban');
    	$this->loadTranslationsFrom(__DIR__.'/lang', 'iban');
		$this->addNewRules();
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('Iban', 'TPWeb\Iban\Iban');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['iban'];
	}

	protected function addNewRules()
	{
		foreach ($this->rules as $rule)
		{
			$this->extendValidator($rule);
		}
	}

	protected function extendValidator($rule)
	{
		$method = 'validate' . studly_case($rule);
		$translation = $this->app['translator']->get('iban::validation');

		$this->app['validator']->extend($rule, 'TPWeb\Iban\Validation\ValidatorExtensions@' . $method, $translation[$rule]);
	}
}