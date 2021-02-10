#!/bin/sh

echo "Hello which note do you want me to look into?"

read note

if [[ "${note}" =~ [^A-Z] ]]; then
    echo "Error: path should only be uppercased letters"
    exit 1
fi

curl "http://localhost:8001/$note" -b "flag="`echo "eHNze0FfZ29vZF9oYWNrZXJfZG9lc250X25lZWRfc2NyaXB0X3RvX21ha2VfamF2YXNjcmlwdH0K" | base64 -d`
