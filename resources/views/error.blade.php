@extends('layout')

@section('title', $title)

@section('css')
    @parent
@endsection

@section('main')
  <div class="main">
    <p class="text-center">{{ $msg }}</p>
  </div>
@endsection

@section('js')
    @parent
@endsection