<?php
namespace App\admin\controllers;

use App\Condominio;
use App\CondominioImagen;
use App\Usuario;
use System\tools\rounting\Redirect;

class Condominios
{
    function __construct()
    {
        Role('admin');
    }

    public function index()
    {
        $usuarios = Usuario::where('role','condominio')->get();
        View(compact('usuarios'));
    }

    public function create()
    {
        View();
    }

    public function store()
    {
        extract($_POST);
        //Arr($_POST);

        //creando usuario de condominio
        $usuario = new Usuario;
        $usuario->condominios_id = 0;
        $usuario->name = $name;
        $usuario->email = $email;
        $usuario->password = password_hash($password, PASSWORD_DEFAULT);
        $usuario->role = 'condominio';
        $usuario->created_at = date('Y-m-d H:i:s');
        $usuario->updated_at = date('Y-m-d H:i:s');
        $usuario->save();

        //creando el condominio
        if(!isset($piscina)){$piscina=0;}
        if(!isset($gym)){$gym=0;}
        if(!isset($piscina)){$piscina=0;}
        if(!isset($parque)){$parque=0;}
        if(!isset($estacionamiento)){$estacionamiento=0;}
        if(!isset($cancha)){$cancha=0;}

        $condominio = new Condominio;
        $condominio->usuarios_id = $usuario->id;
        $condominio->nombre = $name;
        $condominio->direccion = $location;
        $condominio->lat = $lat;
        $condominio->lng = $lng;
        $condominio->piscina = $piscina;
        $condominio->gym = $gym;
        $condominio->parque = $parque;
        $condominio->cancha = $cancha;
        $condominio->estacionamiento = $estacionamiento;
        $condominio->save();

        $usuario->condominios_id = $condominio->id;
        $usuario->save();

        \Cloudinary::config(array( 
        "cloud_name" => "tuconsultaenlinea", 
        "api_key" => "969938491626729", 
        "api_secret" => "J2mGOPnz9A1dl9kubb7Qyh9h_MI" 
        ));

        $url = $imagen.'';
        $imagen_original = \Cloudinary\Uploader::upload('https://process.filestackapi.com/AhTgLagciQByzXpFGRI0Az/compress/'.$imagen);
        $imagen_grande = \Cloudinary\Uploader::upload('https://process.filestackapi.com/AhTgLagciQByzXpFGRI0Az/resize=w:800/quality=value:85/compress/'.$imagen);
        $imagen_medio = \Cloudinary\Uploader::upload('https://process.filestackapi.com/AhTgLagciQByzXpFGRI0Az/resize=w:400/quality=value:70/compress/'.$imagen);
        $imagen_miniatura = \Cloudinary\Uploader::upload('https://process.filestackapi.com/AhTgLagciQByzXpFGRI0Az/resize=w:250/quality=value:70/compress/'.$imagen);

        //ingresando las imagenes
        $imagen = new CondominioImagen;
        $imagen->condominios_id = $condominio->id;
        $imagen->imagen_original = $imagen_original['url'];;
        $imagen->imagen_grande = $imagen_grande['url'];
        $imagen->imagen_medio = $imagen_medio['url'];
        $imagen->imagen_miniatura = $imagen_miniatura['url'];
        $imagen->save();

        Redirect::to('admin/Condominios');
    }

    public function show($id)
    {
        $condominio = Condominio::find($id);
        //Arr($condominio);
        View(compact('condominio'));
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

    public function nueva()
    {
        echo "hola mundo";
    }
}