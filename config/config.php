<?php
use Zend\Stdlib\ArrayUtils;
use Zend\Stdlib\Glob;

$cachedConfigFile = 'data/cache/app_config.php';
$config = [];

if (is_file($cachedConfigFile) === true) {
    return new ArrayObject(include $cachedConfigFile, ArrayObject::ARRAY_AS_PROPS);
}

foreach (Glob::glob('config/autoload/{{,*.}global,{,*.}local}.php', Glob::GLOB_BRACE) as $file) {
    $config = ArrayUtils::merge($config, include $file);
}

if (isset($config['config_cache_enabled']) === true && $config['config_cache_enabled'] === true) {
    file_put_contents($cachedConfigFile, '<?php return '.var_export($config, true).';');
}

return new ArrayObject($config, ArrayObject::ARRAY_AS_PROPS);
