@extends('layout')
@section('content')
@foreach($users as $user)
<p>{{ $user->id }}</p>
@endforeach
@stop
