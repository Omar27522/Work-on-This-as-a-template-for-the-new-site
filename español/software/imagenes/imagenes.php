<?php
$titulo = 'Imágenes';

$subTitulos = [
    'La evolución de los gráficos por computadora',
    'Gráficos 2D: La Fundación',
    'Gráficos 3D: Añadiendo Profundidad',
    'Fotografía digital y hardware de imagen',
    'Tecnologías modernas de pantalla',
    'Realidad virtual y aumentada',
    'Imágenes por computadora modernas'
];

$enlaces =[
    'terceraDimension'=>'https://all3dp.com/2/3d-file-format-3d-model-types/',
    'formatoArchivos'=>'https://www.adobe.com/creativecloud/file-types/image/raster.html',
    'vista'=>'https://concepto.de/sentido-de-la-vista/',
    'optica'=>'https://es.wikipedia.org/wiki/%C3%93ptica',
    'vision'=>'https://es.wikipedia.org/wiki/Visi%C3%B3n',
    'whirlwind'=>'https://es.wikipedia.org/wiki/Whirlwind',
    'mit'=>'https://lapasiondepensar.wordpress.com/2018/08/28/proyecto-whirlwind/comment-page-1/',
    'ivan'=>'https://es.wikipedia.org/wiki/Ivan_Sutherland',
    'sketchPad'=>'https://es.wikipedia.org/wiki/Sketchpad',
    'dosD'=>'https://academia-lab.com/enciclopedia/graficos-2d-por-computadora/',
    'tresD'=>'https://niixer.com/index.php/2024/03/02/graficos-3d-su-evolucion-de-vectores-a-realidades-virtuales/',
    'animacion'=>'https://conceptosdelahistoria.com/innovaciones-tecnologicas/innovaciones-modernas/animacion-por-computadora/',
    'gpu'=>'https://www.xataka.com/componentes/las-gpu-como-pasado-presente-y-futuro-de-la-computacion',
    'fotorrealismo'=>'https://www.artlex.com/es/movimientos-artisticos/fotorrealismo/',
    'tiempoReal'=>'https://www.autodesk.com/mx/solutions/real-time-rendering?msockid=097ed31398d969d61f38c7a5994b6801',
    ''=>'',
    ''=>'',
    ''=>'',
    ''=>'',
    ''=>'',
    ''=>'',
    ''=>'',
    
    'resonanciaM'=>'https://www.mayoclinic.org/es/tests-procedures/mri/about/pac-20384768',
    'tomografia'=>'https://www.mayoclinic.org/es/tests-procedures/ct-scan/about/pac-20393675',
    'satelites'=>'https://cienciasinlimites.org/los-satelites-de-observacion-terrestre-y-su-impacto-en-la-ciencia/',
    'inteligenciaArtificial'=>'https://diarioia.com/enciclopedia-inteligencia-artificial-iapedia/',
    ''=>'',
    ''=>'',
];

$imagenes = [
    'girl'=>['https://www.w3schools.com/w3images/photographer.jpg','Fotografa']
];

$vista = [
    'La <a href="'.$enlaces['vista'].'">visión</a> es uno de los sentidos principales mas usados para comprender el mundo.',
    'Cuando la <a href="'.$enlaces['optica'].'">luz se refleja en un objeto</a>, los ojos detectan las variaciones de luz, luego el cerebro procesa esta información; crea una experiencia, y una percepción personal de la realidad mediante el uso de la <b><a href="'.$enlaces['vision'].'">vista</a></b>.',
    'Diría que, si un objeto es visible para un observador, la existencia del mismo objeto puede ser confirmada aún más poniéndolo a prueba con los otros sentidos, como el <b>tacto</b>, el <b>oído</b>, el <b>gusto</b> y el <b>olfato</b>, etc...'
];

$evolucion = [
    'La historia de los gráficos por computadora se remonta a la década de 1950, comenzando con la <a href="'.$enlaces['mit'].'">computadora</a> <a href="'.$enlaces['whirlwind'].'">Whirlwind</a> en el MIT que utilizaba una pantalla CRT para la salida. En 1963, <a href="'.$enlaces['ivan'].'">Ivan Sutherland</a> revolucionó el campo con <a href="'.$enlaces['sketchPad'].'">Sketchpad</a>, el primer programa de diseño asistido por computadora. La década de 1970 vio el nacimiento de los <a href="'.$enlaces['dosD'].'">gráficos por computadora en 2D</a> en aplicaciones comerciales, mientras que la década de 1980 nos trajo desarrollos revolucionarios en <a href="'.$enlaces['tresD'].'">gráficos</a> y <a href="'.$enlaces['animacion'].'">animación en 3D</a>. La década de 1990 fue testigo del surgimiento de <a href="'.$enlaces['gpu'].'">unidades de procesamiento gráfico (GPUs)</a> dedicadas, lo que llevó a las capacidades de renderizado <a href="'.$enlaces['fotorrealismo'].'">foto-realistas</a> y <a href="'.$enlaces['tiempoReal'].'">gráficos 3D en tiempo real</a> de hoy en día.'
];

