@extends('layouts.app')

@section('content')
   
@if($forms->count() > 0)
    <h2>FORMS</h2>
    @foreach($forms as $form)

    <li><a href="{{URL::to('/form/'. $form->id)}}">{{ $form->name }}</a> | <span>{{ $form->created_at}}</span></li>

    @endforeach
@else
    <h2>NO FORMS...</h2>
@endif

@endsection