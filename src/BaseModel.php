<?php

namespace Megapixel23\Database\Eloquent\Relations;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseModel
 * @package Megapixel23\Database\Eloquent\Relations
 *
 * @inheritdoc
 */
class BaseModel extends Model
{
    /**
     * Define a many-to-one relationship.
     *
     * @param  string  $related
     * @param  string  $table
     * @param  string  $foreignKey
     * @param  string  $otherKey
     * @param  string  $relation
     * @return BelongsToOne
     */
    public function belongsToOne($related, $table = null, $foreignKey = null, $otherKey = null, $relation = null)
    {
        if (is_null($relation)) {
            $relation = $this->getBelongsToManyCaller();
        }

        $foreignKey = $foreignKey ?: $this->getForeignKey();
        $instance = new $related;
        $otherKey = $otherKey ?: $instance->getForeignKey();

        if (is_null($table)) {
            $table = $this->joiningTable($related);
        }

        $query = $instance->newQuery();

        return new BelongsToOne($query, $this, $table, $foreignKey, $otherKey, $relation);
    }
}
