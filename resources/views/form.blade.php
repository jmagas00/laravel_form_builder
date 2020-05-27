@extends('layouts.app')

@section('content')

<div>
    <h2>FORM</h2>
    @foreach($form as $key)
    <div>
        <form-group>
            <div>
                <label>{{$key->field_name}}</label>
            </div>
            <div>
                <input name="{{$key->field_name}}" id="{{$key->field_name}}" value="{{$key->value}}">
            </div>
        </form-group>
    </div>
    @endforeach

</div>

@endsection