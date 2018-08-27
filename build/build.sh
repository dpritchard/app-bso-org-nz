#!/bin/bash
base=/var/www/
approot=${base}dev.bso.org.nz/
remote=git@github.com:dpritchard/app-bso-org-nz.git

cd $approot
git pull ${remote}
composer install
npm install
npm run production

php artisan migrate

# Cleanup Before
# rm -rf ${sami}/build
# rm -rf ${sami}/cache
# rm -rf ${sami}/laravel

# Run API Docs
# git pull https://github.com/laravel/framework.git ${sami}/laravel

# ${sami}/vendor/bin/sami.php update ${sami}/sami.php

# cp -r ${sami}/build/* ${base}/public/api

# Cleanup After
# rm -rf ${sami}/build
# rm -rf ${sami}/cache
# rm -rf ${sami}/laravel
