<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormModel extends Model
{
    public $table = "form";

    public $fillable = [
        'form_id',
        'field_name',
        'value'
    ];
}
