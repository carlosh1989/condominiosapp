<?php
namespace App\condominio\controllers;

use App\CondominioCobro;
use App\Residente;
use App\ResidentePago;
use App\Servicio;
use App\Usuario;
use Carbon\Carbon;

class Cobros
{
    public function __construct()
    {
        Role('condominio');
    }

    public function index()
    {
        $user = User();
        $cobros = CondominioCobro::where('condominios_id', $user['condominios_id'])->orderBy('id', 'desc')->get();
        View(compact('cobros'));
    }

    public function create()
    {
        $user = User();
        $servicios = Servicio::where('condominios_id', $user['condominios_id'])->get();
        View(compact('servicios'));
    }

    public function store()
    {
        extract($_POST);
        $user = User();
        //ingresando cobro con estatus 0 osea que no se ha notificado a residentes
        $cobro = new CondominioCobro;
        $cobro->condominios_id = $user['condominios_id'];
        $cobro->condominios_servicios_id = $servicio;
        $cobro->monto = $monto;
        $cobro->fecha = Carbon::now();
        $cobro->fecha_limite = $fecha_limite;
        $cobro->estatus = 0;
        $cobro->save();

        Success('Cobros', 'Nuevo cobro de servicio creado..!');
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

    public function notificar()
    {
        $user = User();
        $cobro_id = Uri(5);
        $cobro = CondominioCobro::find($cobro_id);

        //buscando a todos los residente de ese condominio
        $residentes = Residente::where('condominios_id', $cobro->condominios_id)->get();
        $fecha_notificado = Carbon::now();

        foreach ($residentes as $r)
        {
            $pago = new ResidentePago;
            $pago->condominios_id = $user['condominios_id'];
            $pago->condominios_cobros_id = $cobro_id;
            $pago->residentes_id = $r->id;
            $pago->fecha_notificacion = $fecha_notificado;
            $pago->fecha_pago = '';
            $pago->estatus = 0;
            $pago->save();
        }

        $cobro->estatus = 1;
        $cobro->save();

        Success('Cobros/','Cobro notificado a residentes..!');
    }

    public function residentes()
    {
        $pagos = ResidentePago::orderBy('id', 'desc')->get();
        View(compact('pagos'));
    }

    public function residentes_servicio()
    {
        $cobro_id = Uri(5);
        $pagos = ResidentePago::where('condominios_cobros_id',$cobro_id)->orderBy('id', 'desc')->get();
        View(compact('pagos'));
    }
}
