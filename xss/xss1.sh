#!/bin/sh

cd ../.files/xss1/
php -S localhost:8001 2>&1 | cat > /dev/null &
echo "Challenge url is http://localhost:8001/"
firefox http://localhost:8001/
