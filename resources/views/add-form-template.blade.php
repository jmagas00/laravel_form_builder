@extends('layouts.app')

@section('content')
<div>
  <form method="POST" action="{{ route('add-template.store') }}">
    @csrf
    <h2>add fields</h2>
    <div>
      <form-group>
        <label>field 1</label>
        <select name="type[]" id="type"required="required">
          <option value="" disabled='disabled' selected>-- Please Select Type --</option>
          <option value="text">text</option>
          <option value="email">email</option>
          <option value="number">number</option>
        </select>
        <input name="field_name[]" id="field_name" required="required" placeholder="field name">
      </form-group>
    </div>
    <div>
      <form-group>
        <label>field 2</label>
        <select name="type[]" id="type" required="required">
          <option value="" disabled='disabled' selected>-- Please Select Type --</option>
          <option value="text">text</option>
          <option value="email">email</option>
          <option value="number">number</option>
        </select>
        <input name="field_name[]" id="field_name" required="required" placeholder="field name">
      </form-group>
    </div>
    <div>
      <form-group>
        <label>field 3</label>
        <select name="type[]" id="type" required="required">
          <option value="" disabled='disabled' selected>-- Please Select Type --</option>
          <option value="text">text</option>
          <option value="email">email</option>
          <option value="number">number</option>
        </select>
        <input name="field_name[]" id="field_name" required="required" placeholder="field name">
      </form-group>
    </div>
    <div>
      <form-group>
        <label>field 4</label>
        <select name="type[]" id="type" required="required">
          <option value="" disabled='disabled' selected>-- Please Select Type --</option>
          <option value="text">text</option>
          <option value="email">email</option>
          <option value="number">number</option>
        </select>
        <input name="field_name[]" id="field_name" required="required" placeholder="field name">
      </form-group>
    </div>
    <div>
      <form-group>
        <label>field 5</label>
        <select name="type[]" id="type" required="required">
          <option value="" disabled='disabled' selected>-- Please Select Type --</option>
          <option value="text">text</option>
          <option value="email">email</option>
          <option value="number">number</option>
        </select>
        <input name="field_name[]" id="field_name" required="required" placeholder="field name">
      </form-group>
    </div>
    <div>
      <input type="submit" value="Add Form Template">
    </div>
  </form>
</div>
@endsection