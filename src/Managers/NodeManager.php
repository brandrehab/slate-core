<?php

declare(strict_types=1);

namespace Slate\Managers;

use App\Entities\Node;
use Slate\Entities\NodeType;
use Illuminate\Database\Eloquent\Collection;

/**
 * Manage retrieval of one or more node entities.
 */
class NodeManager
{
    /**
     * Attempt to retrieve a node.
     */
    public static function first(string $node_type, ?string $slug = null): Node
    {
        $nodeType = NodeType::where(['name' => $node_type])->firstOrFail();

        $params = [
          'nodetype_id' => $nodeType->id,
        ];

        if ($slug) {
            $params['slug'] = $slug;
        }

        $node = Node::where($params)->firstOrFail();

        return $node;
    }

    /**
     * Attempt to retrieve all nodes (optionally of a given node type).
     */
    public static function all(?string $node_type = null): Collection
    {

        $nodeType = $node_type ? NodeType::where(['name' => $node_type])->firstOrFail() : null;

        if ($nodeType) {
            return Node::where(['nodetype_id' => $nodeType->id])->get();
        }

        return Node::all();
    }
}
