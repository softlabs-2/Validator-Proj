<?php

class Post extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
		'author' => 'required',
		'body' => 'required'
	);
}