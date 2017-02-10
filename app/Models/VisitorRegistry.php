<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisitorRegistry extends Model
{
    protected $fillable = ['clicks'];

    /**
     * 浏览记录与文章一对多关系
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * @author wuliang
     */
    public function articles()
    {
        return $this->belongsTo('App\Models\Article');
    }
}
