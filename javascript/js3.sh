#!/bin/sh

cd ../.files/js1/
php -S localhost:8006 2>&1 | cat > /dev/null &
echo "Challenge url is http://localhost:8006/"
firefox http://localhost:8006/
