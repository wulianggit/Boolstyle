<?php

namespace App;

use App\Models\ActionButton;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

/**
 * App\User
 *
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use EntrustUserTrait, ActionButton;

    protected $action;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','updated_at',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->action = 'user';
    }

    /**
     * 用户和角色多对多关系
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     * @author wuliang
     */
    public function role()
    {
        return $this->belongsToMany('App\Models\Role','role_user','user_id','role_id');
    }
}
