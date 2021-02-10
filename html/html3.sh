#!/bin/sh

cd ../.files/html3/
php -S localhost:8013 2>&1 | cat > /dev/null &
echo "Challenge url is http://localhost:8013/"
firefox http://localhost:8013/
