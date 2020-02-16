<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{URL::asset('admin/assets/images/favicon.ico')}}" rel="icon">
    <title>黄冈防疫-@yield('title')</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.min.css')}}" />
    <style type="text/css">
        .main{
            min-height: 20em;
        }
    </style>
    @yield('css')

    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container-fluid">
        <!-- 头部 -->
        @include('header')
        <!-- 主体部分 -->
        @yield('main')
        <!-- 底部 -->
        @include('footer')
    </div>

    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <script src="{{URL::asset('bootstrap/js/bootstrap.min.js')}}"></script>
    @yield('js')

</body>
</html>