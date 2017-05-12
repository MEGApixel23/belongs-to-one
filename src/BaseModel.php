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
    use BelongsToOneTrait;
}
