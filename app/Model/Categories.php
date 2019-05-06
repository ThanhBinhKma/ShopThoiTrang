<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Categories extends Model
{
    protected $table ='categories';
    
    public function ParentCategories()
    {
        return $this->belongsTo('App\Model\ParentCategories','id_parent','id');
    }   


    public function products()
    {
    	return $this->hasMany('App\Model\Product','categories_id','id');
    }

    public function GetAllDataCategories()
    {
    	$data = [];
    	$query = Categories::all();

    	if($query){
    		$data = $query->toArray();
    	}
    	return $data;
    }

    // public function GetAllDataCategoriesById($id)
    // {
    //     $data = DB::table('categories')->where('parent_id','=',$id)->get()
    //     $data = Categories::where('parent_id',$id);
    //     return $data;
    // }

}
