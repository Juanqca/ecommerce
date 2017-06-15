<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provideer;

class ProvideerController extends Controller
{
    //
    public function index()
    {
    	$provideers = Provideer::orderBy('id', 'DESC')->paginate();
    	return view ('provideers.index', compact('provideers'));
    }
}
