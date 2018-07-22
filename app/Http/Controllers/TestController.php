<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
    
    public function indexall() {

        $categories = Test::all();
    
        return view('test.indexall',['tqrcodes' => $categories]);
   
    }


	public function indexid($id) {

    	$categories = Test::find($id);
    
        return view('test.indexid',['tqrcodes' => $categories]);
   
    }

    public function index() {

    	$categories = Test::where('id', 5)->get();
    
        return view('test.index',['tqrcodes' => $categories]);
   
    }

    public function create() {
    	return view('test.create');
    }

    public function store(Request $request) {
    	$tqrcode = new Test();
    	$tqrcode->title = $request->input('title');
    	$tqrcode->description = $request->input('description');
        $tqrcode->structure = $request->input('structure');

    

    	$tqrcode->save();

    	return redirect('type-qrcode');

    }

    /*public function edit($id) {
    	$tqrcode = Tqrcode::find($id);
    	return view('tqrcode.edit',['tqrcode' => $tqrcode]);
    }

    public function update($id, Request $request) {
    	$tqrcode = Tqrcode::find($id);
    	$tqrcode->title = $request->input('title');
    	$tqrcode->description = $request->input('description');
        $tqrcode->shorttitle = $request->input('shorttitle');
    	$tqrcode->recomended = $request->input('recomended');
    	$tqrcode->promotion = $request->input('promotion');
    	$tqrcode->social = $request->input('social');
    	$tqrcode->product = $request->input('product');
    	$tqrcode->business = $request->input('business');
    	$tqrcode->personal = $request->input('personal');

    	if($request->hasFile('photo')) {
    		$tqrcode->photo = $request->photo->store('image');
    	}
    	

    	$tqrcode->save();

    	return redirect('admin/type-qrcode');
    }

    public function destory($id, Request $request) {
        $tqrcode = Tqrcode::find($id);
        $tqrcode->delete();

        return redirect('admin/type-qrcode');
    }*/

}
