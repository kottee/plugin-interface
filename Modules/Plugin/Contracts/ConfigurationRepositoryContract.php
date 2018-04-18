<?php
namespace Plenty\Modules\Plugin\Contracts;

use Plenty\Modules\Plugin\Models\Configuration;

/**
 * Save config values for plugins
 */
interface ConfigurationRepositoryContract 
{

	public function saveConfiguration(
		int $pluginId, 
		array $configMap, 
		int $setId = null
	):array;

	public function getConfigurationFile(
		int $pluginId, 
		int $setId
	):string;

}