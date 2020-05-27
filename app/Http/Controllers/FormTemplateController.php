<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormTemplateModel;
use App\FormFieldsModel;

class FormTemplateController extends Controller
{

    public function create()
    {
    }

    public function store(Request $request)
    {
        $formTemplate = FormTemplateModel::create(
            ['name' => 'Form Template']
        );

        $formTemplate->save();

        $names = $request->input('field_name');
        $type = $request->input('type');

        foreach ($names as $index => $name) {

            $formFields = FormFieldsModel::create([
                'form_template_id' => $formTemplate->id,
                'field_name' => $name,
                'type' => $type[$index],
            ]);
            $formFields->save();
        }

        return view('welcome');
    }

    public function get_form_templates()
    {
        $form_templates = FormTemplateModel::get(); 

        // dd($form_templates);

        return View('/form-templates')->with('form_templates', $form_templates);
    }

    public function get_form_template($value)
    {
        $form_template = FormFieldsModel::Where('form_template_id', '=', $value)->get();

        //dd($form_template);

        return View('/form-template')->with('form_template', $form_template);
    }
}
