<?php

namespace App\Http\Controllers\front;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use App\Models\Order_Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\CategoryStoreRequest;
use App\Http\Requests\Front\Checkout\CheckoutStoreRequest;
use App\Models\Orders;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index() {
        $allProductInCart = \Cart::getContent();
        return response()->json($allProductInCart);
        return view('front.pages.checkout',compact('allProductInCart'));
    }
    public function store(CheckoutStoreRequest $request){
        // dd($request->all());
        $data =  $request->except('fname','lname');
        $data['name'] = "$request->fname $request->lname";

        $data['user_id'] = Auth::user()->id;
        $data['total'] = $this->getTotal();
        $data['payment_status'] = 0;
        $data['order_date'] = date('Y-m-d');
        if($data['payment_method'] == 'cash'){
            $data['payment_status'] = 1;
        }
                // dd($data);

        $data = Orders::create($data);
       
        $this->getAllItems($data->id);
        
        return redirect()->route('checkout.done');

        
    }
    public function getTotal() {
        return \Cart::getTotal();
    }
    public function getAllItems($order_id){

        foreach(\Cart::getContent() as $item){
            Order_Product::create([
                "product_id" => $item->id,
                "order_id" => $order_id,
                "qty" =>$item->quantity,
            ]);
        }

        \Cart::clear();
    }
    public function done(){
        return view('front.pages.checkoutdone');
    }
}
