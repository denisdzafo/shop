<?php

namespace App\Repositories;

use App\Models\Order;
use Hash;

class OrderRepository 
{
	private $order;

	public function __construct(Order $order)
	{
		$this->order = $order;
	}
	
	public function addOrder($request)
	{
        $data = json_decode($request->getContent(), true);
        $this->order->total = $data['total'];
        $this->order->user_id = $data['user_id'];
        //dd($data['products']);               
        $this->order->save();
        $this->order->products()->attach($data['products']);
	}

	public function confirmOrder($id)
	{
		$order = $this->order::find($id);
		$order->confirmed = true;
		$order->save();
	}
}
