<?php

namespace App\JsonApi\Farmacias;

use CloudCreativity\LaravelJsonApi\Validation\AbstractValidators;

class Validators extends AbstractValidators
{
    /**
     * @var string[]
     */
    protected $messages = [
        'razon_social.unique' => "Se envió una razón social que ya ha sido registrada",
        '*.min' => "Atributo :attribute debe tener por lo menos :min caracteres",
        '*.max' => "Atributo :attribute debe tener máximo :max caracteres",
        '*.required' => "Campo obligatorio: :attribute",
        '*.string' => "Campo debe ser texto: :attribute"
    ];

    protected $queryMessages = [
        '*.integer' => ":attribute debe ser un entero",
        'page.number.min' => ":attribute debe ser un número mayor o igual que :min",
        'page.size.between' => ":attribute de ser un número entre :min y :max"
    ];

    /**
     * The include paths a client is allowed to request.
     *
     * @var string[]|null
     *      the allowed paths, an empty array for none allowed, or null to allow all paths.
     */
    protected $allowedIncludePaths = [];

    /**
     * The sort field names a client is allowed send.
     *
     * @var string[]|null
     *      the allowed fields, an empty array for none allowed, or null to allow all fields.
     */
    protected $allowedSortParameters = [];

    /**
     * @var string[]
     */
    protected $allowedPagingParameters = ['number', 'size'];


    /**
     * The filters a client is allowed send.
     *
     * @var string[]|null
     *      the allowed filters, an empty array for none allowed, or null to allow all.
     */
    protected $allowedFilteringParameters = [];

    /**
     * Get resource validation rules.
     *
     * @param mixed|null $record
     *      the record being updated, or null if creating a resource.
     * @return mixed
     */
    protected function rules($record = null): array
    {
        return [
            'razon_social' => 'required|string|min:5|max:200|unique:farmacia,razon_social',
            'nombre_comercial' => 'required|string|min:5|max:100'
        ];
    }

    /**
     * Get query parameter validation rules.
     *
     * @return array
     */
    protected function queryRules(): array
    {
        return [
            'page.number' => 'integer|min:1',
            'page.size' => 'integer|between:10,30',
        ];
    }

}
