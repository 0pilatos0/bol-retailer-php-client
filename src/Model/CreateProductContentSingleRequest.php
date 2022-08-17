<?php

namespace Picqer\BolRetailerV5\Model;

// This class is auto generated by OpenApi\ModelGenerator
class CreateProductContentSingleRequest extends AbstractModel
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
            'language' => [ 'model' => null, 'array' => false ],
            'attributes' => [ 'model' => Attribute::class, 'array' => true ],
            'assets' => [ 'model' => Asset::class, 'array' => true ],
        ];
    }

    /**
     * @var string The language in which content is submitted.
     */
    public $language;

    /**
     * @var Attribute[] A list of attributes.
     */
    public $attributes = [];

    /**
     * @var Asset[]
     */
    public $assets = [];
}
