<?php

namespace App\JsonApi\Farmacias;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'farmacias';

    /**
     * @param \App\Models\Farmacia $resource
     *      the domain record being serialized.
     * @return string
     */
    public function getId($resource)
    {
        return (string) $resource->getRouteKey();
    }

    /**
     * @param \App\Models\Farmacia $resource
     *      the domain record being serialized.
     * @return array
     */
    public function getAttributes($resource)
    {
        return [
            'razon_social' => $resource->razon_social,
            'nombre_comercial' => $resource->nombre_comercial
        ];
    }

    /**
     * @param \App\Models\Farmacia $resource
     *      El objeto a ser serializado.
     * @param bool $isPrimary
     * @param array $includeRelationships
     *      Array de relaciones incluidas en la solicitud.
     *
     * @return array
     */
    public function getRelationships($resource, $isPrimary, array $includeRelationships)
    {
        return [
            'sucursals' => [
                self::SHOW_SELF => true,
                self::SHOW_RELATED => true,
            ]
        ];
    }

}
