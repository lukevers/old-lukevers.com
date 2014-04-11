#!/bin/bash

# Let's run npm install 
if hash npm 2>/dev/null; then
	npm install
	# If we don't have gulp installed, install gulp
	if hash gulp 2>/dev/null; then
		echo 'Gulp is already installed, skipping...'
	else
		echo 'Installing gulp...'
		npm install -g gulp
	fi
else
	echo 'NPM is needed! Install NPM!'
	exit 1
fi

# Now let's run composer
if hash composer 2>/dev/null; then
	echo 'Running composer....'
	composer install
	composer update
else
	echo 'Composer is needed! Install Composer!'
	exit 1
fi

# Now that we've got that out of the way, let's get info.
echo 'Enter the username this repository will be under:'
read name

echo 'Enter the repository name:'
read repo

url='https:\/\/github.com\/'$name'\/'$repo
origin='git@github.com:'$name'/'$repo'.git'

# Fix the origin remote
git remote rm origin
echo 'Setting the remote `origin` to '$origin
git remote add origin $origin

# 
# List of files that need to be changed
#   - README.md
#   - package.json 
#     - "name"
#     - "url"
#

# Now let's update our README file
echo '#'$repo > README.md

# Now let's update our package.json file
sed -i.bak 's/Template/'$repo'/g' package.json
sed -i.bak 's/https:\/\/github.com\/ettio\/template/'$url'/g' package.json
rm *.bak
