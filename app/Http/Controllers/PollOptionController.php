<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\PollOption;
use App\Poll;

class PollOptionController extends Controller
{
    public function index($code)
    {
        $poll_options = DB::table('poll_options')->where('code', $code)->get();
        $view = view('poll_option.index');
        $view->poll_options = $poll_options;
        return $view;
    }

    public function create($code)
    {
        $poll_options = DB::table('poll_options')->where('code', $code)->get();
        $view = view('poll_option.create');
        $view->poll_options = $poll_options;
        $view->code = $code;
        return $view;
    }

    public function store(Request $request, $code)
    {
        $this->validate($request, [
            'option_text' => 'required|string',
        ]);
        

        $poll_option = new PollOption();
        $poll_option->fill([
            'code' => $code,
            'option_text' => $request->input('option_text'),
        ]);

        $poll_option->save();
        //$poll->categories()->sync($request->categories);

  // return redirect()->action('PollOptionController@index', ['code' => $poll->code]);   
    }
    public function display($code)
    {
        $poll = Poll::where('code', $code)->first();
        $view = view('poll_option.display');
        $view->poll = $poll;
        return $view;
        
    }

}

