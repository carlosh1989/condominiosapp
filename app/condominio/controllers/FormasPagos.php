<?php
namespace App\condominio\controllers;

use App\FormaPago;

class FormasPagos
{
    function __construct()
    {
        Role('condominio');
    }

    public function index()
    {
        $formas_pagos = FormaPago::all();
        //Arr($formas_pagos);
        View(compact('formas_pagos'));
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