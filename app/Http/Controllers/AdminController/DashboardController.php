<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\authrequest;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        $template = 'AdminView.SubPage.Indexs';
        return view('AdminView.Dashboard', compact(
            'template'
        ));
    }
}
