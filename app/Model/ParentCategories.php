<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class ParentCategories extends Model
{
    protected $table ='parentcategories';

    public function categories()
    {
    	return $this->hasMany('App\Model\Categories','id_parent','id');
    }

    /************ Product ***********/

    public function product()
    {
    	return $this->hasManyThrough('App\Model\Product', 'App\Model\Categories','id_parent','categories_id','id');
    }

    public function NameParent()
    {
        $info = ParentCategories::all();
        return $info;
    }
    public function NameParentProduct($id)
    {
        $info = ParentCategories::select('name_parent_categories')->where('id',$id)->first();
        return $info;
    }
    public function GetAllDataCategoriesById($id)
    {
        $data = ParentCategories::find($id)->product;
        return $data;
    }

}
