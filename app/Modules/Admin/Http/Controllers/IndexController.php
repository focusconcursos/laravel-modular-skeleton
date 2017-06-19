<?php

namespace App\Modules\Admin\Http\Controllers;

use App\Core\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin::index');
    }
}