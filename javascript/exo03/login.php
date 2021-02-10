<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    if($_SERVER['REQUEST_METHOD'] = 'GET') {
        $elem = "Iqtu9xxBWfGozDI9UNHqhkQps";
        echo json_encode($elem);
        http_response_code(200);
    } else {
        http_response_code(405);
        echo json_encode(["message" => "Method Not Allowed"]);
    }
?>