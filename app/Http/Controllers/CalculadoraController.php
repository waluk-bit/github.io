<?php

namespace App\Http\Controllers;

use App\Calculadora;
use Illuminate\Http\Request;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;
use Redirect;

class CalculadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $resultado=0;

        if  ($request->op == '+'){
            $resultado = $request->n1 + $request->n2;
            $dato= new Calculadora;
            $dato->n1=$request->n1; 
            $dato->op=$request->op; 
            $dato->n2=$request->n2; 
            $dato->save();
            return view('calculadora',['resultado'=> $resultado]);
        }   else if ($request->op == '-'){
            $resultado = $request->n1 - $request->n2;
            $dato= new Calculadora;
            $dato->n1=$request->n1; 
            $dato->op=$request->op; 
            $dato->n2=$request->n2; 
            $dato->save();
            return view('calculadora',['resultado'=> $resultado]);
        }else if ($request->op == '*'){
            $resultado = $request->n1 * $request->n2;
            $dato= new Calculadora;
            $dato->n1=$request->n1; 
            $dato->op=$request->op; 
            $dato->n2=$request->n2; 
            $dato->save();
            return view('calculadora',['resultado'=> $resultado]);
        } else if($request->op == '/'){
            $resultado = $request->n1 / $request->n2;
            $dato= new Calculadora;
            $dato->n1=$request->n1; 
            $dato->op=$request->op; 
            $dato->n2=$request->n2; 
            $dato->save();
            return view('calculadora',['resultado'=> $resultado]);
        }

        return view('calculadora',['resultado'=> $resultado]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
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
        //
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
     
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
