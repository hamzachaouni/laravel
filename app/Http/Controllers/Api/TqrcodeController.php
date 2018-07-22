<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tqrcode;
use App\Category;
use App\Test;
use App\Http\Resources\TqrcodeRessource;

class TqrcodeController extends Controller
{

    public function indexall($limit=null) {
        if($limit) {
            return Test::take($limit)->get();
        }
        return Test::all(); 
        return Test::where('promotion', 'promotion')->get();  
    }

    public function type_qrcode_cate($limit=null) {
        /*$categories = Category::where('id', 2)->get();
    
    return view('tqrcode.cat',['tqrcodes' => $categories]);*/ 
       return Category::where('id', $limit)->get();

    }
    

    public function type_qrcode_promotion($limit=null) {
    	if($limit) {
    		return TqrcodeRessource::collection(Tqrcode::take($limit)->get());
    	}
    	return TqrcodeRessource::collection(Tqrcode::where('promotion', 'promotion')->get());	
    }

    public function type_qrcode_recomended($limit=null) {
    	if($limit) {
    		return TqrcodeRessource::collection(Tqrcode::take($limit)->get());
    	}
    	return TqrcodeRessource::collection(Tqrcode::where('recomended', 'recomended')->get());	
    }

    public function type_qrcode_all() {
    	
    	return TqrcodeRessource::collection(Tqrcode::all()); 	
    }

    public function postQuote(Request $request)
    {
        $tqrcode = new Tqrcode();
        $tqrcode->title = $request->input('title');
        $tqrcode->description = $request->input('description');
        $tqrcode->shorttitle = $request->input('shorttitle');
        $tqrcode->text = $request->input('text');
        $tqrcode->social = $request->input('social');

        /*if ($request->hasFile('photo')) {
            $file = $request->photo;
            $tqrcode = $request->photo->store('images');
        } */

        

        $tqrcode->save();
        return response()->json(['tqrcode' => $tqrcode], 201);
        //return $tqrcode;
    }

    public function putQuote(Request $request, $id)
    {
        $tqrcode = Tqrcode::find($id);
        if(!$tqrcode) {
            return response()->json(['message' => 'Document not found'], 404);
        }
        $tqrcode->title = $request->input('title');
        $tqrcode->description = $request->input('description');
        $tqrcode->shorttitle = $request->input('shorttitle');
        $tqrcode->text = $request->input('text');
        $tqrcode->social = $request->input('social');
        
        $tqrcode->save();
        return response()->json(['tqrcode' => $tqrcode], 200);
    }

    public function deleteQuote($id)
    {
        $tqrcode = Tqrcode::find($id);
        $tqrcode->delete();
        return response()->json(['message' => 'Quote deleted'], 200);
    }
    /*
    public function type_qrcode_all($limit=null) {
        if($limit) {
            return TqrcodeRessource::collection(Tqrcode::take($limit)->get());
        }
        return TqrcodeRessource::collection(Tqrcode::all());    
    }*/

    public function type_qrcode_social($limit=null) {
    	if($limit) {
    		return TqrcodeRessource::collection(Tqrcode::take($limit)->get());
    	}
    	return TqrcodeRessource::collection(Tqrcode::where('social', 'social')->get());	
    }

    public function type_qrcode_product($limit=null) {
    	if($limit) {
    		return TqrcodeRessource::collection(Tqrcode::take($limit)->get());
    	}
    	return TqrcodeRessource::collection(Tqrcode::where('product', 'product')->get());	
    }

    public function type_qrcode_business($limit=null) {
    	if($limit) {
    		return TqrcodeRessource::collection(Tqrcode::take($limit)->get());
    	}
    	return TqrcodeRessource::collection(Tqrcode::where('business', 'business')->get());	
    }

    public function type_qrcode_personal($limit=null) {
    	if($limit) {
    		return TqrcodeRessource::collection(Tqrcode::take($limit)->get());
    	}
    	return TqrcodeRessource::collection(Tqrcode::where('personal', 'personal')->get());	
    }



    
}
