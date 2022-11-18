<?php

namespace App\Http\Controllers;

use App\Models\GamePlan;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        return view('signature');
    }

    public function upload(Request $request, $id)
    {
        $folderPath = public_path('upload/');
        $image_parts = explode(";base64,", $request->signed);
        if(!empty($image_parts)){
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $file =  uniqid() . '.' . $image_type;
            file_put_contents($file, $image_base64);
            $games = GamePlan::findOrFail($id);
            $games->image = $file;
            $games->save();
            session()->flash('success','Signatured successfully');
            return redirect(route('checkout', ['id' => $id]));
        }else{
            session()->flash('success','Signatured successfully');
            return redirect(route('signature', ['id' => $id]));
        }
       
    }
}
