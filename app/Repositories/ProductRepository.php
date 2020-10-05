<?php

namespace App\Repositories;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use App\Models\Tag;
use Hash;

class ProductRepository 
{
	private $product;

	private $productCategory;

	private $tag;

	private $productImage;

	public function __construct( Product $product,
								 ProductCategory $productCategory,
								 Tag $tag,
								 ProductImage $productImage)
	{
		$this->product = $product;
		$this->productCategory = $productCategory;
		$this->tag = $tag;
		$this->productImage = $productImage;
	}
	
	public function addProduct($request)
	{
        $data = json_decode($request->getContent(), true);
        $this->product->name = $data['name'];
        $this->product->description = $data['description'];
        $this->product->price = $data['price'];
        $this->product->product_category_id = $data['product_category_id'];
        $this->product->save();
        if($data['images']){
        	foreach($image as $data['images']){
        		$path = $request->file($image)->store('product_images');
        		$this->productImage->path = $path;
        		$this->productImage->product_id = $this->product->id;
        		$this->productImage->save();
        	}
        }
	}

	public function updateProduct($id, $request)
	{
		$data = json_decode($request->getContent(), true);
		$product = $this->product::find($id);
		$product->name = $data['name'];
        $product->description = $data['description'];
        $product->price = $data['price'];
        $product->product_category_id = $data['product_category_id'];
        $product->save();
	}

	public function addProductCategory($request)
	{
		$data = json_decode($request->getContent(), true);
        $this->productCategory->name = $data['name'];
        $this->productCategory->save();
	}
	
	public function updateProductCategory($id, $request)
	{
		$productCategory = $this->productCategory::find($id);
		$productCategory->name = $data['name'];
		$productCategory->save();
	}

	public function addTags($request)
	{
		$data = json_decode($request->getContent(), true);
        $this->tag->name = $data['name'];
        $this->tag->save();
	}

	public function deleteTags($id)
	{
		$this->tag::delete($id);
	}
}
