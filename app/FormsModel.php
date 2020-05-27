<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormsModel extends Model
{
    public $table = "forms";

    public $fillable = [
        'form_template_id',
        'form_id',
        'name',
    ];
}
