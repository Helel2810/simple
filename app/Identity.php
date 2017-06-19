<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Model;

class Identity extends EloquentModel
{
    protected $connection = 'mongodb';

}
