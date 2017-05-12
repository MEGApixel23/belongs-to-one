<?php

namespace Models;

use Megapixel23\Database\Eloquent\Relations\BaseModel;

/**
 * @property int $id
 * @property Group $group
 */
class Record extends BaseModel
{
    public function group()
    {
        return $this->belongsToOne(Group::class);
    }
}
