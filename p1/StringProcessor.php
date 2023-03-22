<?php

class StringProcessor 
{
    # Properties: characteristics
    public $inputString;

    # Methods: capabilities
    public function __construct($inputString) {
        $this->inputString = $inputString;
        var_dump('StringProcessor Class input:', $inputString);
    }

    public function isPalindrome($inputString) {
        return true;
    }
   
}