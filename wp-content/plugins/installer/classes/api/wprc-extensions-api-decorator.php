<?php
class WPRC_Extensions_API_Decorator extends WPRC_Extensions_API
{
	/**
	 * Concrete extensions api object
	 */
	private $extension_type=null;
	private $api = null;

	/**
	 * Class constructor
	 *
	 * @param object extension api object
	 */
	public function __construct( WPRC_Extensions_API $extension_api_object )
	{
		$this->api = $extension_api_object;
	}

	/**
	 * Form arguments for plugin_api function
	 *
	 * @param mixed  arguments array
	 * @param string action
	 */
	public function extensionsApiArgs( $args, $action )
	{
		return $this->api->extensionsApiArgs( $args, $action );
	}

	/**
	 * Search plugins in multiple repositories
	 * This method replaces 'plugins_api' and 'themes_api' function
	 */
	public function extensionsApi( $state, $action, $args, $extension_type = false )
	{
		return $this->api->extensionsApi( $state, $action, $args, $extension_type );
	}

	/**
	 * Form structure of the plugins api results
	 */
	public function extensionsApiResult( $api_results, $action, $args )
	{
		return $this->api->extensionsApiResult( $api_results, $action, $args );
	}

	/**
	 * Render additional search UI
	 */
	public function renderAdditionalSearchUI( $extension_type = false )
	{
		$this->api->renderAdditionalSearchUI( $this->extension_type );
	}

	/**
	 * Display search results
	 */
	public function displaySearchResults()
	{
		$this->api->displaySearchResults();
	}
}

?>