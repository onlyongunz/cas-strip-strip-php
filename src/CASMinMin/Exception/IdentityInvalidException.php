<?php
namespace Chez14\CASMinMin\Exception;

class IdentityInvalidException extends \Exception {
    public function __construct($message="", $code=0){
        parent::__construct($message, $code);
    }
}