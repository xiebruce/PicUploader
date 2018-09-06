#! /bin/sh

# Remove dev deps to reduce phar size
rm -rf composer.lock vendor/

# Generate composer.lock
composer install --no-dev

# Find SDK version
version=$(grep 'const NOS_VERSION' src/NOS/NOSClient.php | grep -oE '[0-9.]+')

# Build phar
phar-composer build . netease-nos-php-sdk-$version.phar