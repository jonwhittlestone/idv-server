<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
     /**
     * @var string
     */
    protected $table = 'accounts';

    /**
     * @var array
     */
    protected $guarded = ['id'];

     /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
