<?php

namespace App\Models;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    use ActionButton;

    protected $action;

    protected $fillable = ['name', 'display_name', 'description'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->action = 'role';
    }

    /**
     * 将角色字段转换为小写
     * @param $name
     *
     * @author wuliang
     */
    public function setNameAttribute ($name)
    {
        $this->attributes['name'] = strtolower($name);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     * @author wuliang
     */
    public function permission()
    {
        return $this->belongsToMany('App\Models\Permission','permission_role','role_id','permission_id');
    }
}
