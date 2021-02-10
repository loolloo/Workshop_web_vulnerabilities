#!/bin/sh

cd ../.files/html2/
python3 -m http.server 8012 2>&1 | cat > /dev/null &
echo "Challenge url is http://localhost:8012/"
firefox http://localhost:8012/
