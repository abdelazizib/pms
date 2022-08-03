<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Product\ProductStoreRequest;
use App\Http\Requests\Dashboard\Product\ProductUpdateRequest;
use App\Http\Traits\Upload;
use App\Http\Traits\DeleteFile;
use GuzzleHttp\Handler\Proxy;

class ProductsController extends Controller
{
    use Upload;
    use DeleteFile;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('products')->get();
        $products = Product::paginate(6);
        return view('dashboard.pages.products.index',compact('categories','products'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.pages.products.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
        // dd($request);
        $request_data = $request->all();
        $request_data['slug'] = Str::slug($request_data['name']) ; 
        $request_data['image'] = $this->uploadImage($request_data, 'default.jpg', Product::Product_PATH );

        Product::create($request_data);

        return redirect()->route('products.show',$request_data['slug'])->with(['SuccessToast'=>['Success Added Product']]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('slug', $id)->first();
        return view('dashboard.pages.products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('dashboard.pages.products.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdateRequest $request, $id)
    {
        $request_data = $request->all();
        $product = Product::findOrFail($id);
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        if($request->hasFile('image')){
            if(!is_null($product->image)){
                $this->removeImage(Product::Product_PATH.$product->image);
            }
            $request_data['image'] = $this->uploadImage($request_data, 'default.jpg', Product::Product_PATH );
            $product->image = $request_data['image'];
        }
        $product->save();
        return back()->with(['SuccessToast'=>['Success Update Category']]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(['success'=>true]);
    }
    public function search(Request $request){
        $products = Product::query();
        $categories = Category::all();

        if ($request->text) {
            $products->where('name', 'Like', '%' . $request->text . '%');
        }
        $products = $products->orderBy('id', 'DESC')->paginate(10);

        return view('dashboard.pages.products.index',compact('products','categories'));

    }



}