$graficos2D = ['Los gráficos en 2D forman la base de la imagen digital, consistiendo en píxeles organizados en una cuadrícula bidimensional. Estos gráficos incluyen desde interfaces de usuario básicas hasta arte digital y fotografías. Los gráficos vectoriales, otra forma de imágenes en 2D, utilizan ecuaciones matemáticas para crear imágenes escalables que mantienen su calidad a cualquier tamaño. Las aplicaciones comunes incluyen el diseño de logotipos, la tipografía y las ilustraciones técnicas.'];

$graficos3D = [
    'tercerD' => 'Los gráficos en 3D introducen el eje z, creando objetos virtuales con profundidad, volumen y perspectiva. Los gráficos en 3D modernos utilizan técnicas complejas como:',
    'primer' => 'Modelado de mallas poligonales para crear formas de objetos',
    'segundo' => 'Mapeo de texturas para agregar detalles superficiales',
    'tercer' => 'Trazado de rayos para iluminación y sombras realistas',
    'cuarto' => 'Renderizado en tiempo real para experiencias interactivas',
    'tercerDUltimo' => 'Estas tecnologías impulsan todo, desde videojuegos hasta visualización arquitectónica y simulaciones científicas.',
];

$fotografiaDigital = [
    'foto' => 'La fotografía digital representa un aspecto crucial de la tecnología moderna de la imagen.',
    'incluye'=>'Componentes clave incluyen:',
    'sensor'=>['imagen'=>'Sensores de imagen',
        'tipo'=>'En el corazón de las cámaras digitales hay dos tipos principales de sensores de imagen:',
            'ccd'=>['fuerte'=>'CCD (Dispositivo de Carga Acoplada):',
                'pro'=>'Conocido por imágenes de alta calidad con menos ruido, tradicionalmente utilizado en cámaras profesionales'],
            'cmos'=>['fuerte'=>'CMOS (Semiconductor Complementario de Óxido Metálico):',
                'pro'=>'Más eficiente en energía y más barato de fabricar, ahora es la tecnología dominante en la mayoría de las cámaras modernas'],
            'sensores'=>'Estos sensores convierten la luz en señales eléctricas a través de millones de fotositos (píxeles).',
            ],
            'componentesClave' => 'Componentes Claves de la Fotografía',
            'elementos' => 'Varios elementos trabajan juntos para crear imágenes digitales:',
            'componentes' => [
                'lente' => ['Sistema de Lentes:', 'Controla el enfoque, el zoom y la recolección de luz a través de aperturas ajustables'],
                'procesador' => ['Procesador de Imágenes:', 'Convierte los datos del sensor en imágenes digitales, manejando tareas como la reducción de ruido y el procesamiento de color'],
                'resolucion' => ['Resolución:', 'Medida en megapíxeles, determinando el nivel de detalle de las imágenes capturadas'],
                'rango' => ['Rango Dinámico:', 'La capacidad de la cámara para capturar tanto áreas brillantes como oscuras en una sola toma']
                ]

            ];

$procesamientoDigital = [
                'titulo' => 'Procesamiento de Imágenes Digitales',
                'intro' => 'Después de la captura, las imágenes pasan por varios pasos de procesamiento:',
                'pasos' => [
                    'raw' => ['Procesamiento RAW:', 'Conversión de datos brutos del sensor en imágenes visibles'],
                    'color' => ['Corrección de Color:', 'Ajuste del balance de blancos y precisión del color'],
                    'ruido' => ['Reducción de Ruido:', 'Eliminación de artefactos digitales y ruido del sensor'],
                    'compresion' => ['Compresión:', 'Optimización del tamaño del archivo manteniendo la calidad de la imagen']
                ]
            ];

