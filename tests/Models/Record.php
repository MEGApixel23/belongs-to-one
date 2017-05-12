<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;
use Megapixel23\Database\Eloquent\Relations\BelongsToOneTrait;

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
