<?php

namespace Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Equipe extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'img', 'nome', 'cargo', 'facebook', 'email', 'skype'
    ];

}
