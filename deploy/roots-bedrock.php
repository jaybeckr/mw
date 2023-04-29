<?php
namespace Deployer;

require_once __DIR__ . '/../vendor/deployer/deployer/recipe/common.php';

add('recipes', ['roots-bedrock']);

// set('shared_files', ['wp-config.php']);
//set('shared_dirs', ['wp-content/uploads']);
//set('writable_dirs', ['wp-content/uploads']);

desc('Deploys your project');
task('deploy', [
    'deploy:prepare',
    'deploy:vendors',
    'deploy:publish',
    // set permissions?
    // restart php8.1-fpm / clear opcache
]);
