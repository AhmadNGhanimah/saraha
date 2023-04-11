<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['SendMessage','index','SentMessage','ChangeLang']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {
        return view('first');
    }
    public function home()
    {
        $messages = Message::where('user_id', Auth::user()->id)->orderBy('created_at','desc')->get();
        return view('home', ['messages' => $messages]);
    }

    public function favourite($MessageID)
    {
        $Message = Message::findOrfail($MessageID);
        if ($Message->user_id != Auth::user()->id)
            return redirect()->back()->with(['error' => 'Your not authorized for this message']);

        if ($Message->favourite)
            $Message->favourite = null;
        else
            $Message->favourite = Carbon::now();

        $Message->save();

        return redirect()->back()->with(['status' => 'Done']);
    }

    public function SendMessage($UserID)
    {
        $User = User::where('random', $UserID)->first();
        if (!$User)
             abort(404);

        return view('user', ['user' => $User]);
    }

    public function SentMessage(Request $request,$UserID)
    {
        $User = User::where('random', $UserID)->first();
        if (!$User)
            return redirect()->route('SendMessageView',$UserID)->with(['status' => 'Not Found']);

        $Message=new Message();
        $Message->user_id=$User->id;
        $Message->message=$request->message;
        $Message->save();
        return redirect()->route('SendMessageView',$UserID)->with(['status' => 'Done']);
    }

    public function ChangeLang($Lang)
    {

        if ($Lang == 'ar') //Arabic
            Cookie::queue(Cookie::make('lang', 'ar', 60 * 60 * 24 * 20));

        else   //English
            Cookie::queue(Cookie::make('lang', 'en', 60 * 60 * 24 * 20));

        return redirect()->back();
    }
}
