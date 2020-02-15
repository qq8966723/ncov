<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuyController extends Controller
{
    // protected $model;
    // public function __construct(StatAdQuality $statAdQuality)
    // {
    //     parent::__construct(); //调用父类构造函数
    //     $this->statAdQuality = $statAdQuality;
    // }

    public function OrderInfo(Request $request)
    {
        $output = array(
            'url'          => $request->getPathInfo(),
            'title'        => '文峰宝坻小区',
            // 'offers'       => $this->statAdQuality->getAppPackages(),
            // 'media_source' => $this->statAdQuality->getMediaSource(),
            // 'ad_campaign'  => $this->statAdQuality->getAdCampaign(),
        );
        return view('buy', $output);
    }
}
