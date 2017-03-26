<?php

use josegonzalez\Dotenv\Loader;

require 'vendor/deployer/deployer/recipe/cakephp.php';
require 'config/paths.php';

$Loader = new Loader(ROOT . DS . 'config' . DS . '.env');
// Parse the .env file
$Loader->parse();
// Send the parsed .env file to the $_ENV variable
$Loader->toEnv();

// Configuration
\Deployer\set('ssh_type', 'phpseclib');
//set('ssh_multiplexing', true);

\Deployer\set('repository', 'https://github.com/makallio85/fish-diary');

\Deployer\add('shared_files', []);
\Deployer\add('shared_dirs', []);

\Deployer\add('writable_dirs', []);

// Servers

\Deployer\server('production', env('PRODUCTION_HOST'))
    ->user(env('PRODUCTION_USERNAME'))
    ->password()
    ->set('deploy_path', env('PRODUCTION_RELEASE_PATH'))
    ->set('keep_releases', 10)
    ->pty(true);

\Deployer\set('shared_dirs', [
    'logs',
    'tmp',
    'webroot/img/caught-fishes'
]);

// Tasks

\Deployer\desc('Restart PHP-FPM service');
\Deployer\task('php-fpm:restart', function () {
    // The user must have rights for restart service
    // /etc/sudoers: username ALL=NOPASSWD:/bin/systemctl restart php-fpm.service
    \Deployer\run('sudo -S /sbin/service httpd reload');
});

\Deployer\task('deploy:copy-env', function () {
    \Deployer\run('cp /home/env/fish-diary/.env {{release_path}}/config/.env');
});

\Deployer\before('deploy:init', 'deploy:copy-env');
\Deployer\after('deploy:symlink', 'php-fpm:restart');

// [Optional] if deploy fails automatically unlock.
\Deployer\after('deploy:failed', 'deploy:unlock');
