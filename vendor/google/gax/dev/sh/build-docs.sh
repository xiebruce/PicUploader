#!/bin/bash

# Script to build doc site.
# This script expects to be invoked from the gax-php root.
#
# This script will look for the TRAVIS_TAG environment variable, and
# use that as the version number. If no environment variable is found,
# it will use the first command line argument. If no command line
# argument is specified, default to 'master'.

set -ev

ROOT_DIR=$(pwd)
DOC_OUTPUT_DIR=${ROOT_DIR}/tmp_gh-pages
INDEX_FILE=${DOC_OUTPUT_DIR}/index.html
VERSION_FILE=${ROOT_DIR}/VERSION
SAMI_EXECUTABLE=${ROOT_DIR}/vendor/sami/sami/sami.php
SAMI_CONFIG=${ROOT_DIR}/dev/src/Docs/sami-config.php

# Construct the base index file that redirects to the latest version
# of the docs. This will only be generated when TRAVIS_TAG is set.
UPDATED_INDEX_FILE=$(cat << EndOfMessage
<html><head><script>window.location.replace('/gax-php/${TRAVIS_TAG}/' + location.hash.substring(1))</script></head><body></body></html>
EndOfMessage
)

function checkVersionFile() {
  # Verify that the specified version matches the contents
  # of the VERSION file.
  VERSION_FILE_CONTENTS="$(cat ${VERSION_FILE})"
  if [ ${VERSION_FILE_CONTENTS} != ${1} ]; then
    echo ERROR: mismatched versions
    echo Expected version: ${1}
    echo VERSION file: ${VERSION_FILE_CONTENTS}
    exit 1
  fi
}

function buildDocs() {
  DOCS_VERSION_TO_BUILD=${1}
  API_CORE_DOCS_VERSION=${DOCS_VERSION_TO_BUILD} php ${SAMI_EXECUTABLE} update ${SAMI_CONFIG} -v
}

if [[ ! -z ${TRAVIS_TAG} ]]; then
  checkVersionFile ${TRAVIS_TAG}
  buildDocs ${TRAVIS_TAG}
  # Update the redirect index file only for builds that use the
  # TRAVIS_TAG env variable.
  echo ${UPDATED_INDEX_FILE} > ${INDEX_FILE}
else
  if [[ ! -z ${1} ]]; then
    DOCS_VERSION_TO_BUILD=${1}
  else
    # If no command line arg is specified, default to 'master'
    DOCS_VERSION_TO_BUILD=master
  fi
  buildDocs ${DOCS_VERSION_TO_BUILD}
fi
