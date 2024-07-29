<?php
$titulos = [
    'Dispositivos de Enfriamiento', ':Ventiladores:', ':Estado Sólido:', ':Cambio de Fase:', 'Enfriadores de Computadora',
    'Hay dos tipos de enfriadores de computadora:', 'El proceso típicamente involucra los siguientes pasos:', 'Enfriamiento Doppler:',
    'Enfriadores:', 'Aire:', 'Líquido:', 'Estado Sólido:', 'Enfriadores Termoeléctricos (TECs):', 'Enfriadores Híbridos:',
    'Enfriamiento por Cambio de Fase:', 'Mantenimiento e Instalación:', 'Conclusión:', 'Lásers', 'Por otro lado,',
    'Existen varios tipos de sistemas de enfriamiento activos,', ':Líquidos:', ':TECs:', 'Recientemente,',
    'Enfriamiento Sísifo:', 'Enfriamiento Evaporativo:', 'Al elegir un enfriador, considere factores como Tamaño y Compatibilidad del Enfriador:',
    'Altura del Enfriador:', 'Compatibilidad con el Socket:', 'Rendimiento de Enfriamiento:'
];

$links =[   'https://en.wikipedia.org/wiki/Computer_cooling',
    'https://www.youtube.com/watch?v=6AYdAl7Gxrc',
    'https://youtube.com/clip/UgkxCtnGcjvvzs7VShBGNBL_6luLxB5T1rSI?si=82vLKDTdjHML9d4O',
    'https://www.youtube.com/watch?v=FPFE7i7bz9Y',
    'https://en.wikipedia.org/wiki/Doppler_cooling',
    'https://en.wikipedia.org/wiki/Sisyphus_cooling',
    'https://en.wikipedia.org/wiki/Evaporative_cooling_(atomic_physics)',
    'https://en.wikipedia.org/wiki/Thermoelectric_effect',
];


