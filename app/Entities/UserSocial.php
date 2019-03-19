<?php

namespace investimento;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class UserSocial extends Model implements Transformable
{
    //
    use TransformableTrait;

    public $timestamps = true;
    protected $table = 'user_socials';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'social_network', 'social_id', 'social_email', 'social_avatar'];
    protected $hidder = [];
}
