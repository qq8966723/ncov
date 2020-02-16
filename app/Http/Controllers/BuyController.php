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
            'goods'        => $this->params['goods_info'],
            // 'media_source' => $this->statAdQuality->getMediaSource(),
            // 'ad_campaign'  => $this->statAdQuality->getAdCampaign(),
        );
        return view('buy', $output);
    }

    public function OrderSubmit(Request $request, $plot_id)
    {
        // $id     = $request->input('id');
        // $input  = $request->except(['id']);
        // $input     = $request->input();
        $plotInfo = $this->GetPlotInfo($plot_id);
        if ($plotInfo != false) {
            return redirect('/error')->with('msg', $plotInfo);
        }
        $goodsCate = $this->GetGoodsCate($plot_id);
        if ($plotInfo != false) {
            return redirect('/error')->with('msg', $plotInfo);
        }
        var_dump($this->params);
    }
}
