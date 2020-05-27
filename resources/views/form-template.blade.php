@extends('layouts.app')

@section('content')
<div>
  <form method="POST" action="{{ route('add-form.store') }}">
    @csrf
    <h2>FORM</h2>
    @foreach($form_template as $form)
    <div>
      <form-group>
        <div>
          <label>{{$form->field_name}}</label>
          <input type='hidden' name="form_template_id[]" value="{{$form->form_template_id}}">
          <input type='hidden' name="field_name[]" value="{{$form->field_name}}">
        </div>
        <div>
          <input name="value[]" id="{{$form->field_name}}" type="{{$form->type}}" required="required" placeholder="{{$form->field_name}}">
        </div>
      </form-group>
    </div>
    @endforeach
    <div>
      <input type="submit" value="Submit Form">
    </div>
  </form>
</div>
@endsection