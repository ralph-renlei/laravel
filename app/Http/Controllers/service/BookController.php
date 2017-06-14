<?php

namespace App\Http\Controllers\service;

use App\Entity\Category;
use App\Models\M3Result;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function getCategoryByParentId($parent_id){
        $categorys = Category::where('parent_id',$parent_id)->get();
        $m3_result  = new M3Result();
        $m3_result->status = 0;
        $m3_result->message = '获取成功';
        $m3_result->category = $categorys;
        return $m3_result->toJson();
    }
}
