<?php

namespace Models;

use Megapixel23\Database\Eloquent\Relations\BelongsToOneTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property Group $group
 */
class Record extends Model
{
    use BelongsToOneTrait;

    public function group()
    {
        return $this->belongsToOne(Group::class);
    }
}
