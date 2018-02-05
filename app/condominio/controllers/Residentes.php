<?php
namespace App\condominio\controllers;

use App\Residente;
use App\ResidenteImagen;
use App\Usuario;

class Residentes
{
    function __construct()
    {
        Role('condominio');
    }

    public function index()
    {
        $user = User();
        $residentes = Residente::where('condominios_id',$user['condominios_id'])->get();
        //Arr($residentes);
        View(compact('residentes'));
    }

    public function create()
    {
        View();
    }

    public function store()
    {
        //Arr($_POST);

        extract($_POST);
        //Arr($_POST);


        //creando usuario de condominio
        $usuario = new Usuario;
        $usuario->name = $nombre;
        $usuario->email = $email;
        $usuario->password = password_hash($password, PASSWORD_DEFAULT);
        $usuario->role = 'residente';
        $usuario->created_at = date('Y-m-d H:i:s');
        $usuario->updated_at = date('Y-m-d H:i:s');
        $usuario->save();

        //ID de condominio
        $user = User();
        $condominio_id = Usuario::find($user['id'])->condominio->id;

        $residente = new Residente;
        $residente->usuarios_id = $usuario->id;
        $residente->condominios_id = $condominio_id;
        $residente->nombre = $nombre;
        $residente->cedula = $cedula;
        $residente->fecha_nacimiento = $fecha_nacimiento;
        $residente->num_casa = $num_casa;
        $residente->save();

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
        $imagen = new ResidenteImagen;
        $imagen->residentes_id = $residente->id;
        $imagen->imagen_original = $imagen_original['url'];;
        $imagen->imagen_grande = $imagen_grande['url'];
        $imagen->imagen_medio = $imagen_medio['url'];
        $imagen->imagen_miniatura = $imagen_miniatura['url'];
        $imagen->save();

        Success('Residentes/','Ingresado exitosamente el residente.');
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