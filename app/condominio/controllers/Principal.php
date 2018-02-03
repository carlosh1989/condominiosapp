<?php
namespace App\condominio\controllers;

use System\tools\rounting\Redirect;

class Principal
{
    function __construct()
    {
        Role('condominio');
    }

    public function index()
    {
        //View();
        Redirect::to('condominio/Residentes');
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