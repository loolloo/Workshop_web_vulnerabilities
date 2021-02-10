#!/bin/sh

cd ../.files/js4/
php -S localhost:8007 2>&1 | cat > /dev/null &
php -S localhost:8000 login.php
echo "Challenge url is http://localhost:8007/"
firefox http://localhost:8007/
