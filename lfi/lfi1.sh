#!/bin/sh

cd ../.files/lfi1/
php -S localhost:8002 2>&1 | cat > /dev/null &
echo "Challenge url is http://localhost:8002/"
firefox http://localhost:8002/
