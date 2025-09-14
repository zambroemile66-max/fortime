<?php

namespace App\Exceptions;

use App\Controllers\BlogController;
use Exception;
use Throwable;

class NotFoundException extends Exception{

    public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null){

        parent::__construct($message, $code, $previous);
    }

    public function error404(string $error){
        (new BlogController())->error404($error);
    }
}