<?php
namespace App\Http\Controllers\Frontend;

use App\Repositories\Eloquent\Frontend\ArticleRepository;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Visitor;

class ArticleController extends Controller
{
    /**
     * @var \App\Repositories\Eloquent\Frontend\ArticleRepository
     */
    private $article;

    /**
     * ArticleController constructor.
     *
     * @param \App\Repositories\Eloquent\Frontend\ArticleRepository $articleRepository
     */
    public function __construct(ArticleRepository $articleRepository)
    {
        $this->article = $articleRepository;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     * @author wuliang
     */
    public function show($id)
    {
        // 记录文章浏览记录
        Visitor::log($id);
        $article = $this->article->getArticleContentById($id);
        return view('frontend.detail')->with(compact('article'));
    }
}
