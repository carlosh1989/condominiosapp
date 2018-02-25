<?php
namespace App\condominio\controllers;

use App\CuentaBanco;
use App\Usuario;

class CuentasBancos
{
    function __construct()
    {
        Role('condominio');
    }

    public function index()
    {
        $cuentas_banco = CuentaBanco::where('eliminar',0)->get();
        //Arr($formas_pagos);
        View(compact('cuentas_banco'));
    }

    public function create()
    {
        View();
    }

    public function store()
    {
        $usuario = User();
        $condominio_id = Usuario::find($usuario['id'])->condominio->id;
        
        extract($_POST);
        //ingresando cuenta bancaria
 
        $bancoCuenta = new CuentaBanco;
        $bancoCuenta->condominios_id = $condominio_id;
        $bancoCuenta->banco = $banco;
        $bancoCuenta->tipo = $tipo;
        $bancoCuenta->numero = $cuenta;
        $bancoCuenta->nombre = $nombre;
        $bancoCuenta->cedula = $cedula;
        $bancoCuenta->email = $email;
        $bancoCuenta->eliminar = 0;
        $bancoCuenta->save();

        //Arr($_POST);
        Success('CuentasBancos/','Cuenta de banco agregada..!');
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
        $banco = CuentaBanco::find($id);
        $banco->eliminar = 1;
        $banco->save();

        Success('CuentasBancos','Datos de Banco borrado.');
    }
}