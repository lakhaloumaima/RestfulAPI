<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Validator;
use App\Http\Resources\Product as ProductResource;
use App\Http\Controllers\API\BaseController ;

class ProductController extends BaseController
{
    public function index()
    {
        $products = Product::all();
        return $this->sendResponse(ProductResource::collection($products),
          'All products sent');
    }
    

}
