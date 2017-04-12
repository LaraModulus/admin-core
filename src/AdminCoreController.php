<?php
namespace Escapeboy\AdminCore;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminCoreController extends Controller
{

    public function index()
    {
        if(!auth()->check() && !auth()->viaRemember()) return redirect()->route('admin.login');
        return view('admincore::index');
    }

    public function getLogin(){
    	return view('admincore::login');
    }

    public function postLogin(Request $request){
    	if (auth()->attempt(['email' => $request->get('email'), 'password' => $request->get('password')], $request->has('remember')))
        {
            return redirect()->intended('admin');
        }

        return redirect()->route('admin.login')->withInput(['email' => $request->get('email')]);
    }

    public function logout(){
        auth()->logout();

        return redirect()->route('admin.login');
    }

}