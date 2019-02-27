<?php

/**
 * DokuWiki Plugin Localization (Action Component)
 * @link https://github.com/kondurake/dokuwiki-plugin-localization
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author kondurake <kvp@live.com>
 */
// must be run within Dokuwiki
defined('DOKU_INC') || die();

class action_plugin_localization extends DokuWiki_Action_Plugin
{

	/**
	 * @param Doku_Event_Handler $controller
	 * @return void
	 */
	public function register(Doku_Event_Handler $controller)
	{
		$controller->register_hook('DOKUWIKI_STARTED', 'AFTER', $this, 'handle_init_lang_load', null, 3999);
	}

	/**
	 * @param Doku_Event $event
	 * @return null
	 */
	public function handle_init_lang_load()
	{
		global $conf;

		if (empty($conf['lang']) || empty($conf['lang_before_translation'])) {
			return; // Languages are not defined
		}

		if ($conf['lang'] == $conf['lang_before_translation']) {
			return; // Current language is the same as the default language
		}

		// Overwrite settings
		$local = $this->load($conf['lang']);
		if ($local) {
			$conf = array_replace_recursive($conf, $local);
		}
	}

	/**
	 * @param string $lang
	 * @return array|null
	 */
	private function load($lang)
	{
		$file = __DIR__ . "/locales/{$lang}/conf.php";
		if (is_file($file)) {
			$conf = null;
			include $file;

			if ($conf && is_array($conf)) {
				return $conf;
			}
		}
	}

}
