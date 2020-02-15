@extends('layout')

@section('title', $title)

@section('css')
    @parent
@endsection

@section('main')
    
    <p class="text-danger">{{ $msg }}</p>

@endsection

@section('js')
    @parent
@endsection