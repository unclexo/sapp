<?php 

namespace Sapp\Frontend\Bundle\FrontendBundle\Twig;

use Symfony\Component\Intl\Intl;

class LocaleExtension extends \Twig_Extension
{
	/**
	 * @var array
	 */
	private $locales;

	public function __construct($locales) 
	{
		$this->locales = $locales;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getFunctions()
	{
		return [
			new \Twig_SimpleFunction('locales', [$this, 'getLocales']),
		];
	}

	/**
	 * Gets allowed locales and returns a formatted array
	 * 
	 * @return array
	 */ 
	public function getLocales()
	{
		$allowedLocales = explode('|', $this->locales);

		$locales = [];
		foreach ($allowedLocales as $locale) {
			$locales[] = ['code' => $locale, 'name' => Intl::getLocaleBundle()->getLocaleName($locale, $locale)];
		}

		return $locales;
	}
}

