<?php

namespace App\Repositories\Eloquent\Admin;


use App\Models\Role;
use App\Repositories\Eloquent\Repository;

class RoleRepository extends Repository
{
    public function model()
    {
        return Role::class;
    }

    /**
     * 获取角色列表
     * @return array
     * @author wuliang
     */
    public function ajaxGetRoleList ()
    {
        // datatable 请求页数
        $draw = request('draw', 1);

        // 分页开始条数
        $start = request('start', config('admin.globals.page.start'));

        // 每页显示条数
        $length = request('length', config('admin.globals.page.limit'));

        // 搜索框中的搜索值
        $keyWords = request('search.value', '');

        // 是否启用模糊搜索
        $regex = request('search.regex', false);

        // 排序字段
        $sortField = request('columns.'.request('order.0.column', 0).'.name');

        // 排序方式
        $sortType = request('order.0.dir', 'ASC');

        $roles = $this->model;

        if ($keyWords) {
            if ($regex != 'false') {
                $roles = $roles->where('name', 'like', '%' . $keyWords . '%')
                    ->orWhere('display_name', 'like', '%' . $keyWords . '%');
            } else {
                $roles = $roles->where('name', $keyWords)
                    ->orWhere('display_name', $keyWords);
            }
        }

        // 总数
        $total = $roles->count();

        $roles = $roles->orderBy($sortField, $sortType);
        $roles = $roles->offset($start)->limit($length)->get();

        foreach ($roles as &$role) {
            $role['actionButton'] = $role->getActionButton(false);
        }

        return [
            'draw'  => $draw,
            'count' => $total,
            'total' => $total,
            'data'  => $roles->toArray(),
        ];
    }

    /**
     * 创建角色
     * @param $request
     *
     * @return bool
     * @author wuliang
     */
    public function store ($request)
    {
        $role = new Role();
        if ($role->fill($request->all())->save())
        {
            if ($request->permission) {
                $role->permission()->sync($request->permission);
            }
            return true;
        } else {
            return false;
        }
    }

    /**
     * 获取所有角色
     * @return mixed
     * @author wuliang
     */
    public function getRoles ()
    {
        return $this->model->get();
    }

    /**
     * 查看用户权限
     * @param $id
     *
     * @return mixed
     * @author wuliang
     */
    public function show($id)
    {
        return $this->model->select('id')->with('permission')->find($id)->toArray();
    }
}
