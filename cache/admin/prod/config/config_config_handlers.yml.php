<?php
// auto-generated by sfRootConfigHandler
// date: 2011/06/23 19:13:02

$this->handlers['config/autoload.yml'] = new sfAutoloadConfigHandler();
$this->handlers['config/databases.yml'] = new sfDatabaseConfigHandler();
$this->handlers['config/settings.yml'] = new sfDefineEnvironmentConfigHandler(array (
  'prefix' => 'sf_',
));
$this->handlers['config/app.yml'] = new sfDefineEnvironmentConfigHandler(array (
  'prefix' => 'app_',
));
$this->handlers['config/factories.yml'] = new dmFactoryConfigHandler();
$this->handlers['config/core_compile.yml'] = new sfCompileConfigHandler();
$this->handlers['config/filters.yml'] = new sfFilterConfigHandler();
$this->handlers['config/routing.yml'] = new dmAdminRoutingConfigHandler();
$this->handlers['modules/*/config/generator.yml'] = new sfGeneratorConfigHandler();
$this->handlers['modules/*/config/view.yml'] = new sfViewConfigHandler();
$this->handlers['modules/*/config/security.yml'] = new sfSecurityConfigHandler();
$this->handlers['modules/*/config/cache.yml'] = new sfCacheConfigHandler();
$this->handlers['modules/*/config/module.yml'] = new sfDefineEnvironmentConfigHandler(array (
  'prefix' => 'mod_',
  'module' => true,
));
$this->handlers['config/dm/modules.yml'] = new dmAdminModuleManagerConfigHandler();
$this->handlers['config/dm/config.yml'] = new sfDefineEnvironmentConfigHandler(array (
  'prefix' => 'dm_',
));
$this->handlers['config/dm/assets.yml'] = new dmInlineAssetConfigHandler();
$this->handlers['config/dm/widget_types.yml'] = new sfSimpleYamlConfigHandler();