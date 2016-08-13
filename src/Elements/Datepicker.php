<?php namespace Laravolt\SemanticForm\Elements;

class Datepicker extends Text
{
    protected $attributes = array(
        'readonly' => 'readonly',
    );

    public function value($value)
    {
        if ($value instanceof \DateTime) {
            $value = $value->format('Y-m-d');
        }
        return parent::value($value);
    }
}
