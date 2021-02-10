<?php

function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

if (isset($_GET["note"])) {
    $file = generateRandomString();
    $content = strtolower($_GET["note"]);

    if (strpos($content, "script")) {
        echo "No using scripts in our notes";
    } else if (file_put_contents("notes/" . $file, $_GET["note"]) === false) {
        echo "Internal error...";
    } else {
        echo "Note accessible on /notes/" . $file;
    }
} else {
    echo "Bad request";
}

?>
