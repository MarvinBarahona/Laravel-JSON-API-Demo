<?php

namespace App\JsonApi\Medicamentos;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'medicamentos';

    /**
     * @param \App\Models\Medicamento $resource
     *      the domain record being serialized.
     * @return string
     */
    public function getId($resource)
    {
        return (string) $resource->getRouteKey();
    }

    /**
     * @param \App\Models\Medicamento $resource
     *      the domain record being serialized.
     * @return array
     */
    public function getAttributes($resource)
    {
        return [
            'nombre' => $resource->nombre
        ];
    }

    /**
     * @param \App\Models\Sucursal $resource
     *      El objeto a ser serializado.
     * @param bool $isPrimary
     * @param array $includeRelationships
     *      Array de relaciones incluidas en la solicitud.
     *
     * @return array
     */
    public function getRelationships($resource, $isPrimary, array $includeRelationships)
    {
        return [];
    }
}
