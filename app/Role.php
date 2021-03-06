<?php
/**
 * Author: wtySk
 * Date: 2017/2/4 16:55
 */

namespace App;

use Zizaco\Entrust\Entrust;

class Role extends Entrust
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'display_name', 'description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
}