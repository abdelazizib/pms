<?php

namespace App\Http\Controllers\front;
use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        $total_price_cart = \Cart::getTotal();
        // dd($cartItems);
        // return response()->json($cartItems);
        return view('Front.pages.cart.index', compact('cartItems','total_price_cart'));
    }


    public function addToCart(Request $request)
    {

        $id_decrypted = Crypt::decryptString($request->id);
        $findProduct = Product::findOrFail($id_decrypted);
        \Cart::add([
            'id' => $id_decrypted,
            'product_id' => $findProduct->id,
            'name' => $findProduct->name,
            'description' => $findProduct->description,
            'price' => $findProduct->price,
            'quantity' => 1,
            'attributes' => array(
                'image' => $findProduct->image,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');
        // \Cart::clear();
        // $cartItems = \Cart::getContent();
        return response()->json(['message'=>'Product Added',"added"=>"true"]);
    }

    public function updateCart(Request $request)
    {
        $id_decrypted = Crypt::decryptString($request->id);
        \Cart::update(
            $id_decrypted,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );
        $cartItems = \Cart::getContent();
        $cartTotal = \Cart::getTotal();
        session()->flash('success', 'Item Cart is Updated Successfully !');

        return  response()->json([
            'message'=>'Item Cart is Updated Successfully',
            "updated"=>"true",
            'cart'=>$cartItems,
            'total'=>$cartTotal
        ]);
    }

    public function removeCart(Request $request)
    {
        $id_decrypted = Crypt::decryptString($request->id);
        \Cart::remove($id_decrypted);
        session()->flash('success', 'Item Cart Remove Successfully !');
        $cartItems = \Cart::getContent();
        $cartTotal = \Cart::getTotal();

        return response()->json(['message'=>'Item Cart Remove Successfully !',
        'success'=>true,
        'cart'=>$cartItems,
        'total'=>$cartTotal
    
    ]);
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }
}
