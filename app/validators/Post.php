<?php namespace Validators;


class Post extends \Services\Validators\Validator
{
    public static $rules = [
        'title' => 'required',
        'body'  => 'required',
    ];
}