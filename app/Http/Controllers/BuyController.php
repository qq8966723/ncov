<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuyController extends BaseController
{
    public function OrderInfo(Request $request, $plot_id)
    {
        $plotInfo = $this->GetPlotInfo($plot_id);
        if ($plotInfo != false) {
            return redirect('/error')->with('msg', $plotInfo);
        }
        $goodsInfo = $this->GetGoodsInfo($plot_id);;
        if ($goodsInfo != false) {
            return redirect('/error')->with('msg', $goodsInfo);
        }
        $output = array(
            'url'          => $request->getPathInfo(),
            'title'        => $this->params['plot_info']['plot_name'],
            'plot'         => $this->params['plot_info']['plot_id'],
            'goods'        => $this->params['goods_info'],
        );
        return view('buy', $output);
    }

    public function OrderSubmit(Request $request, $plot_id)
    {
        // $id     = $request->input('id');
        // $input  = $request->except(['id']);
        $input     = $request->input();
        // var_dump($input);
        $order_info = array(
            'plot_id' => $plot_id, 
            'addr_build' => empty($input['addr_build'])?null:$input['addr_build'],
            'addr_unit' => empty($input['addr_unit'])?null:$input['addr_unit'],
            'addr_room' => empty($input['addr_room'])?null:$input['addr_room'],
            'user_mobile' => empty($input['user_mobile'])?null:$input['user_mobile'],
            'push_time' => time(),
            'cdate' => date('Y-m-d'),
        );
        $order_info['order_no'] = md5(json_encode($order_info));

        $rows = array();
        foreach ($input as $key => $value) {
            if (empty($value) || $value < 1) {
                continue;
            }
            if (strpos($key, 'goods_id') !== false) {
                $row = $order_info;
                $goods_arr = explode("#", $key);
                $row['goods_id'] = trim($goods_arr[1]);
                $row['goods_num'] = $value;
                $rows[] = $row;
            }
        }
        if (empty($rows)) {
            return redirect('/error')->with('msg', '采购物品为空');
        }
        DB::connection()->table('order_info')->insert($rows);
        return redirect('/error')->with('msg', '提交成功，请先付款并保持手机畅通');
        // $plotInfo = $this->GetPlotInfo($plot_id);
        // if ($plotInfo != false) {
        //     return redirect('/error')->with('msg', $plotInfo);
        // }
        // $goodsCate = $this->GetGoodsCate($plot_id);
        // if ($plotInfo != false) {
        //     return redirect('/error')->with('msg', $plotInfo);
        // }
        // var_dump($input);
    }
}
