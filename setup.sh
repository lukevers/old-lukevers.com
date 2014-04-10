#!/bin/bash

# Let's run npm install 
if hash npm 2>/dev/null; then
	npm install
else
	echo 'NPM is needed! Install NPM!';
	exit 1;
fi

# Now let's run composer
if hash composer 2>/dev/null; then
	composer install
	composer update
else
	echo 'Composer is needed! Install Composer!';
	exit 1;
fi

# Now that we've got that out of the way, let's get info.

