<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sqrcode;
use App\Http\Resources\SqrcodeRessource;

class SqrcodeController extends Controller
{
    public function setting_qrcode_all() {

    	return SqrcodeRessource::collection(Sqrcode::all());
    }

    public function setting_qrcode(Request $request) {
    	$sqrcode = new Sqrcode();
    	$sqrcode->title = $request->input('title');
    	$sqrcode->shorttitle = $request->input('shorttitle');
    	$sqrcode->description = $request->input('description');
    	$sqrcode->shortdescription = $request->input('shortdescription');
    	$sqrcode->inputs = $request->input('inputs');
    	$sqrcode->image = $request->input('image');
    	$sqrcode->recomended = $request->input('recomended');
    	$sqrcode->promotion = $request->input('promotion');
    	$sqrcode->social = $request->input('social');
    	$sqrcode->product = $request->input('product');
    	$sqrcode->business = $request->input('business');
    	$sqrcode->personal = $request->input('personal');

        if($request->hasFile('image')) {
            $tqrcode->photo = $request->photo->store('image');
        }

    	$sqrcode->save();
        return response()->json(['sqrcode' => $sqrcode], 201);
    }

    public function setting_qrcode_edit(Request $request, $id) {
    	$sqrcode = Sqrcode::find($id);
    	if(!$sqrcode) {
            return response()->json(['message' => 'Document not found'], 404);
        }
    	$sqrcode->title = $request->input('title');
    	$sqrcode->shorttitle = $request->input('shorttitle');
    	$sqrcode->description = $request->input('description');
    	$sqrcode->shortdescription = $request->input('shortdescription');
    	$sqrcode->inputs = $request->input('inputs');
    	$sqrcode->image = $request->input('image');
    	$sqrcode->recomended = $request->input('recomended');
    	$sqrcode->promotion = $request->input('promotion');
    	$sqrcode->social = $request->input('social');
    	$sqrcode->product = $request->input('product');
    	$sqrcode->business = $request->input('business');
    	$sqrcode->personal = $request->input('personal');

        if($request->hasFile('image')) {
            $tqrcode->photo = $request->photo->store('image');
        }

    	$sqrcode->save();
        return response()->json(['message' => 'Quote deleted'], 200);
    }

    public function setting_qrcode_delete($id) {
    	$sqrcode = Sqrcode::find($id);
        $sqrcode->delete();
        return response()->json(['message' => 'Quote deleted'], 200);
    }

    public function setting_qrcode_one($id) {
        return new SqrcodeRessource(Sqrcode::find($id));
    }
}
