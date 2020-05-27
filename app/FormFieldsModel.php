<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormFieldsModel extends Model
{
    public $table = "form_fields";
    public $fillable = [
        'form_template_id',
        'type', 
        'field_name'
    ];
    
    // public function form_template()
    // {
    //     return $this->belongsTo('App\FormTemplateModel', 'form_template_id');
    // }
}
