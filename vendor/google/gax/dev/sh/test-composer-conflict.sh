#!/bin/bash

# Try to run `composer install`, with the expectation that it will FAIL!
# This is to test that the 'conflict' clause of the composer.json file
# is correctly blocking installation when an incompatible protobuf
# extension is present.

if composer install ; then
  echo "Expected 'composer install' to fail, but it succeeded!"
  exit 1
else
  echo "'composer install' failed, as expected"
fi

