<?php
namespace App\residente\controllers;

use System\tools\rounting\Redirect;

class Principal
{
    function __construct()
    {
        Role('residente');
    }

    public function index()
    {
        Redirect::to('residente/ResidentesPagos');
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