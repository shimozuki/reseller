<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\AksesModel;
use Illuminate\Support\Facades\Session;

class SuplierController extends Controller
{
    public function index()
    {
        $data["title"] = "Suplier";
        $data["hakTambah"] = AksesModel::leftJoin('tbl_menu', 'tbl_menu.menu_id', '=', 'tbl_akses.menu_id')->where(array('tbl_akses.role_id' => Session::get('user')->role_id, 'tbl_menu.menu_judul' => 'Customer', 'tbl_akses.akses_type' => 'create'))->count();
        return view('Admin.Suplier.index', $data);
    }
}
