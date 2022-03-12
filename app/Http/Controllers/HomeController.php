<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['imageUpload']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function imageUpload(Request $request)
    {
        // print_r($request->all());die;

        $file = $request->avtar;


        $fileName   = time() . '_' . $file->getClientOriginalName();
        $distType = env('STORAGE_DISK_TYPE', 'public');


        \Storage::disk($distType)->put('avatar/' . $fileName, \File::get($file));


        print_r('avatar/' . $fileName);die;
        $filePath   = 'storage/'.$path . $fileName;



        return view('home');
    }
}
