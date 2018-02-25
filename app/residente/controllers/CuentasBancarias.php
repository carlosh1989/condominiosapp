<?php
namespace App\residente\controllers;

use App\CuentaBanco;

class CuentasBancarias
{
    public function __construct()
    {
        Role('residente');
    }

    public function index()
    {
        $bancos = CuentaBanco::all();
        View(compact('bancos'));
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
