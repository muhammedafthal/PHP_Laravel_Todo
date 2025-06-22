<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    # When ever we do mass-assignment. Then we should do this line of process in the model.
    # This keyword is using for which are the values should mass-assignmented.
        //protected $fillable = ['title'];

    # This keyword we are using for not to do mass-assignment.
        //protected $guarded = ["title"];

    # By doing this way we can do mass-assignment to all value in the model.
    protected $guarded = [];
}
