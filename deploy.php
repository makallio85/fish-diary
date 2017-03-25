<?php
namespace Deployer;
require 'vendor/deployer/deployer/recipe/cakephp.php';

// Configuration

set('ssh_type', 'phpseclib');
//set('ssh_multiplexing', true);

set('repository', 'https://github.com/makallio85/fish-diary');

add('shared_files', []);
add('shared_dirs', []);

add('writable_dirs', []);

// Servers

server('production', 'esxi-102.suomenpt.fi')
    ->user('fish-diary')
    ->password()
    ->set('deploy_path', '/home/fish-diary/public_html/v1')
    ->pty(true);


// Tasks

desc('Restart PHP-FPM service');
task('php-fpm:restart', function () {
    // The user must have rights for restart service
    // /etc/sudoers: username ALL=NOPASSWD:/bin/systemctl restart php-fpm.service
    run('sudo systemctl restart php-fpm.service');
});

task('deploy:copy-env', function () {
    run('cp /home/env/fish-diary/.env {{release_path}}/config/.env');
});

before('deploy:init', 'deploy:copy-env');
after('deploy:symlink', 'php-fpm:restart');

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