$tecnologiaPantalla = [
    'intro' => 'La tecnología de pantalla actual ha evolucionado dramáticamente, ofreciendo experiencias visuales sin precedentes:',
    'tecnologias' => [
        'refresco' => [
            'titulo' => 'Altas Tasas de Refresco',
            'descripcion' => 'Las pantallas modernas pueden alcanzar 144Hz, 240Hz o incluso más, proporcionando un movimiento más suave y reduciendo el desenfoque de movimiento'
        ],
        'resolucion' => [
            'titulo' => 'Resolución',
            'descripcion' => 'Desde resoluciones 4K (3840x2160) hasta 8K (7680x4320), las pantallas ahora ofrecen una claridad y detalle increíbles'
        ],
        'hdr' => [
            'titulo' => 'HDR (Alto Rango Dinámico)',
            'descripcion' => 'Contraste y precisión de color mejorados, haciendo las imágenes más vívidas y realistas'
        ],
        'oled' => [
            'titulo' => 'OLED y Mini-LED',
            'descripcion' => 'Tecnologías de pantalla avanzadas que ofrecen negros perfectos, colores vibrantes y mejor eficiencia energética'
        ]
    ]
];

$tecnologiaInmersiva = [
    'intro' => 'La última frontera en gráficos por computadora involucra tecnologías inmersivas:',
    'tecnologias' => [
        'vr' => [
            'titulo' => 'Realidad Virtual (VR)',
            'descripcion' => 'Creación de entornos digitales totalmente inmersivos para juegos, entrenamiento y recorridos virtuales'
        ],
        'ar' => [
            'titulo' => 'Realidad Aumentada (AR)',
            'descripcion' => 'Superposición de contenido digital en el mundo real, mejorando nuestras experiencias diarias'
        ],
        'mr' => [
            'titulo' => 'Realidad Mixta (MR)',
            'descripcion' => 'Combinación de entornos virtuales y reales donde los objetos digitales y físicos pueden interactuar'
        ]
    ],
    'conclusion' => 'Estas tecnologías están revolucionando campos desde los juegos y el entretenimiento hasta la educación, la salud y el entrenamiento profesional, empujando los límites de la interacción humano-computadora.'
];

$imagenModerna = [
    'intro' => 'Si bien las pantallas de computadora tradicionales funcionan en 2 dimensiones, la tecnología moderna nos permite capturar, procesar y mostrar imágenes de formas cada vez más sofisticadas:',
    'aplicaciones' => [
        'medica' => [
            'titulo' => 'Imágenes Médicas',
            'descripcion' => 'Técnicas avanzadas de visualización como la <a href="'.$enlaces['resonanciaM'].'">resonancia magnética</a> y las <a href="'.$enlaces['tomografia'].'">tomografías</a> proporcionan vistas detalladas en 3D del cuerpo humano'
        ],
        'satelital' => [
            'titulo' => 'Imágenes Satelitales',
            'descripcion' => 'Los <a href="'.$enlaces['satelites'].'">satélites de observación terrestre de alta resolución</a> capturan imágenes detalladas para mapeo, pronóstico del tiempo y monitoreo ambiental'
        ],
        'ia' => [
            'titulo' => 'Imágenes Mejoradas por IA',
            'descripcion' => 'Los <a href="'.$enlaces['inteligenciaArtificial'].'">algoritmos de aprendizaje automático</a> mejoran la calidad de imagen, automatizan el análisis y permiten nuevas aplicaciones como el reconocimiento facial'
        ]
    ],
    'conclusion'=>'La tecnología de imágenes actual va más allá de la mera visualización - las computadoras ahora pueden materializar diseños digitales en objetos físicos a través de la <a href="'.$enlaces['terceraDimension'].'">tecnología de impresión 3D</a>.'
];

$formatosImagen = [
    'titulo' => 'Formatos Comunes de Archivos de Imagen',
    'intro' => 'Hay numerosos formatos de archivo de imagen, cada uno diseñado para usos específicos. Puede aprender más sobre los principales formatos de archivos gráficos a través de esta <a href="'.$enlaces['formatoArchivos'].'">guía completa</a>.'
];

$textoCierre = [
    'titulo'=>'Exploración adicional',
    'texto' => 'El campo de los gráficos por computadora y el procesamiento de imágenes es vasto y está en constante evolución. Te animamos a explorar temas como el trazado de rayos, los gráficos vectoriales, las imágenes rasterizadas, la teoría del color y los últimos avances en renderizado en tiempo real. Comprender estos conceptos puede proporcionar una visión más profunda de cómo funciona el procesamiento digital de imágenes moderno y hacia dónde se dirige la tecnología.'
];

?>