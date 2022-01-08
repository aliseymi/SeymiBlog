<?php

namespace App\Utilities;

use Rakit\Validation\Validator as ValidatorPackage;

class Validator
{
    public static function validate(array $data, array $validation_rules)
    {
        $validator = new ValidatorPackage;

        $validation = $validator->make($data, $validation_rules);

        $validation->validate();

        if ($validation->fails()) {
            $errors = $validation->errors();
            
            return $errors->firstOfAll();
           
        } else {
            
            return true;
        }
    }
}