<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    protected $params;

    // protected $model;
    // public function __construct(StatAdQuality $statAdQuality)
    // {
    //     parent::__construct(); //调用父类构造函数
    //     $this->statAdQuality = $statAdQuality;
    // }

    public function GetPlotInfo($plot_id)
    {
        if (empty($plot_id)) {
            return '网站链接错误';
        }
        // $offers = DB::connection()->table('product_cash_credit')->select(['f_appid', 'f_product_name'])
        //     ->groupBy('f_product_name', 'f_appid')
        //     ->orderBy('f_product_name', 'ASC')
        //     ->where('f_appid', '<>', '0')
        //     ->get()
        //     ->toArray();
        $plotInfo = DB::connection()->table('plot_info')->select(['plot_id', 'plot_name'])->where('plot_id', '=', $plot_id)->first();
        if (empty($plotInfo)) {
            return '社区信息丢失';
        }
        $this->params['plot_info']['plot_id'] = $plotInfo->plot_id;
        $this->params['plot_info']['plot_name'] = $plotInfo->plot_name;
        return false;
    }

    public function GetGoodsCate($plot_id)
    {
        if (empty($plot_id)) {
            return '网站链接错误';
        }
        $where = [
            ['plot_id', '=', $plot_id],
            ['is_sell', '=', 1],
        ];
        $rows = DB::connection()->table('goods_cate')->where($where)->get();
        if (empty($rows)) {
            return '商品分类为空';
        }
        foreach ($rows as $row) {
            $this->params['goods_cate'][$row->cate_id] = $row->cate_name;
        }
        return false;
    }

    public function GetGoodsInfo($plot_id)
    {
        if (empty($idplot_id)) {
            return '网站链接错误';
        }
        $where = [
            ['plot_id', '=', $plot_id],
            ['is_sell', '=', 1],
        ];
        $rows = DB::connection()->table('goods_info')->where($where)->get();
        if (empty($rows)) {
            return '商品信息为空';
        }
        foreach ($rows as $row) {
            $this->params['goods_info'][$row->cate_name][] = [
                'goods_id' => $row->goods_id,
                'goods_name' => $row->goods_name,
            ];
        }
        return false;
    }

}
