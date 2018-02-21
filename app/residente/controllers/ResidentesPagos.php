<?php
namespace App\residente\controllers;

use App\ResidentePago;
use App\Usuario;
use System\tools\rounting\Redirect;

class ResidentesPagos
{
    public function __construct()
    {
        Role('residente');
    }

    public function index()
    {
        $user = User();
        $usuario = Usuario::find($user['id']);
        $residente_id = $usuario->residente->id;
        $pagos = ResidentePago::where('residentes_id', $residente_id)->get();
        View(compact('pagos'));
    }

    public function total()
    {
        extract($_POST);
        //Arr($checkboxvar);
        $monto = 0;

        if (isset($checkboxvar) and $checkboxvar)
        {
            foreach ($checkboxvar as $key => $ch)
            {
                $cobro = ResidentePago::find($ch);
                //echo $cobro->cobro->monto;
                $monto = $cobro->cobro->monto + $monto;
            }

            echo $monto;
            //buscando por el ID a todos los cobros seleccionados
        }
        else
        {
            Error('Principal','Error');
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
