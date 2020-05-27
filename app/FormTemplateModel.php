<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormTemplateModel extends Model
{
    public $table = "form_template";

    public $fillable = [
        'form_template_id',
        'name'
    ];
    
    // public function form_fields()
    // {
    //     return $this->hasMany('App\FormFieldsModel');
    // }
    
}
