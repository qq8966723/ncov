<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    // protected $model;
    // public function __construct(StatAdQuality $statAdQuality)
    // {
    //     parent::__construct(); //调用父类构造函数
    //     $this->statAdQuality = $statAdQuality;
    // }

    public function GetPlotInfo($plot_id)
    {
        if (empty($plot_id)) {
            return null;
        }
        // $offers = DB::connection()->table('product_cash_credit')->select(['f_appid', 'f_product_name'])
        //     ->groupBy('f_product_name', 'f_appid')
        //     ->orderBy('f_product_name', 'ASC')
        //     ->where('f_appid', '<>', '0')
        //     ->get()
        //     ->toArray();
        $plotInfo = DB::connection()->table('product_cash_credit')->select(['f_appid', 'f_product_name'])->where('plot_id', '=', $plot_id)->first();
        if (empty($plotInfo)) {
            return null;
        }
        return $plotInfo->toArray();
    }

}
