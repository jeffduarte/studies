<?php


function validate(array $fields){

    $validate = [];
    $request = request();

    foreach ($fields as $field => $value) {
        switch ($value) {
            case 's':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_STRING);
                break;

            case 's':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_NUMBER_INT);
                break;

            case 'e':
            $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_EMAIL);
                break;
            
            default:
                # code...
                break;
        }
    }

    return (object) $validate;
}



function isEmpty() {
    $request = request();

    $empty = false;

    foreach ($request as $key => $value) {
        if (empty($request[$key])) {
            
            $empty = true;
        }
    }

    return $empty;
    
}