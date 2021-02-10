#!/bin/sh

cd ../.files/html1/
python3 -m http.server 8011 2>&1 | cat > /dev/null &
echo "Challenge url is http://localhost:8011/"
firefox http://localhost:8011/
