<?php

namespace App\Http\Controllers;

use App\Models\photos;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Product extends Controller
{
    public function add(Request $req){
        $data = $req->all();

        $feedback = new products;
        $feedback->nameProd = $data['name'];
        $feedback->kategory = $data['kategory'];
        $feedback->price = $data['price'];
        $feedback->description = $data['description'];
        $feedback->save();

        $list = DB::table('products')->orderBy('updated_at', 'desc')->take(1)->get();


        $images = [];
        if ($req->hasFile('images')) {
            foreach($req->file('images') as $key => $image){
                $images[] = $image->store('uploads','public');
            }
        }

            foreach ($images as $image) {
                $photo = new photos;
                $photo->objectId = $list[0]->id;
                $photo->srcPhoto = $image;
                $photo->save();
            }


    }
}
