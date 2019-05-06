<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\ParentCategories;
use App\Model\Color;
use App\Model\Categories;
class HomeController extends Controller
{
    public function index(Product $pr,ParentCategories $parent)
    {   
    	$data = [];

    	/******* New **********/
    	$productNew = $pr->GetAllProductNew();

    	$arrNew = $productNew->toArray();
    	$data['productNew'] = $arrNew['data'];
    	foreach($data['productNew'] as $key =>$item){
    		$data['productNew'][$key]['url_image'] = json_decode($item['url_image'],true);
    	}
    	$data['linkNew'] = $productNew;

    	/********* Hot ************/

    	$productHot = $pr->GetAllProductHot();
    	$data['productHot'] = $productHot;
    	foreach($data['productHot'] as $key =>$item){
    		$data['productHot'][$key]['url_image'] = json_decode($item['url_image'],true);
    	}

    	/************* Parent Name Product **************/

    	return view('front-end.home.index',$data);
    }
    function __construct(ParentCategories $parent)
    {
        $nameParent = $parent->NameParent();
        view()->share('nameParent',$nameParent);
    }

    public function contact()
    {
        return view('front-end.home.contact');
    }
    public function introduce()
    {
        return view('front-end.home.introduce');
    }

    public function detail($id,Product $pd,Color $color)
    {
            $data = [];
            $info = $pd->GetAllDataProductsById($id);
           
            $data['info'] = $info;
            $arr = json_decode($info['color_id'],true);
            $data['infoSize'] = json_decode($info['size'],true);
            $data['infoImage'] = json_decode($info['url_image'],true);

            $color = $color->getAllDataColorById($arr);
            $data['color']=$color->toArray();
            // dd($color);
            // dd($idParent);

            $idParent = $info['categories_id'];

            $infoToo = $pd->GetAllDataByIdParent($idParent,$id);
            $data['infoToo'] = $infoToo;
            foreach($data['infoToo'] as $key =>$item){
                $data['infoToo'][$key]['url_image'] = json_decode($item['url_image']);
            }
            
        return view('front-end.home.detail',$data);
    }

    // public function product()
    // {
    //     return view('front-end.home.product');
    // }

    public function allProduct(Request $req,ParentCategories $parent)
    {
        $id = $req->id;
        // dd($id);
        $data['parent'] = $parent->GetAllDataCategoriesById($id)->toArray();
        $data['nameParent']= $parent->NameParentProduct($id)->toArray();
        // dd($nameParent);
        return view('front-end.home.product',$data);  
    }
}
