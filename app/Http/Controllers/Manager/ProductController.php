<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductCategoryRequest;
use App\Http\Requests\TagsRequest;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function addProduct(ProductRequest $request)
    {
        try {
            $this->productRepository->addProduct($request);
        } catch (QueryException $e) {
            return response()->json(['status' => 'error'], 502);
        }
        return response()->json(['status' => 'success'], 200);
    }

    public function updateProduct($id, $request)
    {
        try {
            $this->productRepository->updateProduct($id, $request);
        } catch (QueryException $e) {
            return response()->json(['status' => 'error'], 502);
        }
        return response()->json(['status' => 'success'], 200);	
    }

    public function addProductCategory(ProductCategoryRequest $request)
    {
    	try {
            $this->productRepository->addProductCategory($request);
        } catch (QueryException $e) {
            return response()->json(['status' => 'error'], 502);
        }
        return response()->json(['status' => 'success'], 200);
    }

    public function updateProductCategory($id, $request)
    {   
    	try {
            $this->productRepository->updateProductCategory($id, $request);
        } catch (QueryException $e) {
            return response()->json(['status' => 'error'], 502);
        }
        return response()->json(['status' => 'success'], 200);
    }

    public function addTags(TagsRequest $request)
    {
    	try {
            $this->productRepository->addTags($request);
        } catch (QueryException $e) {
            return response()->json(['status' => 'error'], 502);
        }
        return response()->json(['status' => 'success'], 200);
    }

    public function deleteTags($id)
    {
    	try {
            $this->productRepository->deleteTags($id);
        } catch (QueryException $e) {
            return response()->json(['status' => 'error'], 502);
        }
        return response()->json(['status' => 'success'], 200);
    }
}
