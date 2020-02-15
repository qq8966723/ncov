<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuyController extends BaseController
{
    public function OrderInfo(Request $request, $plot_id)
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

    public function OrderSubmit(Request $request, $plot_id)
    {
        // $id     = $request->input('id');
        // $input  = $request->except(['id']);
        // $input     = $request->input();
        $plotInfo = $this->GetPlotInfo($plot_id);
        if ($plotInfo == false) {
            return $plotInfo;
        }
        var_dump($this->params);
    }
}
