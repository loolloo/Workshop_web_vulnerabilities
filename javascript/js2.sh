#!/bin/sh

cd ../.files/js2/
php -S localhost:8005 2>&1 | cat > /dev/null &
echo "Challenge url is http://localhost:8005/"
firefox http://localhost:8005/
