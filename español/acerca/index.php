<?php
$title="Acerca de LAtinosPC.com";
$directoryPath = '../../';
$lang = 'es';
$acerca ='active';

include ('../../include/_code/pagina.php');

function content(){
    $titulo = '<h2>Acerca De nosotros</h2>';
    $empiezo = '<p>Empezamos en 2009 con un solo técnico; Omar, y desde entonces tenemos un objetivo,
                    aquí en LatinosPC queremos brindar a familias e individuos la experiencia
                    de un sistema informático completamente funcional; laptops y computadoras de escritorio. Ofrecemos
                    principalmente servicios a domicilio y remotos, pero pronto trabajaremos en una ubicación física.
                    Omar comenzó su carrera mientras aún estaba en la preparatoria,
                    asistiendo a clases nocturnas en una escuela para adultos, y después fue a
                    la universidad. Su carrera en informática comenzó ayudando a su familia y amigos,
                    arreglando sus computadoras, y luego a los amigos de sus amigos y sus familias.
                    Después de trabajar con computadoras en casa, comenzamos a trabajar con pequeños
                    negocios locales y sus necesidades informáticas diarias. Y hemos estado tratando de mantenernos ocupados desde 2009.
                </p>';
    $garantia ='<h2>100% Satisfaccion Garantizada | Paquete de Servicio de 90 Días - Incluido</h2>
                    <div class="clr"></div>
                        <a rel="example_group" href="https://latinospc.com/images/button.jpg" title="Tool Box" alt="LAPC">
                          <img src="https://latinospc.com/images/s_button.webp" width="263" height="146" alt="image" class="lr" />
                        </a>
                        <h3>LAtinosPC se ha expandido a algunos otros campos de la industria y llevaremos el mismo nivel de dedicación a cada proyecto. ¡Construimos sitios web básicos personalizados con un diseño único a una tarifa fija!</h3>
                        <h2>Estamos ubicados en la ciudad de Pomona, y viajamos a los condados de Los Ángeles, San Bernardino, Riverside y Orange.</h2>
                        <a href="#" class="rm">
                          <h3>Lee más</h3>
                        </a>
                        <div class="clr"></div>';
    include_once('../../include/_works/about.php');
}
?>
