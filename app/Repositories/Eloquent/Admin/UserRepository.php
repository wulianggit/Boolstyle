<?php
namespace App\Repositories\Eloquent\Admin;

use App\User;
use App\Repositories\Eloquent\Repository;

/**
 * Class UserRepository
 * @package App\Repositories\Eloquent
 */
class UserRepository extends Repository
{
    /**
     * 返回用户 Model 模型的名称
     * @return mixed
     * @author wuliang
     */
    public function model ()
    {
        return User::class;
    }

    /**
     * 用户列表
     * @return array
     * @author wuliang
     */
    public function ajaxGetUserList()
    {
        $total = $this->model->count();
        $users = $this->model->get();

        foreach ($users as &$user) {
            $user['actionButton'] = $user->getActionButton();
        }

        return [
            'total' =>$total,
            'count' => $total,
            'data'  =>$users->toArray()
        ];
    }

    /**
     * 创建新用户
     * @param $request
     *
     * @return bool
     * @author wuliang
     */
    public function store($request)
    {
        $user = new User();
        $request['password'] = bcrypt($request['password']);

        if ($user->fill($request)->save()) {
            // 更新用户角色关系
            if (isset($request['role']) && $request['role']) {
                $user->role()->sync($request['role']);
            }
            return true;
        }

        return false;
    }
}
