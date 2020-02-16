<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends BaseController
{
    public function MgrLogin(Request $request, $plot_id)
    {
        $plotInfo = $this->GetPlotInfo($plot_id);
        if ($plotInfo != false) {
            return redirect('/error')->with('msg', $plotInfo);
        }
        $output = array(
            'url'          => $request->getPathInfo(),
            'title'        => $this->params['plot_info']['plot_name'],
            'plot'         => $this->params['plot_info']['plot_id'],
        );
        return view('login', $output);
    }

    public function LoginSubmit(Request $request, $plot_id)
    {
        $user_password = $request->input('user_password');
        if (empty($user_password)) {
            return redirect('/error')->with('msg', '密码不能为空');
        }
        $where = [
            ['plot_id', '=', $plot_id],
            ['user_password', '=', $user_password],
            ['is_on', '=', 1],
        ];
        $row = DB::connection()->table('user_info')->where($where)->first();
        if (empty($row)) {
            return redirect('/error')->with('msg', '登录信息错误');
        }
        $request->session()->put('user_id', $row->user_id);
        return redirect('/admin/'.$plot_id.'/fun-list');
    }

    public function FunList(Request $request, $plot_id)
    {
        if ($request->session()->has('user_id')) {
            $plotInfo = $this->GetPlotInfo($plot_id);
            if ($plotInfo != false) {
                return redirect('/error')->with('msg', $plotInfo);
            }
            $output = array(
                'url'          => $request->getPathInfo(),
                'title'        => $this->params['plot_info']['plot_name'],
                'plot'         => $this->params['plot_info']['plot_id'],
            );
            return view('admin', $output);
        }
        return redirect('/error')->with('msg', '会话超时请登录');
    }
}
