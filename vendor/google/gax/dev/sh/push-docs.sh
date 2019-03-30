#!/bin/bash

# This script expects to be invoked from the gax-php root

set -e

function pushDocs () {
  git submodule add -q -f -b gh-pages https://${GH_OAUTH_TOKEN}@github.com/${TRAVIS_REPO_SLUG} ghpages

  rsync -aP tmp_gh-pages/* ghpages/

  cd ghpages
  git add .
  if [[ -n "$(git status --porcelain)" ]]; then
    git config user.name "travis-ci"
    git config user.email "travis@travis-ci.org"
    git commit -m "Updating docs for ${1}"
    git status
    git push -q https://${GH_OAUTH_TOKEN}@github.com/${TRAVIS_REPO_SLUG} HEAD:gh-pages
  else
    echo "Nothing to commit."
  fi
}

if [[ ! -z ${TRAVIS_TAG} ]]; then
  pushDocs ${TRAVIS_TAG}
elif [ "${TRAVIS_BRANCH}" == "master" ] && [ "${TRAVIS_PULL_REQUEST}" == "false" ]; then
  pushDocs ${TRAVIS_BRANCH}
fi
