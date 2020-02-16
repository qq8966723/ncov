@extends('layout')

@section('title', $title)

@section('css')
    @parent
@endsection

@section('main')
  <div class="main">
    <h3 class="text-center">社区管理员工作后台</h3>
    
    <div class="table-responsive">
      <table class="table">
        
        <tr>
          <td class="info"><h4>物资采购</h4></td>
          <td> <a class="btn btn-success" href="#" role="button">商品分类</a> </td>
          <td> <a class="btn btn-success" href="#" role="button">商品信息</a> </td>
          <td> <a class="btn btn-danger" href="#" role="button">订单统计</a> </td>
        </tr>
        <tr>
          <td class="info"><h4>信息登记</h4></td>
          <td> <a class="btn btn-danger" href="#" role="button">体温统计</a> </td>
          <td> <a class="btn btn-danger" href="#" role="button">外出统计</a> </td>
        </tr>
        <tr>
          <td class="info"><h4>社区摸排</h4></td>
          <td> <a class="btn btn-info" href="#" role="button">四类人员</a> </td>
          <td> <a class="btn btn-info" href="#" role="button">涉疫人员</a> </td>
        </tr>
      </table>
    </div>

  </div>
@endsection

@section('js')
    @parent
@endsection