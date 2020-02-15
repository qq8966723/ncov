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
            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="手机号码">
          </td>
        </tr>
        
        <tr>
          <td class="warning">
            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="栋">
          </td>
          <td class="warning" colspan="2">
            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="单元">
          </td>
          <td class="warning" colspan="2">
            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="房号">
          </td>
        </tr>

        <tr>
          <td class="danger"><h4>采购物品</h4></td>
          <td class="danger" colspan="3"><h4>牌子</h4></td>
          <td class="danger"><h4>数量</h4></td>
        </tr>
      
        <tr>
          <td class="active">蔬菜套餐</td>
          <td class="success" colspan="3">
              <select class="form-control">
                <option>不需要</option>
                <option>40元蔬菜</option>
                <option>60元蔬菜</option>
                <option>100元蔬菜</option>
              </select>
          </td>
          <td class="warning">
            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="数量">
          </td>
        </tr>

        <tr>
          <td class="active">米</td>
          <td class="success" colspan="3">
              <select class="form-control">
                <option>不需要</option>
                <option>20斤新盛思苗米(49.9元/袋)</option>
              </select>
          </td>
          <td class="warning">
            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="数量">
          </td>
        </tr>

        <tr>
          <td class="active">油</td>
          <td class="success" colspan="3">
              <select class="form-control">
                <option>不需要</option>
                <option>5升金龙鱼调和油(49.9元/壶)</option>
                <option>5升黄商玉米油(72.9元/壶)</option>
                <option>5升黄商葵花籽油(69.9元/壶)</option>
                <option>5升黄商菜籽油(59.9元/壶)</option>
              </select>
          </td>
          <td class="warning">
            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="数量">
          </td>
        </tr>

        <tr>
          <td class="active">面粉</td>
          <td class="success" colspan="3">
              <select class="form-control">
                <option>不需要</option>
                <option>10斤黄商面粉(28.5元/袋)</option>
              </select>
          </td>
          <td class="warning">
            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="数量">
          </td>
        </tr>

        <tr>
          <td class="active">纸巾</td>
          <td class="success" colspan="3">
              <select class="form-control">
                <option>不需要</option>
                <option>维达2000提纸(30.9元/提)</option>
                <option>维达纸(26.9元/提)</option>
                <option>维达抽纸(22.9元/提)</option>
              </select>
          </td>
          <td class="warning">
            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="数量">
          </td>
        </tr>

        <tr>
          <td class="active">豆腐套餐</td>
          <td class="success" colspan="3">
              <select class="form-control">
                <option>不需要</option>
                <option>30元豆制品</option>
              </select>
          </td>
          <td class="warning">
            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="数量">
          </td>
        </tr>

        <tr>
          <td class="active" colspan="5">
            <button type="button" class="btn btn-primary btn-lg btn-block">提交</button>
          </td>
        </tr>
      </table>
    </div>
    
    <p class="text-center"><a href="login.html">社区管理员入口</a></p>

@endsection

@section('js')
    @parent
@endsection