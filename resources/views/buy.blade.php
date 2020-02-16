@extends('layout')

@section('title', $title)

@section('css')
    @parent
@endsection

@section('main')
    <h3 class="text-center">日用蔬果采购登记</h3>
  
    <div class="table-responsive">
      <table class="table table-bordered">
        <tr>
          <td class="danger"><h4>配送信息</h4></td>
          <td class="warning" colspan="4">
            <input type="number" class="form-control" name="user_mobile" placeholder="手机号码">
          </td>
        </tr>
        
        <tr>
          <td class="warning">
            <input type="number" class="form-control" id="addr_build" placeholder="栋">
          </td>
          <td class="warning" colspan="2">
            <input type="number" class="form-control" id="addr_unit" placeholder="单元">
          </td>
          <td class="warning" colspan="2">
            <input type="number" class="form-control" id="addr_room" placeholder="房号">
          </td>
        </tr>

        <tr>
          <td class="danger"><h4>采购物品</h4></td>
          <td class="danger" colspan="3"><h4>牌子</h4></td>
          <td class="danger"><h4>数量</h4></td>
        </tr>
        
        @foreach ($goods as $key => $value)
          <tr>
            <td class="active" rowspan="{{count($value)}}">{{$key}}</td>

            @foreach ($value as $good)
              <td class="success" colspan="3">{{$good['goods_name']}}</td>
              <td class="warning">
                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="数量">
              </td>
            </td>
            @endforeach
          </tr>
        @endforeach

        <tr>
          <td class="active" colspan="5">
            <button type="button" class="btn btn-primary btn-lg btn-block">提交</button>
          </td>
        </tr>
      </table>
    </div>

@endsection

@section('js')
    @parent
@endsection