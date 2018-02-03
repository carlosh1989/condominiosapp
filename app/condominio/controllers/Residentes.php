<?php
namespace App\condominio\controllers;

use App\Residente;
use App\Usuario;

class Residentes
{
    function __construct()
    {
        Role('condominio');
    }

    public function index()
    {
        $usuarios = Usuario::where('role','residente')->get();;
        //Arr($usuarios);
        View(compact('usuarios'));
    }

    public function create()
    {
        View();
    }

    public function store()
    {
        Arr($_POST);
    }

    public function show($id)
    {
        $residente = Residente::find($id);
        //Arr($residente);
        View(compact('residente'));
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