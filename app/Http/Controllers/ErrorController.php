<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class ErrorController extends BaseController
{
    public function ShowMessge(Request $request)
    {
        $output = array(
            'url'   => $request->getPathInfo(),
            'title' => '发生错误',
            'msg'   => $request->session()->get('msg');
            // 'offers'       => $this->statAdQuality->getAppPackages(),
            // 'media_source' => $this->statAdQuality->getMediaSource(),
            // 'ad_campaign'  => $this->statAdQuality->getAdCampaign(),
        );
        return view('error', $output);
    }
}
