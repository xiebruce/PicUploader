#!/usr/bin/env bash

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"

PHP_VER=$(php -v | head -n 1 | cut -d ' ' -f 2);
SDK_VER=$(grep -oiP '(?<="version": ")([0-9.]+)(?=")' composer.json)


bash ${DIR}/allocate_test_cloud.sh "PHP ${PHP_VER} SDK ${SDK_VER}"
