<?php
namespace App\Http\Controllers;
use App\Models\Business;
use App\Models\Journal;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Auth::user()->id;
        $userid=Business::where('user_id',$data)->get();
        return view('dashboard',compact('userid'));
        // return view('dashboard',compact('businesses'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Auth::user()->id;
       $userid=Business::where('user_id',$data)->get();
        // $userid=DB::table('businesses')->where('user_id',$data)->get();

        // $record = Business::all();


        // if (count($record) == 0) {

        //     return view('business.create');

        // } else {

        //     return redirect(route('dashboard'))->with('info','You have already created the business');

        // }

        // return view('business.create',compact('record'));
            return view('business.create',compact('userid'));
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
                'title' => 'required',
                'type' => 'required',
                'email' => 'required|email',
                'address' => 'required',
                'phone' => 'required',
            ]);
            $data = new Business;
            $data->user_id = Auth::user()->id;
            $data->title = $request->title;
            $data->type = $request->type;
            $data->email = $request->email;
            $data->address = $request->address;
            $data->phone = $request->phone;
            $data->save();
            return redirect(route('dashboard'))->with('success','Business Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $business = Business::find($id);
        return view('business.show',compact('business'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $business = Business::find($id);

        return view('business.edit',compact('business'));
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
            'title' => 'required',
            'type' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required',
        ]);

        $data = Business::find($id);
        $data->user_id = Auth::user()->id;
        $data->title = $request->title;
        $data->type = $request->type;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->save();

        return redirect(route('dashboard'))->with('info','Business Updated');
    }


    public function Transaction($id)
    {
        $business = Business::find($id);
        $journals = Journal::where('business_id',$id)->get();

        return view('journal.index',compact('business','journals'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $business = Business::where('id',$id);
        $journal =  Journal ::where('business_id',$id);
        $product = Product::where('business_id',$id);
        $journal->delete();
        $product->delete();
        $business->delete();
        return redirect(route('dashboard'))->with('danger','Business deleted');
    }
 }
