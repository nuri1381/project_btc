<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ofertas;
class CalamotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //recupera las ofertas con paginacion
       $ofertas=Ofertas::orderBy('id','DESC')->paginate(5);
       // recuperamos las ofertas de la base de dato
       $total=Ofertas::count();
       //retorna la vista con las Ofertas 
       return view('calamot/CalamotController',['ofertas'=>$ofertas,'total'=>$total]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //carga la vista con el formulario 
        return view('calamot/addOfertas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validacion de datos 
        $request->validate([
            'title'=>'requerid|max:32',
            'requeriments'=>'requerid|max:32',
            'description'=>'requerid|max:32',
            'tipocontrato'=>'requerid|max:32',
            'status'=>'requerid|max:32',
            'contract_type'=>'requerid|max:32',
            'worday'=>'requerid|max:32',
           
        ]);
        Ofertas::create($request->all());//guardado en la base de dato
        //redirige a la lista de ofertas
        return redirect('ofertas')->with('success','Oferta añadida satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //recupera la oferta si falla, se gener aun error 404
        $oferta=Ofertas::findOrFail($id);
        return view ('ofertas/ofertasDetails',['oferta'=>$oferta]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        //recupera la oferta si falla, se gener aun error 404
        $oferta=Ofertas::findOrFail($id);
        return view ('ofertas/ofertasUpDate',['oferta'=>$oferta]);
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
        //
        //validacion de datos
        $request->validate([
            'title'=>'requerid|max:32',
            'requeriments'=>'requerid|max:32',
            'description'=>'requerid|max:32',
            'tipocontrato'=>'requerid|max:32',
            'status'=>'requerid|max:32',
            'contract_type'=>'requerid|max:32',
            'worday'=>'requerid|max:32',
            
        ]);
        Ofertas::findOrFail($id)->update($request->all());//guardado en la base de dato
        //carga la misma vista con mensaje de exito
        return back()->with('success','Oferta actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     */
    public function confirmDelete($id)
    {
        //recupera la oferta a eliminar
        Ofertas::findOrFail($id);
        //muestra la vist ade confirmacion de eliminacion
        return view ('ofertas/ofertasDeleteBike',['oferta'=>$oferta]);
        
    }
    public function destroy($id)
    {
        //
        Ofertas::findOrFail($id)->delete();
        return redirect('ofertas')->with('success','oferta eliminada');
    }
}
