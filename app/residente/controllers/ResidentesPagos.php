<?php
namespace App\residente\controllers;

use App\CuentaBanco;
use App\ResidenteComprobante;
use App\ResidenteComprobanteImagen;
use App\ResidentePago;
use App\Saldo;
use App\Usuario;
use Dompdf\Dompdf;
use System\tools\rounting\Redirect;
use System\tools\session\User;

class ResidentesPagos
{
    public function __construct()
    {
        Role('residente');
    }

    public function index()
    {
        $user = User();

        if ($user)
        {
            $pagos = ResidentePago::where('residentes_id', $user->residente->id)->where('estatus', 0)->orderBy('id', 'desc')->get();
            $saldo = Saldo::where('residentes_id',$user->residente->id)->first();
            View(compact('pagos','saldo'));
        }
        else
        {
            Redirect::to('');
        }
    }

    public function pagos()
    {
        $user = User();

        if ($user)
        {
            $pagos = ResidenteComprobante::where('residentes_id', $user->residente->id)->orderBy('id', 'desc')->get();
            View(compact('pagos'));
        }
        else
        {
            Redirect::to('');
        }
    }

    public function hechos()
    {
        $user = User();

        if ($user)
        {
            $pagos = ResidenteComprobante::where('residentes_id', $user->residente->id)->where('estatus', 0)->orderBy('id', 'desc')->get();
            View(compact('pagos'));
        }
        else
        {
            Redirect::to('');
        }
    }

    public function total()
    {
        $user = User();

        if ($user)
        {
            $usuario = Usuario::find($user['id']);
            $residente_id = $usuario->residente->id;

            extract($_POST);
            //Arr($checkboxvar);
            $monto = 0;
            $servicios = array();

            if (isset($checkboxvar) and $checkboxvar)
            {
                $i = 0;

                foreach ($checkboxvar as $key => $ch)
                {
                    $pago = ResidentePago::find($ch);
                    $monto = $pago->cobro->monto + $monto;
                    $ser[$i] = $servicio = \App\ResidentePago::find($ch);
                    $i = $i + 1;
                }

                $saldo = Saldo::where('residentes_id', $residente_id)->first();
                $total = $monto;

                $bancos = CuentaBanco::where('condominios_id', $pago->condominios_id)->get();

                View(compact('total', 'checkboxvar', 'ser', 'saldo', 'bancos'));
            }
            else
            {
                Error('Principal', 'Error');
            }
        }
        else
        {
            Redirect::to('');
        }
    }

    public function deposito_transferencia()
    {
        //Arr($_POST);
        extract($_POST);
        $servicio_array = $servicios;
        //deserializando lo servicios enviados
        $servicios = ArrGetUrl($servicios);
        $pago = ResidentePago::find($servicios[0]);

        $comprobante = new ResidenteComprobante;
        $comprobante->condominios_id = $pago->condominios_id;
        $comprobante->residentes_id = $pago->residentes_id;
        $comprobante->cuentas_bancos_id = $banco_id;
        //guardamos los servicios de forma serializada para que esten en un solo campo
        $comprobante->servicios = $servicio_array;
        $comprobante->numero_referencia = $numero_referencia;
        $comprobante->monto_total = $monto_total;
        $comprobante->monto_comprobante = 0;
        $comprobante->fecha = $fecha_deposito;
        $comprobante->estatus = 0;
        $comprobante->save();

        foreach ($servicios as $key => $s)
        {
            $pago = ResidentePago::find($s);
            //cambiando estatus a 1 lo que quiere decir es que esta en espera de
            // ser comprobado mientras tanto no aparecera en la lista de servicio
            // por pagar
            $pago->residentes_comprobantes_id = $comprobante->id;
            $pago->estatus = 1;
            $pago->save();
        }

        \Cloudinary::config(array(
            "cloud_name" => "tuconsultaenlinea",
            "api_key" => "969938491626729",
            "api_secret" => "J2mGOPnz9A1dl9kubb7Qyh9h_MI",
        ));

        $url = $imagen.'';
        $imagen_original = \Cloudinary\Uploader::upload('https://process.filestackapi.com/AhTgLagciQByzXpFGRI0Az/compress/'.$imagen);
        $imagen_grande = \Cloudinary\Uploader::upload('https://process.filestackapi.com/AhTgLagciQByzXpFGRI0Az/resize=w:800/quality=value:85/compress/'.$imagen);
        $imagen_medio = \Cloudinary\Uploader::upload('https://process.filestackapi.com/AhTgLagciQByzXpFGRI0Az/resize=w:400/quality=value:70/compress/'.$imagen);
        $imagen_miniatura = \Cloudinary\Uploader::upload('https://process.filestackapi.com/AhTgLagciQByzXpFGRI0Az/resize=w:250/quality=value:70/compress/'.$imagen);

        //ingresando las imagenes
        $imagen = new ResidenteComprobanteImagen;
        $imagen->residentes_comprobantes_id = $comprobante->id;
        $imagen->imagen_original = $imagen_original['url'];
        $imagen->imagen_grande = $imagen_grande['url'];
        $imagen->imagen_medio = $imagen_medio['url'];
        $imagen->imagen_miniatura = $imagen_miniatura['url'];
        $imagen->save();

        Success('ResidentesPagos/pagos', 'Comprobante subido, espere mientras se confirma.');
    }

    public function pago_plus()
    {
        //Arr($_POST);
        extract($_POST);
        $servicios = ArrGetUrl($servicios);
        //Arr($servicios);

        foreach ($servicios as $key => $s)
        {
            $servicioPago = ResidentePago::find($s);
            $servicioPago->estatus = 2;
            $servicioPago->save();
        }

        $saldo = Saldo::where('residentes_id',$servicioPago->residentes_id)->first();
        $monto_resultado = $saldo->monto_positivo - $monto_total;
        $saldo->monto_positivo = $monto_resultado;
        $saldo->save();

        Success('ResidentesPagos','Pago realizado con su saldo plus.');
    }

    public function cuentas_bancos()
    {
        $bancos = CuentaBanco::all();
        View(compact('bancos'));
    }

    public function comprobantePDF()
    {
        extract($_GET);
        ob_start();
        $u = ResidenteComprobante::find($id_comprobante);
        include('app/residente/views/ResidentesPagos/comprobantePDF.php');
        $dompdf = new Dompdf(array('enable_remote' => true));
        $baseUrl = baseUrl;
        $dompdf->setBasePath($baseUrl); // This line resolve
        $dompdf->loadHtml(ob_get_clean());
        $dompdf->setPaper('letter', 'portrait');
        $dompdf->render();
        $dompdf->stream();
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
