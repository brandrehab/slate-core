<?php

declare(strict_types=1);

namespace Slate\Managers;

use App\Entities\Node;
use Slate\Entities\NodeType;

/**
 * Manage retrieval of one or more node entities.
 */
abstract class NodeManager
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
}
