<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TagRequest;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\Admin\TagRepository;

/**
 * Class TagController
 *
 * @package App\Http\Controllers\Admin
 */
class TagController extends Controller
{
    /**
     * @var
     */
    private $model;

    /**
     * TagController constructor.
     *
     * @param TagRepository $tagRepository
     */
    public function __construct(TagRepository $tagRepository)
    {
        $this->model = $tagRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tagList = $this->model->getTagList();
        return view('admin.tag.list')->with(compact('tagList'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\TagRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
        $result = $this->model->create($request->all());

        if ($result) {
            flash(trans('alert.tag.create_success'), 'success');
        } else {
            false(trans('alert.tag.create_error'), 'error')->important();
        }

        return redirect('admin/tag');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = $this->model->editTag($id);
        return response()->json($tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\TagRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update(TagRequest $request)
    {
        $result = $this->model->updateTag($request);

        if ($result) {
            flash(trans('alert.tag.update_success'), 'success');
        } else {
            flash('alert.tag.update_error', 'error')->important();
        }

        return redirect('admin/tag');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->model->destroyTag($id);

        if ($result) {
            flash(trans('alert.tag.delete_success'), 'success');
        } else {
            flash(trans('alert.tag.delete_error'), 'error')->important();
        }

        return redirect('admin/tag');
    }
}
