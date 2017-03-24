<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use \Venturecraft\Revisionable\RevisionableTrait;

class Setting extends Model
{
    use CrudTrait;
    use RevisionableTrait;

    protected $table = 'settings';
    protected $fillable = ['value'];
//    protected $casts = ['value'  => 'object'];
}
