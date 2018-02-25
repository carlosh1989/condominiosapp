<?php
namespace App\condominio\controllers;

use App\CuentaBanco;

class CuentasBancarias
{
    function __construct()
    {
        Role('condominio');
    }

    public function index()
    {
        if(User())
        {
            $bancos = CuentaBanco::where('condominios_id',User()->condominios_id)->get();
            View(compact('bancos'));
        }
        else
        {
            Redirect::to('');
        }
        //View();
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