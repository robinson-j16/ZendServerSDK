<?php
// Start: AutoGenerated from @ZendServerClient

// Map back all composer env variables.
foreach($_ENV as $key=> $value) {
    if(0 === ($pos = strpos($key, 'ZS_COMPOSER_'))) {
        putenv(substr($key, $pos),$value);
    }
}

copy(__DIR__ . '/composer.json ', getenv('ZS_APPLICATION_BASE_DIR'));
$cwd = getcwd();
chdir(__DIR__);

$phpBin = "/usr/local/zend/bin/php";
shell_exec("$phpBin composer.phar run-script post-install-cmd -n -d " . getenv('ZS_APPLICATION_BASE_DIR'));
unlink(getenv('ZS_APPLICATION_BASE_DIR') . '/composer.json ');
chdir($cwd);
// End: AutoGenerated from @ZendServerClient
