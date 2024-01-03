<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ImeiDistinctRule implements Rule
{
    protected $field1;
    protected $field2;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($field1, $field2)
    {
        $this->field1 = $field1;
        $this->field2 = $field2;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $field1_value = $this->field1;
        $field2_value = $this->field2;

        return $field1_value !== $field2_value;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute[0] and :attribute[1] fields must be distinct.';
    }
}
