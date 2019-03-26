<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{




    public function create()
    {
        return view ("employees.create");
    }


}
