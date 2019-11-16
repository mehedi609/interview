<?php

namespace Bulkly\Http\Controllers;

use Bulkly\BufferPosting;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');


    }

    public  function index(){


       $data = BufferPosting::query()->paginate(10);
//       dd($data);

        return view('post',compact('data'));
    }
}
