<?php
namespace App\Http\Controllers\Frontend;

use App\Repositories\Eloquent\Frontend\ArticleRepository;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    /**
     * @var \App\Repositories\Eloquent\Frontend\ArticleRepository
     */
    private $article;

    /**
     * TagController constructor.
     *
     * @param \App\Repositories\Eloquent\Frontend\ArticleRepository $articleRepository
     */
    public function __construct(ArticleRepository $articleRepository)
    {
        $this->article = $articleRepository;
    }

    /**
     * 标签下的文章列表
     * @param $tagId
     *
     * @return mixed
     * @author wuliang
     */
    public function show($tagId)
    {
        $articles = $this->article->getArticlesListByTagId($tagId);
        return view('frontend.list')->with(compact('articles'));
    }
}
