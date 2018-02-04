<?php
namespace App\condominio\controllers;

use App\Servicio;
use App\Usuario;

class Servicios
{
    function __construct()
    {
        Role('condominio');
    }

    public function index()
    {
        $user = User();
        $condominio_id = Usuario::find($user['id'])->condominio->id;
        $servicios = Servicio::where('condominios_id',$condominio_id)->get();
        View(compact('servicios'));
    }

    public function create()
    {
        View();
    }

    public function store()
    {
        //Arr($_POST);
        extract($_POST);    
        $user = User();
        $condominio_id = Usuario::find($user['id'])->condominio->id;
        
        //ingresando servicio
        $servicio = new Servicio;
        $servicio->condominios_id = $condominio_id;
        $servicio->servicio = $servicioNuevo;
        $servicio->save();

        Success('Servicios/','Servicio Ingresado..!');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        View(compact('id'));
    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}