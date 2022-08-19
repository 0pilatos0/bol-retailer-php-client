<?php

namespace Picqer\BolRetailerV7\Model;

// This class is auto generated by OpenApi\ModelGenerator
class OfferInsightsPeriod extends AbstractModel
{
    /**
     * Returns the definition of the model: an associative array with field names as key and
     * field definition as value. The field definition contains of
     * model: Model class or null if it is a scalar type
     * array: Boolean whether it is an array
     * @return array The model definition
     */
    public function getModelDefinition(): array
    {
        return [
            'day' => [ 'model' => null, 'array' => false ],
            'week' => [ 'model' => null, 'array' => false ],
            'month' => [ 'model' => null, 'array' => false ],
            'year' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var int Day of the month.
     */
    public $day;

    /**
     * @var int Week of the year.
     */
    public $week;

    /**
     * @var int Month of the year.
     */
    public $month;

    /**
     * @var int Year.
     */
    public $year;
}