@extends('layouts.app')

@section('content')

@if($form_templates->count() > 0)
    <h2>FORM TEMPLATES</h2>
    @foreach($form_templates as $form)

    <li><a href="{{URL::to('/form-template/'. $form->id)}}">{{ $form->name }}</a> | <span>{{ $form->created_at}}</span></li>

    @endforeach
@else
    <h2>NO FORM TEMPLATES...</h2>
@endif

@endsection