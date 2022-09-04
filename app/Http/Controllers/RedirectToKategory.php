<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\View;

class RedirectToKategory extends Controller
{
    function kategory($kategory){
        $products = DB::table('photos')
            ->join('products', 'photos.objectId', '=', 'products.id')
            ->get()
            ->unique('objectId');


        $productsFeedback = DB::table('products')
            ->join('feedbacks', 'products.id', '=', 'feedbacks.objectId')
            ->get();


        switch ($kategory){
            case 'all' :
                $products = $products->toArray();
                break;
            case 'reshetka':
                $products = $products->where('kategory', 'reshetka')->toArray();
                $productsFeedback = $productsFeedback->where('kategory', 'reshetka');
                break;
            case 'balcon':
                $products = $products->where('kategory', 'balcon')->toArray();
                $productsFeedback = $productsFeedback->where('kategory', 'balcon');
                break;
            case 'lestnica':
                $products = $products->where('kategory', 'lestnica')->toArray();
                $productsFeedback = $productsFeedback->where('kategory', 'lestnica');
                break;
            case 'dveri':
                $products = $products->where('kategory', 'dveri')->toArray();
                $productsFeedback = $productsFeedback->where('kategory', 'dveri');
                break;
            case 'vorota':
                $products = $products->where('kategory', 'vorota')->toArray();
                $productsFeedback = $productsFeedback->where('kategory', 'vorota');
                break;
            case 'naves':
                $products = $products->where('kategory', 'naves')->toArray();
                $productsFeedback = $productsFeedback->where('kategory', 'naves');
                break;
            case 'zabor':
                $products = $products->where('kategory', 'zabor')->toArray();
                $productsFeedback = $productsFeedback->where('kategory', 'zabor');
                break;
            default: return redirect(route('home'));

        }

        switch ($kategory){
            case 'reshetka':
                $kat = 'Решетки на окна';
                break;
            case 'balcon':
                $kat = 'Балконы';
                break;
            case 'lestnica':
                $kat = 'Лестницы';
                break;
            case 'dveri':
                $kat = 'Двери';
                break;
            case 'vorota':
                $kat = 'Ворота';
                break;
            case 'naves':
                $kat = 'Навесы';
                break;
            case 'zabor' :
                $kat = 'Заборы';
                break;
            case 'all' :
                $kat = 'Все товары';
                break;
            default: return redirect(route('home'));

        }




        return View::make('kategory', compact('products', 'kat','productsFeedback', 'kategory'));
    }


    function moreAboutProduct($kategory, $id){


        switch ($kategory){
            case 'reshetka':
                $kat = 'Решетки на окна';
                break;
            case 'balcon':
                $kat = 'Балконы';
                break;
            case 'lestnica':
                $kat = 'Лестницы';
                break;
            case 'dveri':
                $kat = 'Двери';
                break;
            case 'vorota':
                $kat = 'Ворота';
                break;
            case 'naves':
                $kat = 'Навесы';
                break;
            case 'zabor' :
                $kat = 'Заборы';
                break;
            case 'all' :
                $kat = 'Все товары';
                break;
            default: return redirect(route('home'));

        }



        $products = DB::table('photos')
            ->join('products', 'products.id', '=', 'photos.objectId')
            ->get()
            ->where('id', $id)
            ->unique('objctId')
            ->toArray();


        foreach ($products as $prod){
            $photos = DB::table('photos')->get()->where('objectId', $prod->objectId)->toArray();
            break;
        }

        $photosMain = [];
        $i = 0;
        foreach ($photos as $photo){
            $photosMain[$i]['id'] = $photo->id;
            $photosMain[$i]['src'] = '/storage/' .$photo->srcPhoto;
            $photosMain[$i]['thumbnail'] = '/storage/' .$photo->srcPhoto;
            $i++;
        }






        return View::make('more', compact('products', 'photosMain', 'kat'));

    }
}
