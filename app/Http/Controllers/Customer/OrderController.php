<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Repositories\OrderRepository;

class OrderController extends Controller
{
	private $orderRepository;

	public function __construct(OrderRepository $orderRepository)
	{
		$this->orderRepository = $orderRepository;
	}

    public function addOrder(OrderRequest $request)
    {
    	try {
            $this->orderRepository->addOrder($request);
        } catch (QueryException $e) {
            return response()->json(['status' => 'error'], 502);
        }
        return response()->json(['status' => 'success'], 200);
    }

    public function confirmOrder($id)
    {
    	try {
            $this->orderRepository->confirmOrder($id);
        } catch (QueryException $e) {
            return response()->json(['status' => 'error'], 502);
        }
        return response()->json(['status' => 'success'], 200);
    }
}
