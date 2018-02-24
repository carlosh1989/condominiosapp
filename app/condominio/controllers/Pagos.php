<?php
namespace App\condominio\controllers;

use App\ResidenteComprobante;

class Pagos
{
    function __construct()
    {
        Role('condominio');
    }

    public function index()
    {
        $user = User();

        if($user)
        {
            $pagos = ResidenteComprobante::where('condominios_id',$user->condominios_id)
            ->where('estatus',0)
            ->get();
                
            View(compact('pagos'));
        }
        else
        {

        }
    }

    public function create()
    {
        View();
    }

    public function store()
    {

    }

    public function show($id)
    {
        echo $id;
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

    public function aprobar()
    {
        echo "asdasd";
    }
}