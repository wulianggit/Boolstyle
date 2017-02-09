<?php
namespace App\Http\Controllers\Frontend;

use App\Repositories\Eloquent\Frontend\ArticleRepository;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * @var \App\Repositories\Eloquent\Frontend\ArticleRepository
     */
    private $article;

    /**
     * CategoryController constructor.
     *
     * @param \App\Repositories\Eloquent\Frontend\ArticleRepository $articleRepository
     */
    public function __construct(ArticleRepository $articleRepository)
    {
        $this->article = $articleRepository;
    }

    /**
     * 获取分类下的文章
     * @param $cateId
     *
     * @return mixed
     * @author wuliang
     */
    public function show($cateId)
    {
        $articles = $this->article->getArticlesListByCateId($cateId);
        return view('frontend.list')->with(compact('articles'));
    }
}
