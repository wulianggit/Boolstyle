<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Article
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Tag[] $belongsToManyTag
 * @property-read \App\Models\Category $category
 * @mixin \Eloquent
 */
class Article extends Model
{
    use ActionButton;

    protected $action;

    protected $table = 'articles';

    protected $fillable = ['title', 'keyword', 'cate_id', 'introduce', 'img_path', 'content_html', 'content_mark'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->action = 'article';
    }

    /**
     * 文章和标签多对多关联
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     * @author wuliang
     */
    public function tags ()
    {
        return $this->belongsToMany('App\Models\Tag', 'article_tag', 'article_id', 'tag_id')->withTimestamps();
    }

    /**
     * 文章和分类一对一关联
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     * @author wuliang
     */
    public function category ()
    {
        return $this->hasOne('App\Models\Category', 'id', 'cate_id');
    }

    /**
     * 文章与浏览次数一对多关系
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * @author wuliang
     */
    public function visitors()
    {
        return $this->hasMany('App\Models\VisitorRegistry');
    }
}
