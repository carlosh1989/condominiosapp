<?php
namespace App\condominio\controllers;

use App\ResidenteComprobante;
use App\ResidentePago;
use App\Saldo;

class Pagos
{
    public function __construct()
    {
        Role('condominio');
    }

    public function index()
    {
        $user = User();

        if ($user)
        {
            $pagos = ResidenteComprobante::where('condominios_id', $user->condominios_id)
                ->where('estatus', 0)
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
        extract($_POST);
        $pago = ResidenteComprobante::find($comprobante_id);

        if ($monto_comprobante >= $pago->monto_total)
        {
            $pago->monto_comprobante = $monto_comprobante;
            $pago->estatus = 1;
            $pago->save();

            $servicios = ResidentePago::where('residentes_comprobantes_id', $comprobante_id)->update(['estatus' => 2]);

            $saldo = Saldo::where('residentes_id', $pago->residentes_id)->first();

            //MONTO RESULTADO
            $monto_resultado = $monto_comprobante - $pago->monto_total;

            if ($saldo)
            {   
                $monto_viejo = $saldo->monto_positivo;
                $monto_final = $monto_viejo + $monto_resultado;
                $saldo->monto_positivo = $monto_final;
                $saldo->save();
            }
            else
            {
                $saldo = new Saldo;
                $saldo->residentes_id = $pago->residentes_id;
                $saldo->monto_positivo = 0;
                $saldo->save();

                $monto_final = $saldo->monto_positivo + $monto_resultado;
                $saldo->monto_positivo = $monto_final;
                $saldo->save();
            }

            Success('Pagos', 'Pago aprobado.');
        }
        else
        {
            Error('Pagos', 'No se puede aprobar dicho pago porque el monto del comprobante es menor al monto total.');
        }
    }
}
