<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'categoryid';
    protected $keyType = 'varchar';
    protected $fillable = [
        'categoryid', 'name'
    ];
}
