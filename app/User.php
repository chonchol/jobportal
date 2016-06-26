<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
//use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table ="users";
    protected $fillable = [
        'userName', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



 /*
    |--------------------------------------------------------------------------
    | ACL Methods
    |--------------------------------------------------------------------------
    */

    /**
     * Checks a Permission
     *
     * @param  String permission Slug of a permission (i.e: manage_user)
     * @return Boolean true if has permission, otherwise false
     */
    /*
    public function hasRole($permission = null)
    {
        return !is_null($permission) && $this->checkPermission($permission);
    }


    /**
     * Check if the permission matches with any permission user has
     *
     * @param  String permission slug of a permission
     * @return Boolean true if permission exists, otherwise false
     */
    /*
    protected function checkPermission($perm)
    {
        $permissions = $this->getAllPernissionsFormAllRoles();
        
        $permissionArray = is_array($perm) ? $perm : [$perm];

        return count(array_intersect($permissions, $permissionArray));
    }

    /**
     * Get all permission slugs from all permissions of all roles
     *
     * @return Array of permission slugs
     */

/*
    protected function getAllPernissionsFormAllRoles()
    {
        $permissionsArray = [];

        $permissions = $this->roles->load('permissions')->fetch('permissions')->toArray();
        
        return array_map('strtolower', array_unique(array_flatten(array_map(function ($permission) {

            return array_fetch($permission, 'role_id');

        }, $permissions))));
    }

    /*
    |--------------------------------------------------------------------------
    | Relationship Methods
    |--------------------------------------------------------------------------
    */
   
    /**
     * Many-To-Many Relationship Method for accessing the User->roles
     *
     * @return QueryBuilder Object
     */
/*
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function profiles()
    {
        return $this->belongsTo(\App\User::class);
    }
*/




}
