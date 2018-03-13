<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slide;
use App\sanpham;
use App\loaisp;
use App\User;

class ShopHoaController extends Controller
{
	public function getTrangDangNhap()
	{
		return view('admin.login');
	}


	public function getTrangDangKi()
	{
		return view('TrangDangKi');
	}


	public function checkDangNhap(Request $req)
	{
		if ($req = "admin@gmail.com" && $req = "123456")
            return view('admin.index');
	}


	public function getDsUSER()
	{
		return view('admin.user');
	}


	public function getThemUser()
	{
		return view('admin.them_user');
	}


	public function postThemUser(Request $req)
	{
		$User = new User;
		$User->name = $req->input('txtUser');
		$User->pass = $req->input('txtPass');
		$User->email = $req->input('txtEmail');
		$User->token = 'test';

		$User->save();
		return 'Them Thanh Cong';

	}

	public function getXoaUser($id)
	{
		$User = User::find($id);
		$User->delete();

		return 'Xoa thanh cong';
	}

	public function postSuaUser(Request $req)
	{
		$User= User::find(1);
        
        $User->name = $req->txtUser;
		$User->pass = $req->txtPass;
		$User->email = $req->txtEmail;
		$User->token = 'random';

        $User->save();
        return 'Sua Thanh Cong';
	}

	public function getTrangSuaUser()
	{
		return view('admin.edit_user');
	}
}