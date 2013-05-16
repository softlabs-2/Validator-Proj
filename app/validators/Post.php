<?php namespace Validators;


class Post extends \Softlabs\Validator\Validator
{
    public static $rules = [
        'title' => 'required',
        'body'  => 'required',
    ];
}