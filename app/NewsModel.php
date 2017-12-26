<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'newsid';
    protected $keyType = 'varchar';
    protected $fillable = [
        'newsid', 'title', 'img', 'content', 'category'
    ];
}
