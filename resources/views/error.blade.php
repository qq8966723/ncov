@extends('layout')

@section('title', $title)

@section('css')
    @parent
@endsection

@section('main')
	
    <p class="text-center">{{ $msg }}</p>

@endsection

@section('js')
    @parent
@endsection