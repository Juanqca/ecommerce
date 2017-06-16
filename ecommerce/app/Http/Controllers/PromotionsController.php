<?php

namespace App\Http\Controllers;
use App\PromotionsTypes;
use Illuminate\Http\Request;


class PromotionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $promotions = PromotionsTypes::all();
        return view("promotions.listado", ["promotions" => $promotions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $promotions = new PromotionsTypes;
        return view("promotions.create",["promotions"=>$promotions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $promotions = new PromotionsTypes;

        $promotions->name =$request->name;
        $promotions->description =$request->description;
        $promotions->fechainicio =$request->fechainicio;
        $promotions->fechafinal =$request->fechafinal;
        $rules=array(
            'name'=>'required',
            'description'=>'required',
            'fechainicio'=>'required',
            'fechafinal'=>'required',
        );
        $this->validate($request,$rules);
        if($promotions->save()){
            return redirect("/promotions");
        }else{
            //return view("products.edit");
            return view ("promotions.create",["promotions"=>$promotions]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $promotions = PromotionsTypes::find($id);

        return view("promotions.edit",["promotions"=>$promotions]);

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

        $promotions = PromotionsTypes::find($id);
        $promotions->name =$request->name;
        $promotions->description =$request->description;
        $promotions->fechainicio =$request->fechainicio;
        $promotions->fechafinal =$request->fechafinal;
        $rules=array(
            'name'=>'required',
            'description'=>'required',
            'fechainicio'=>'required',
            'fechafinal'=>'required',
        );
        $this->validate($request,$rules);
        if($promotions->save()){
            return redirect("/promotions");
        }else{
            //return view("products.edit");
            return view ("promotions.create",["promotions"=>$promotions]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        PromotionsTypes::destroy($id);
        return redirect ('/promotions');
    }
}
