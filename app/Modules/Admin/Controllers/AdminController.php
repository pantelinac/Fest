<?php

namespace App\Modules\Admin\Controllers;



use App\Visitor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Festival;
use Image;
use Storage;
use Carbon\Carbon;
use Session;




class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fests =Festival::paginate(10);
        return view("Admin::index",['fests'=>$fests]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $this->validate($request, array(
//            'name'         => 'required|max:150',
//            'state'        => 'required|max:80',
//            'city'         => 'required|max:80',
//            'address'      => 'required|max:150',
//            'info'         => 'required',
//            'start_event'  => 'required',
//            'end_event'    => 'required',
//            'featured_image'=> 'required|image',
//
//        ));


        $fest =new Festival;


        $fest->name= $request->name;
        $fest->state= $request->state;
        $fest->city= $request->city;
        $fest->address= $request->address;
        $fest->info= $request->info;

        $fest->start_event=$request->start_event;
        $fest->end_event=$request->end_event;



        if($request->hasFile('featured_image')){
            $image = $request->file('featured_image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('image/'.$filename);
            Image::make($image) -> resize(800, 400)
                -> save($location);

            $fest->image = $filename;
        }

        $fest->save();

        return redirect()->route('Admin.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fest = Festival::find($id);
        return view('Admin::show',['fest'=>$fest]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fest =Festival::find($id);

        return view('Admin::edit')->withFest($fest);
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
        $fest = Festival::find($id);

        $fest->name= $request->input('name');
        $fest->state= $request->input('state');
        $fest->city= $request->input('city');
        $fest->address= $request->input('address');
        $fest->info= $request->input('info');

        $fest->start_event=$request->start_event;
        $fest->end_event=$request->end_event;



        if($request->hasFile('featured_image')){
            //Add the new image insted of old ones
            $image = $request->file('featured_image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('image/'.$filename);
            Image::make($image) -> resize(800, 400)
                -> save($location);

            $oldFilename = $fest->image;

            //Update the database
            $fest->image = $filename;

            //Delete old image
            Storage::delete($oldFilename);
        }

        $fest->save();

        return redirect()->route('Admin.show', $fest->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fest = Festival::find($id);
        Storage::delete($fest->image);
        $fest->delete();

        return redirect()->route('Admin.index');
    }

    public function list($id)
    {
        $vis = Visitor::where('festival_id', '=', $id)->get();
        return view('Admin::list',['vis'=>$vis]);
    }
}