$enfriador = [
    'enfriador' => 'son un componente esencial de cualquier sistema informático, ya que ayudan a regular la temperatura de la unidad central de procesamiento (CPU) y otros componentes críticos de la computadora. El sistema de enfriamiento es crucial porque el rendimiento y la vida útil de los componentes de la computadora pueden verse afectados negativamente por el calor excesivo.',

    'pasivoYActivoPasivo' => '<a href="https://www.cybernetman.com/blog/fanless-cooling-how-it-works-and-why-you-need-it/">pasivo</a> y
        <a href="https://www.pcmag.com/encyclopedia/term/active-cooling#:~:text=Active%20cooling%20uses%20a%20fan,allow%20the%20air%20to%20dissipate.">activo</a> enfriamiento.
        Los sistemas de enfriamiento pasivo utilizan la convección natural o el flujo de aire para eliminar el calor de la computadora.
        Los sistemas de enfriamiento pasivo generalmente están compuestos por disipadores de calor o radiadores que absorben el calor de la CPU
        y otros componentes y lo dispersan a través de una serie de aletas o tubos.',

    'pasivoYActivoActivo' => 'el enfriamiento activo utiliza un ventilador o una bomba para crear
        flujo de aire forzado o circulación de líquido para eliminar el calor de la computadora. El enfriamiento activo suele ser más
        efectivo que el enfriamiento pasivo porque puede mover aire o líquido a una velocidad más alta, eliminando así
        el calor más eficientemente.',

    'tipos' => 'incluyendo enfriadores de aire, enfriadores líquidos y enfriadores termoeléctricos.',

    'aire' => 'Los sistemas de enfriamiento por aire',

    'comun' => 'son los más comunes y utilizan ventiladores para soplar aire sobre el disipador de calor, que a su vez disipa el calor de la CPU.',

    'liquido' => 'Los sistemas de enfriamiento líquido',

    'bomba' => ', por otro lado, utilizan una bomba para hacer circular el líquido a través de un radiador para eliminar el calor de la CPU y otros componentes.',

    'termoelectrico' => 'Los enfriadores termoeléctricos',

    'peltier' => 'utilizan el efecto Peltier para enfriar la CPU creando un diferencial de temperatura entre dos superficies.',

    'ees' => 'ha habido avances en la tecnología de enfriamiento de estado sólido, que utiliza materiales que pueden transferir calor sin la necesidad de un ventilador o líquido. Estos materiales se conocen como materiales termoeléctricos y se pueden usar para crear disipadores de calor o enfriadores de estado sólido que se pueden incorporar en el sistema de enfriamiento de una computadora.',

    'enfriadorLaser' => 'Este es un fenómeno fascinante en física que implica el uso de láseres para enfriar átomos o moléculas a temperaturas extremadamente bajas, a menudo cercanas al cero absoluto. Se basa en los principios de la mecánica cuántica e implica manipular el movimiento de las partículas mediante la absorción y emisión de fotones.',

    'enfriadorDoppler' => 'Este método utiliza el efecto Doppler para ralentizar el movimiento de átomos o moléculas. Los haces de láser se dirigen a las partículas, y a medida que absorben y reemiten fotones, su impulso cambia. Ajustando cuidadosamente la frecuencia de los láseres, las partículas pueden ralentizarse significativamente.',

    'sisyphus' => 'En esta técnica, las partículas quedan atrapadas en un potencial periódico, a menudo creado por haces de láser que se cruzan. A medida que las partículas se mueven a través de este potencial, intercambian energía cinética con el campo de luz, lo que lleva a un mayor enfriamiento.',

    'evaporativo' => 'Una vez que las partículas se enfrían suficientemente utilizando técnicas como el enfriamiento Doppler y Sísifo, se puede emplear el enfriamiento evaporativo para reducir aún más su temperatura. Esto implica eliminar selectivamente las partículas de mayor energía del sistema, dejando una muestra más fría.',

    'resumenEnfriadorLaser' => 'En resumen, los enfriadores de computadoras son esenciales para asegurar que la CPU y otros componentes críticos de una computadora se mantengan dentro de temperaturas operativas seguras. Los sistemas de enfriamiento activo, incluidos los enfriadores de aire, líquidos y termoeléctricos, son más efectivos que los sistemas de enfriamiento pasivo y pueden ayudar a extender la vida útil y mejorar el rendimiento de una computadora. La tecnología de enfriamiento de estado sólido también es una tecnología emergente que tiene el potencial de mejorar aún más los sistemas de enfriamiento de computadoras.',

    'enfriadoAire' => 'Los enfriadores de aire son el tipo más común de enfriador de CPU. Consisten en un disipador de calor con aletas de metal y uno o más ventiladores montados en la parte superior o al lado de las aletas.',

    'enfriadoAire2' => 'El(los) ventilador(es) soplan aire sobre el disipador de calor, disipando el calor de la CPU. Los tubos de calor, a menudo incrustados en el disipador de calor, ayudan a conducir el calor desde la CPU hasta las aletas donde puede ser dispersado.',

    'enfriadoLiquido' => 'Los enfriadores líquidos, también conocidos como enfriadores de agua, utilizan un sistema de circuito cerrado para transferir el calor de la CPU.',

    'enfriadoLiquido2' => 'Una bomba circula un refrigerante (generalmente agua mezclada con un aditivo refrigerante) a través de tubos conectados a un radiador. El radiador disipa el calor en el aire circundante, y el refrigerante enfriado se bombea de vuelta al bloque de la CPU para absorber más calor.',

    'enfriadoEstadoSolido' => 'Los enfriadores de estado sólido utilizan materiales termoeléctricos para transferir el calor sin necesidad de ventiladores o líquido.',

    'enfriadoEstadoSolido2' => 'Estos materiales crean un gradiente de temperatura cuando se aplica una corriente eléctrica, lo que permite la transferencia de calor. Los enfriadores de estado sólido aún están emergiendo y tienen potencial para soluciones de enfriamiento compactas y eficientes.',

    'tec' => ['Los TECs utilizan el', 'efecto Peltier', 'para enfriar la CPU.', 'Cuando se aplica una corriente eléctrica a un módulo termoeléctrico, se crea un diferencial de temperatura entre sus dos superficies. Un lado se calienta mientras que el otro se enfría, enfriando efectivamente la CPU. Sin embargo, los TECs son menos comunes debido a su alto consumo de energía y complejidad.'],

    'hibrido' => ['Los enfriadores híbridos combinan elementos de los sistemas de enfriamiento por aire y por líquido.', 'Por lo general, presentan un bucle de enfriamiento líquido para la CPU con un enfriador de aire integrado para otros componentes como los módulos de regulador de voltaje (VRM) o la RAM.'],

    'pcc' => ['Los sistemas de enfriamiento por cambio de fase utilizan refrigerantes para enfriar la CPU.', 'El refrigerante sufre cambios de fase de líquido a gas y de regreso, absorbiendo calor durante la evaporación y liberándolo durante la condensación. Aunque son muy efectivos, los sistemas de enfriamiento por cambio de fase son costosos y complejos, lo que los hace poco prácticos para la mayoría de los usuarios.'],

    'factores' => ['Asegúrese de que encaje dentro del gabinete sin obstruir otros componentes.', 'Verifique si el enfriador es compatible con el tipo de socket de su CPU.', 'Considere la clasificación TDP (Potencia de Diseño Térmico) y la capacidad de enfriamiento del enfriador en relación con el consumo de energía y la producción de calor de su CPU.', 'Siga las pautas del fabricante para la instalación para asegurar el contacto adecuado entre el enfriador y la CPU.', 'Limpie regularmente el polvo y los desechos de las aletas del enfriador de aire y las aletas del radiador en los sistemas de enfriamiento líquido para mantener un flujo de aire óptimo.', 'Los enfriadores de computadoras juegan un papel crucial en mantener temperaturas óptimas para las CPU y otros componentes. Comprender los diferentes tipos de enfriadores y su funcionamiento puede ayudar a los usuarios a tomar decisiones informadas al seleccionar soluciones de enfriamiento para sus sistemas. A medida que avanza la tecnología, continúan surgiendo nuevos métodos e innovaciones de enfriamiento, ofreciendo una mayor eficiencia y rendimiento para los sistemas informáticos.']
];

?>