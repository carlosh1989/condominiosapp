<?php
namespace App\home\controllers;

use App\Donante;
use App\Entrega;
use App\Laboratorio;
use App\Parroquia;
use App\Parte;
use App\Requerimientos;
use App\Solicitante;
use App\Solicitud;
use App\Tipo;
use App\home\models\PrincipalModel;
use Controller,View,Token,Session,Arr,Message,Redirect,Permission,Url;

class Principal extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
/*        if(Session::isRegistered())
        {
            Redirect::to('auth/login');
        }
        else
        {
            $entregas = Entrega::where('portada',1)->get();
            //Arr($entregas);
            //View::ver('home/principal/index',compact('entregas')); 
            View(compact('entregas')); 
        }*/

        View();
    }

    public function consulta()
    {
        extract($_POST);

        if(isset($cedula) and $cedula and isset($cod) and $cod)
        {
            $solicitante = Solicitante::where('cedula',$cedula)->first();

            if (!$solicitante) 
            {
                Redirect::send('home/principal/consulta','error','Solicitante no registrado en el sistema.');
            } 
            else 
            {
                $solicitud = Solicitud::where('cod',$cod)->first();  

                if(!$solicitud)
                {
                    Redirect::send('home/principal/consulta','error','No existe Solicitud.');
                } 
                else
                {
                    Message::send('info','Solicitud encontrada.');
                    View(compact('solicitud'));    
                }
            }
        }
        else
        {
            $solicitud = "";
            View(compact('solicitud'));
        }
    }

    public function solicitud()
    {
        extract($_POST);

        if(isset($tipo_solicitud_id) and $tipo_solicitud_id)
        {
            $tipo = Tipo::find($tipo_solicitud_id);
            $requerimientos = $tipo->requerimientos;
            //Arr($requerimientos);
        }
        else
        {
            $requerimientos = "";
        }
        
        View(compact('requerimientos'));
    }   

    public function busquedaProcesar()
    {
        extract($_GET);
        $cadena  = urlencode($cadena);
        //add more logic to validate and secure user entered data before turning it loose in a query
        //return redirect('busqueda2/'.$cadena);
        redirect('home/principal/busqueda/'.$cadena);
        //red segura
        //return redirect()->secure('busqueda/'.$cadena);
    }

    public function busqueda()
    {
        $cadena = Uri(5);
        $busqueda = urldecode($cadena);

        if ($busqueda) {
            $exp = explode(' ', $busqueda);

            $s = '';
            $c = 1;
            foreach ($exp as $e) {
                $s .= "+$e*";

                if ($c + 1 == count($exp)) {
                    $s .= ' ';
                }

                $c++;
            }

            $query = "MATCH (nombre, descripcion, categoria, marca, modelo, ano) AGAINST ('$s' IN BOOLEAN MODE)";

        // $query looks like
        // MATCH (first_name, last_name, email) AGAINST ('+jar* +eitni*' IN BOOLEAN MODE)

        $resultados = Parte::whereRaw($query)->limit(10)->get();
        //dd($resultados);
        //$resultados = Part::where('description', 'LIKE', 'amortiguadores toyota')->Paginate(1);
        } else {
            $resultados = Parte::limit(10)->get();
        }

        View(compact('resultados'));
    }

    public function redi()
    {
        $modulo = 'home/principal';
        $url = 'test';
        redirect('home/principal/test');
        //header('Location: '.baseUrl.''.$modulo.'/'.$url.'');    
    }

    public function test()
    {
        echo "succefull..!";
    }
}