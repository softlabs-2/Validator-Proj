<?php namespace Softlabs\Validator;

abstract class Validator
{

    /**
     * Input to be validated
     *
     * @var array
     *
     */
    protected $input;

    /**
     * Validation errors
     *
     * @var array
     *
     */
    public $errors;

    /**
     * Creates a New Validator Instance.
     * @param array $input key value array of fields and there values to be validated.
     *                     uses Input:all() if nothing is passed through
     */
    public function __construct($input = null)
    {
        $this->input = $input ?: \Input::all();
    }

    /**
     * Checks if the inputs pass validation.
     * @return boolean true if valid else false
     */
    public function passes()
    {
        $validation = \Validator::make($this->input, static::$rules);

        if ($validation->passes()) return true;

        // sets error messages
        $this->errors = $validation->messages();

        return false;
    }
}