<?php

namespace Algolia\SearchBundleSkeleton\Engine;

use Algolia\SearchBundle\Engine\EngineInterface;

class ExampleEngine implements EngineInterface
{
    public function add($searchableEntities)
    {
        // TODO: Implement add() method.
    }

    public function update($searchableEntities)
    {
        // TODO: Implement update() method.
    }

    public function remove($searchableEntities)
    {
        // TODO: Implement remove() method.
    }

    public function clear($indexName)
    {
        // TODO: Implement clear() method.
    }

    public function delete($indexName)
    {
        // TODO: Implement delete() method.
    }

    public function search($query, $indexName, $page = 0, $nbResults = null, array $parameters = [])
    {
        // TODO: Implement search() method.
    }

    public function searchIds($query, $indexName, $page = 0, $nbResults = null, array $parameters = [])
    {
        // TODO: Implement searchIds() method.
    }

    public function count($query, $indexName)
    {
        // TODO: Implement count() method.
    }
}
