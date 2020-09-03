<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use App\User;
use Auth;
use Hash;

class GeneralController extends Controller
{
    public function changePass_view (Request $request, $id)
    {
        $user = User::find($id);
        return view('backend.password.change', compact(['user']));
    }

    public function changePass (Request $request, $id)
    {
    	$oldpass = $request->password_lama;
        $pass = $request->password_baru;
        $passRepeat = $request->ulangi_password;

        $this->validate($request, [
        	'password_lama' => ['required', new MatchOldPassword],
            'password_baru' => 'required|string|min:6',
            'ulangi_password' => 'required|string|min:6',
        ]);

	        if ($pass == $passRepeat){
	            $user = User::find($id);
	            $user->password = Hash::make($passRepeat);
	            $user->save();

	            $status = 200;
	            $message = "Password Berhasil Diganti ! Silahkan Login Untuk Melanjutkan !";

	            // $this->guard()->logout();
		        $request->session()->invalidate();
		        $request->session()->regenerateToken();
		        if ($response = $this->loggedOut($request)) {
		            return $response;
		        }

		        return $request->wantsJson()
		            ? new Response('', 204)
		            : redirect('/login');

	        } else {
	            $status = 500;
	            $message = "Password yang Anda Masukan Tidak Sama !";
	            return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
	        }
    }

    protected function loggedOut(Request $request)
    {
        //
    }
}
