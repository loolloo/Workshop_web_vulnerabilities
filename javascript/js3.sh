#!/bin/sh

cd ../.files/js3/
php -S localhost:8006 2>&1 | cat > /dev/null &
php -S localhost:8000 login.php
echo "Challenge url is http://localhost:8006/"
firefox http://localhost:8006/
