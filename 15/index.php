<?php

//@require_once 'file.txt';

// error in ini file

$file = 'namespacee.php';


//if (!file_exists($file)) {
//    throw new Exception('File not found');
//}

try {
    if (!file_exists($file)) {
        throw new Exception('File not found');
    }
} catch (Exception $e){
    echo $e->getMessage();
}

class NewException extends Exception {

}

