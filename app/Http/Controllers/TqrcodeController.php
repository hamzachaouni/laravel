<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tqrcode;
use Illuminate\Http\UploadedFile;

class TqrcodeController extends Controller
{
    public function index() {
    	$tqrcode = Tqrcode::all();
    	return view('tqrcode.index',['tqrcodes' => $tqrcode]);
    }

    public function create() {
    	return view('tqrcode.create');
    }

    public function store(Request $request) {
    	$tqrcode = new Tqrcode();
    	$tqrcode->title = $request->input('title');
    	$tqrcode->description = $request->input('description');
        $tqrcode->shorttitle = $request->input('shorttitle');
        $tqrcode->text = $request->input('text');
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

    public function edit($id) {
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
    }

    
}
