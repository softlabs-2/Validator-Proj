<?php namespace Services\Errors;

class Error
{
    /**
     * From a validator instance it gets the error messages based on rules passed through
     *
     * @param  Services\Validator  $validator  validator
     * @param  boolean $asResponse a check for whether to return it as a json response or just an array
     *
     * @return json/array         a list of error messages
     */
    public static function getErrorMessages($validator, $asResponse = true)
    {

        foreach ($validator::$rules as $key => $value) {
            $myArr[$key] = $validator->errors->first($key, ':message');
        }

        if ($asResponse) {

            return \Response::json(array(
                'status' => 'ok',
                'messages' => $myArr
            ));

        } else {

            return $myArr;

        }

    }
}