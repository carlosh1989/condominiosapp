
Gmail
REDACTAR
Etiquetas
Recibidos (717)
Destacados
Importantes
Enviados
Borradores (53)
Categorías
Call log
Personal
SMS
Viajes
Más 
Hangouts

 
 
 
  Más 
1 de 1,215  
 
Imprimir todo En una ventana nueva
index proyecto veterinaria 
Recibidos
x 

Jose Rojas <game4droidplay@gmail.com>
Archivos adjuntos20:03 (Hace 51 minutos.)

para mí 

Área de archivos adjuntos
	
Haz clic aquí para Responder o Reenviar el mensaje
2.64 GB (17%) de 15 GB utilizados
Administrar
Condiciones - Privacidad
Última actividad de la cuenta: Hace 4 horas.
Detalles

<?php
	include "../conexion/aut_verifica.inc.php";
	include "../conexion/conex.php";
	$id_usuario = $_SESSION['usuario_id'];
    header("Content-Type: text/html;charset=utf-8");
	
	$url = 0;
	if(isset($_GET['sistema'])){
		$url=$_GET['sistema'];
	}
	
	$rs_usuario = mysqli_query($conexion,"SELECT * FROM usuario WHERE id='$id_usuario'");
	$row_usuario = mysqli_fetch_array($rs_usuario);	
    
	//list($nom1,$nom2) = explode(" ",$row_usuario['nombre']);
	//list($ape1,$ape2) = explode(" ",$row_usuario['apellido']);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Chain Responsive Bootstrap3 Admin</title>

        <link href="../css/style.default.css" rel="stylesheet">
        <link href="../css/morris.css" rel="stylesheet">
        <link href="../css/select2.css" rel="stylesheet" />

        <link href="../css/jquery.tagsinput.css" rel="stylesheet" />
        <link href="../css/toggles.css" rel="stylesheet" />
        <link href="../css/bootstrap-timepicker.min.css" rel="stylesheet" />
        <link href="../css/colorpicker.css" rel="stylesheet" />
        <link href="../css/dropzone.css" rel="stylesheet" />

        <script type="text/javascript" src="js/funciones.js"></script>
	    <script type="text/javascript" src="js/funciones2.js"></script>
	    <script type="text/javascript" src="js/funciones_select.js"></script>
        <link href="../css/estrella.css" rel="stylesheet" />
        <link href="../css/estilo_tabla.css" rel="stylesheet" />
	    <script language="javascript">
            $(function(){
                $('form').jqTransform({imgPath:'jqtransformplugin/img/'});
            });
        </script>
	    <script src="ajax.js"></script>
        <style type="text/css">
			.Titulo1 {
				color: #000000;
				font-size: 75px;
				font-weight: bold;
			}
			.Titulo2 {
				color: #000000;
				font-size: 18px;
				font-weight: bold;
			}
			.Titulo3 {
				color: #000000;
				font-size: 16px;
			}
			.Titulo4 {
				color: #000000;
				font-size: 14px;
                text-align : justify;
			}
		</style>
    </head>

    <body>
        
        <section>
            <div class="row">
                <?php
					switch ($url) {
						case 0:
							include "inicio.php";
							break;
                        case 1:
							include "contacto.php";
							break;
                        case 2:
							include "registrar_contacto.php";
							break;
                        case 3:
							include "adopcion.php";
							break;
                        case 4:
							include "registro_adopcion.php";
							break;
                        case 5:
							include "evento.php";
							break;
                        case 6:
							include "registro_evento.php";
							break;
                        case 7:
							include "servicios.php";
							break;
                        case 8:
							include "registro_servicio.php";
							break;
                        case 9:
							include "producto.php";//registrar_producto.php
							break;
                        case 10:
							include "registrar_producto.php";//
							break;
                        case 11:
							include "usuario.php";//
							break;
                        case 12:
							include "ficha_medica.php";//
							break;
                        case 13:
							include "registrar_ficha.php";//
							break;
                        case 14:
							include "actualizar_contacto.php";//
							break;
                        case 15:
							include "actualizar_servicio.php";//
							break;
                        case 16:
							include "producto_precio.php";//
							break;
                        case 17:
							include "actualizar_precio.php";//
							break;
                        case 18:
							include "ver_producto.php";//
							break;
                        case 19:
							include "facturar_producto.php";//
							break;
                        case 20:
							include "ayuda.php";//
							break;
                        case 21:
							include "seleccion_animal.php";//
							break;
                        case 22:
							include "seleccion_sintoma.php";//
							break;
                        case 23:
							include "ayuda1.php";//
							break;
                        case 24:
							include "ayuda2.php";//
							break;
                        case 25:
							include "registro_medico.php";//
							break;
                        case 26:
                            include "seleccion_gato.php";//
                            break;
                        case 27:
                            include "eliminar_servicio.php";//
                            break;
                        case 28:
                            include "producto_foto.php";//
                            break;
                        case 29:
                            include "seleccionar_foto.php";//
                            break;
                        case 30:
                            include "foto1.php";//
                            break;
                        case 31:
                            include "foto2.php";//
                            break;
                        case 32:
                            include "foto3.php";//
                            break;
                        case 33:
                            include "producto_puntuacion.php";//
                            break;
                        case 34:
                            include "actualizar_puntuacion.php";//
                            break;
					}
				?>
            </div><!-- mainwrapper -->
        </section>
		<?php include "modals.php"; ?>
        <?php if($url==20 or $url==23 or $url==24){ ?>
        <script src="../js/jquery-1.11.1.min.js"></script>
        <script src="../js/jquery-migrate-1.2.1.min.js"></script>
        <script src="../js/jquery-ui-1.10.3.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/modernizr.min.js"></script>
        <script src="../js/pace.min.js"></script>
        <script src="../js/retina.min.js"></script>
        <script src="../js/jquery.cookies.js"></script>
        
        <script src="../js/bootstrap-wizard.min.js"></script>
        <script src="../js/jquery.validate.min.js"></script>
        <script src="../js/select2.min.js"></script>

        <script src="../js/custom.js"></script>
        <script>
            jQuery(document).ready(function() {
                
                // This will empty first option in select to enable placeholder
                jQuery('select option:first-child').text('');
                
                // Select2
                jQuery("select").select2({
                    minimumResultsForSearch: -1
                });
                
                // Basic Wizard
                jQuery('#basicWizard').bootstrapWizard({
                    onTabShow: function(tab, navigation, index) {
                        tab.prevAll().addClass('done');
                        tab.nextAll().removeClass('done');
                        tab.removeClass('done');
                        
                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        
                        if($current >= $total) {
                            $('#basicWizard').find('.wizard .next').addClass('hide');
                            $('#basicWizard').find('.wizard .finish').removeClass('hide');
                        } else {
                            $('#basicWizard').find('.wizard .next').removeClass('hide');
                            $('#basicWizard').find('.wizard .finish').addClass('hide');
                        }
                    }
                });
                
                // Progress Wizard
                jQuery('#progressWizard').bootstrapWizard({
                    onTabShow: function(tab, navigation, index) {
                        tab.prevAll().addClass('done');
                        tab.nextAll().removeClass('done');
                        tab.removeClass('done');
                        
                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        
                        if($current >= $total) {
                            $('#progressWizard').find('.wizard .next').addClass('hide');
                            $('#progressWizard').find('.wizard .finish').removeClass('hide');
                        } else {
                            $('#progressWizard').find('.wizard .next').removeClass('hide');
                            $('#progressWizard').find('.wizard .finish').addClass('hide');
                        }
                        
                        var $percent = ($current/$total) * 100;
                        $('#progressWizard').find('.progress-bar').css('width', $percent+'%');
                    }
                });
                
                // Wizard With Disabled Tab Click
                jQuery('#tabWizard').bootstrapWizard({
                    onTabShow: function(tab, navigation, index) {
                        tab.prevAll().addClass('done');
                        tab.nextAll().removeClass('done');
                        tab.removeClass('done');
                        
                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        
                        if($current >= $total) {
                            $('#tabWizard').find('.wizard .next').addClass('hide');
                            $('#tabWizard').find('.wizard .finish').removeClass('hide');
                        } else {
                            $('#tabWizard').find('.wizard .next').removeClass('hide');
                            $('#tabWizard').find('.wizard .finish').addClass('hide');
                        }
                    },
                    onTabClick: function(tab, navigation, index) {
                        return false;
                    }
                });
                
                // Wizard With Form Validation
                jQuery('#valWizard').bootstrapWizard({
                    onTabShow: function(tab, navigation, index) {
                        tab.prevAll().addClass('done');
                        tab.nextAll().removeClass('done');
                        tab.removeClass('done');
                        
                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        
                        if($current >= $total) {
                            $('#valWizard').find('.wizard .next').addClass('hide');
                            $('#valWizard').find('.wizard .finish').removeClass('hide');
                        } else {
                            $('#valWizard').find('.wizard .next').removeClass('hide');
                            $('#valWizard').find('.wizard .finish').addClass('hide');
                        }
                    },
                    onTabClick: function(tab, navigation, index) {
                        return false;
                    },
                    onNext: function(tab, navigation, index) {
                        var $valid = jQuery('#valWizard').valid();
                        if (!$valid) {
                            $validator.focusInvalid();
                            return false;
                        }
                    }
                });
                
                // Wizard With Form Validation
                var $validator = jQuery("#valWizard").validate({
                    highlight: function(element) {
                        jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                    },
                    success: function(element) {
                        jQuery(element).closest('.form-group').removeClass('has-error');
                    }
                });
                
                
                
                // This will submit the basicWizard form
                jQuery('.panel-wizard').submit(function() { 
                });

            });
        </script>
        <?php }else{?>
        <script src="../js/jquery-1.11.1.min.js"></script>
        <script src="../js/jquery-migrate-1.2.1.min.js"></script>
        <script src="../js/jquery-ui-1.10.3.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/modernizr.min.js"></script>
        <script src="../js/pace.min.js"></script>
        <script src="../js/retina.min.js"></script>
        <script src="../js/jquery.cookies.js"></script>
        
        <script src="../js/jquery.autogrow-textarea.js"></script>
        <script src="../js/jquery.mousewheel.js"></script>
        <script src="../js/jquery.tagsinput.min.js"></script>
        <script src="../js/toggles.min.js"></script>
        <script src="../js/bootstrap-timepicker.min.js"></script>
        <script src="../js/jquery.maskedinput.min.js"></script>
        <script src="../js/select2.min.js"></script>
        <script src="../js/colorpicker.js"></script>
        <script src="../js/dropzone.min.js"></script>

        <script src="../js/custom.js"></script>
        <script>
            jQuery(document).ready(function() {
                
                // Tags Input
                jQuery('#tags').tagsInput({width:'auto'});
                 
                // Textarea Autogrow
                jQuery('#autoResizeTA').autogrow();
                
                // Spinner
                var spinner = jQuery('#spinner').spinner();
                spinner.spinner('value', 0);
                
                // Form Toggles
                jQuery('.toggle').toggles({on: true});
                
                // Time Picker
                jQuery('#timepicker').timepicker({defaultTIme: false});
                jQuery('#timepicker2').timepicker({showMeridian: false});
                jQuery('#timepicker3').timepicker({minuteStep: 15});
                
                // Date Picker
                jQuery('#datepicker').datepicker();
                jQuery('#datepicker-inline').datepicker();
                jQuery('#datepicker-multiple').datepicker({
                    numberOfMonths: 3,
                    showButtonPanel: true
                });
                
                // Input Masks
                jQuery("#date").mask("99/99/9999");
                jQuery("#phone").mask("+58 (999) 999.99.99");
                jQuery("#phone2").mask("+58 (999) 999.99.99");
                jQuery("#ssn").mask("999-99-9999");
                
                // Select2
                jQuery("#select-basic, #select-multi").select2();
                jQuery('#select-search-hide').select2({
                    minimumResultsForSearch: -1
                });
                
                function format(item) {
                    return '<i class="fa ' + ((item.element[0].getAttribute('rel') === undefined)?"":item.element[0].getAttribute('rel') ) + ' mr10"></i>' + item.text;
                }
                
                // This will empty first option in select to enable placeholder
                jQuery('select option:first-child').text('');
                
                jQuery("#select-templating").select2({
                    formatResult: format,
                    formatSelection: format,
                    escapeMarkup: function(m) { return m; }
                });
                
                // Color Picker
                if(jQuery('#colorpicker').length > 0) {
                    jQuery('#colorSelector').ColorPicker({
			onShow: function (colpkr) {
			    jQuery(colpkr).fadeIn(500);
                            return false;
			},
			onHide: function (colpkr) {
                            jQuery(colpkr).fadeOut(500);
                            return false;
			},
			onChange: function (hsb, hex, rgb) {
			    jQuery('#colorSelector span').css('backgroundColor', '#' + hex);
			    jQuery('#colorpicker').val('#'+hex);
			}
                    });
                }
  
                // Color Picker Flat Mode
                jQuery('#colorpickerholder').ColorPicker({
                    flat: true,
                    onChange: function (hsb, hex, rgb) {
			jQuery('#colorpicker3').val('#'+hex);
                    }
                });
                
                
            });
        </script>
        <?php } ?>
    </body>
</html>