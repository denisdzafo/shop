<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
	private $productRepository;

	public function __construct(ProductRepository $productRepository)
	{
		$this->productRepository = $productRepository;
	}

    public function getProducts()
    {
        try {
            $data = $this->productRepository->getProducts();
        } catch (QueryException $e) {
            return response()->json(['status' => 'error'], 502);
        }
        return response()->json(['data' => $data], 200);
    }
}
