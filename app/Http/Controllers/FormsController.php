<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\FormModel;
use App\FormsModel;

class FormsController extends Controller
{
    public function store(Request $request)
    {
        $form_template_id = $request->input('form_template_id');

        $form = FormsModel::create([
            'form_template_id' => $form_template_id[0],
            'name' => 'Form',
        ]);

        $form->save();

        $names = $request->input('field_name');
        $value = $request->input('value');

        foreach ($names as $index => $name) {

            $forms = FormModel::create([
                'form_id' => $form->id,
                'field_name' => $name,
                'value' => $value[$index],
            ]);
            $forms->save();
        }

        return view('welcome');
    }

    public function get_forms()
    {
        $forms = FormsModel::get();

        // dd($forms);

        return View('/forms')->with('forms', $forms);
    }

    public function get_form($value)
    {

        $form = FormModel::Where('form_id', '=', $value)->get();

        // dd($form);

        return View('/form')->with('form', $form);
    }
}
