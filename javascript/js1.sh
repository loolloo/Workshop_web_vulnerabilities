#!/bin/sh

cd ../.files/js1/
php -S localhost:8004 2>&1 | cat > /dev/null &
echo "Challenge url is http://localhost:8004/"
firefox http://localhost:8004/
