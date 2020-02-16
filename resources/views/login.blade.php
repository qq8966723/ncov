@extends('layout')

@section('title', $title)

@section('css')
    @parent
@endsection

@section('main')
  <div class="main">
    <h3 class="text-center">社区管理员登录</h3>
    <form method="post" action="{{url('/admin/'.$plot.'/login-submit')}}">
      @csrf
      <div class="form-group">
        <input type="text" class="form-control" name="user_password" placeholder="管理员密码">
      </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">登录</button>
    </form>
  </div>
@endsection

@section('js')
    @parent
@endsection