<?php

namespace App\Repositories\Eloquent\Frontend;

use App\Models\Article;
use App\Models\ArticleTag;
use App\Repositories\Eloquent\Repository;

class ArticleRepository extends Repository
{
    public function model()
    {
        return Article::class;
    }

    /**
     * 获取文章列表
     * @return mixed
     * @author wuliang
     */
    public function getArticlesList ()
    {
        $articles = $this->model->where('status', 1)->orderBy('created_at','desc')->paginate(config('admin.globals.pageSize'));
        return $articles;
    }

    /**
     * 获取文章详情
     * @param $id
     *
     * @return mixed
     * @author wuliang
     */
    public function getArticleContentById ($id)
    {
        $article = $this->model->where('id',$id)->first()->toArray();
        return $article;
    }

    /**
     * 获取分类下的所有文章
     * @param $cid
     *
     * @return mixed
     * @author wuliang
     */
    public function getArticlesListByCateId($cid)
    {
        $articles = $this->model->where(['cate_id'=>$cid, 'status'=>1])
            ->orderBy('created_at', 'desc')->paginate(config('admin.globals.pageSize'));
        return $articles;
    }

    /**
     * 获取标签下的文章
     * @param $tagId
     *
     * @return string
     * @author wuliang
     */
    public function getArticlesListByTagId($tagId)
    {
        $articles = '';
        $articleIds = ArticleTag::where('tag_id', $tagId)->pluck('article_id');
        if ($articleIds) {
            $articles = $this->model->whereIn('id', $articleIds)->where('status', 1)
                ->orderBy('created_at', 'desc')->paginate(config('admin.globals.pageSize'));
        }

        return $articles;
    }
}
