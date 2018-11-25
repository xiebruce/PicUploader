SHELL := /bin/bash
version = $(shell grep "$GLOBALS\['version'\]" src/Config.php | grep -oE '[0-9.]+')

help:
	@echo "Please use \`make <target>' where <target> is one of"
	@echo "  all               to update, generate and test this SDK"
	@echo "  test              to run service test"
	@echo "  unit              to run all sort of unit tests except runtime"
	@echo "  build             to build phar"
	@echo "  update            to update git submodules"
	@echo "  generate          to generate service code"

all: update generate unit

test:
	@echo "run service test"
	pushd "scenarios"; \
	composer update; \
	vendor/bin/behat; \
	popd
	@echo "ok"

generate:
	@if [[ ! -f "$$(which snips)" ]]; then \
		echo "ERROR: Command \"snips\" not found."; \
	fi
	snips \
		-f ./specs/qingstor/2016-01-06/swagger/api_v2.0.json \
		-t="./template" \
		-o="./src/QingStor"
	rm ./src/QingStor/Object.php
	vendor/bin/php-cs-fixer fix .
	@echo "ok"

update:
	git submodule update --remote
	@echo "ok"

unit:
	@echo "run unit test"
	vendor/bin/phpunit --no-configuration tests
	@echo "ok"

build:
	@echo "build phar"
	rm -rf *.phar
	@if [[ ! -f "vendor/bin/box" ]]; then \
		composer require humbug/box --dev; \
	fi
	vendor/bin/box compile
	mv index.phar qingstor-sdk-php-$(version).phar
	@echo "ok"
