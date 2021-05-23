<?php
namespace App\Http\Controllers;
use App\Models\Business;
use App\Models\Journal;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Auth::user()->id;
        $products=Product::where('business_id',$data)->get();
        return view('product.index',compact('products'));
        //   $products = Product::all();
        // return view('product.index',compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Auth::user()->id;
        $businesses=Business::where('user_id',$data)->get();
        return view('product.create',compact('businesses'));
        // $businesses = Business::all();
        // return view('product.create',compact('businesses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $this->validate($request,[
                'title'         => 'required|min:3',
                'type'        => 'required|min:3',
                'code'        => 'required|alpha_num|min:3',
                'price'        => 'required|numeric|min:1',
                'percentage' =>'required|numeric|min:1',
                'business' => 'required',
            ]);

            $data = new Product;
            $record = new Journal;
            $data->business_id = $request->business;
            $data->title = $request->title;
            $data->type = $request->type;
            $data->code = $request->code;
            $data->price = $request->price;
            $data->percentage=$request->percentage;
            $data->save();
            $record->credit = $request->price;
            $record->productName = $request->title;
            $record->business_id = $request->business;
            $record->save();

            return redirect(route('product.index'))->with('success','Product Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'         => 'required|min:3',
            'type'        => 'required|min:3',
            'code'        => 'required|alpha_num|min:3',
            'price'        => 'required|numeric|min:1',
        ]);

        $data = Product::find($id);
        $data->title = $request->title;
        $data->type = $request->type;
        $data->code = $request->code;
        $data->price = $request->price;
        $data->save();

        return redirect(route('product.index'))->with('info','Product updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function buy( $id)
    {
        $product = Product::find($id);
        $record = new Journal;
        $record->productName =$product->title;
        $record->debit =((100+$product->percentage)* $product->price)/100;
        $record->business_id = $product->business->id;
        $record->save();
        return redirect(route('product.index'))->with('success','Product Bought');
    }
    public function destroy($id)
    {
        //
    }
}
