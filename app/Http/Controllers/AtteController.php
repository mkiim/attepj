<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\returnSelf;

class AtteController extends Controller
{
    public function date(Request $request)
    {
        $items = DB::table('log')->get(['email','password']);
        return view('date',['items' => $items]);
    }
    public function index(Request $request)
    {
        return view('login');
    }
    public function post(Request $request)
    {
        $validate_rule = [
            'email' => 'required|email',
            'password' => 'required|max:8'
        ];
        $guest = $request->content;
        $item = [
            'guest' =>$guest.'さんお疲れ様です！'];
        $this->validate($request,$validate_rule);
        return view('stamp');
    }
    public function confirm()
    {
        return view ('confirm');
    }
    public function process()
    {

    }
    public function complete()
    {
        return view('stamp');
    }
    public function move()
    {
    return view('register');
}
}
