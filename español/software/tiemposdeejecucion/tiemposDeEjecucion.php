<?php
$titulo = "Entendiendo los tiempos de ejecución:<br />La magia detrás de tus aplicaciones";
$pregunta="¿Te has preguntado por qué algunas aplicaciones funcionan sin problemas mientras que otras se sienten lentas? ¿O por qué el mismo juego podría funcionar perfectamente en el teléfono de tu amigo pero en el tuyo tiene dificultades? La respuesta se encuentra en algo llamado \"tiempo de ejecución\" - el director invisible que orquesta todo lo que hacen tus aplicaciones.";
$enlaces=[
    'programacion'=>'https://es.wikipedia.org/wiki/Historia_de_los_lenguajes_de_programaci%C3%B3n',
    'movil'=>'https://es.wikipedia.org/wiki/Videojuego_para_m%C3%B3viles',
];
$subtitulos = [
    '¿Qué es el tiempo de ejecución? — Piénsalo como una cocina.',
    '¿Cómo funciona el tiempo de ejecución?',
    '🌟 ¡Dato Curioso!',
    'Por qué algunas aplicaciones funcionan mejor que otras',
    '',
];
$cocina = [
    'Imagina tu computadora como una cocina de restaurante muy ocupada:',
    'chef' => ['El chef', '(entorno de ejecución)', 'coordina todo'],
    'receta' => ['La receta', '(código del programa)', 'indica lo que debe hacerse'],
    'ingredientes' => ['Los ingredientes', '(datos)', 'son con lo que estás trabajando'],
    'herramientas' => ['Las herramientas de cocina', '(recursos del sistema)', 'ayudan a terminar el trabajo'],
    'justo' => 'Así como una cocina necesita que todos estos elementos trabajen juntos para servir platillos, tus aplicaciones necesitan un entorno de ejecución para funcionar.',
    'como'=>'Cada <a href="'.$enlaces['programacion'].'">lenguaje de programación</a> necesita su propio entorno de ejecución especial. Piénsalo como diferentes tipos de cocinas: un restaurante de sushi necesita herramientas diferentes a una pizzería, ¡pero ambos hacen comida deliciosa!',
    '',

];
$datoCurioso='Cuando juegas un juego en el <a href="'.$enlaces['movil'].'">móvil</a>, el entorno de ejecución maneja millones de pequeñas tareas cada segundo - desde asegurarse de que tu personaje salte cuando tocas la pantalla, hasta llevar la cuenta de tu puntuación, todo mientras se asegura de que la batería de tu teléfono no se descargue demasiado rápido.';
$complejidad = [
    '1. Complejidad de la aplicación',
    'Las aplicaciones simples (como una calculadora) son como hacer una tostada: rápido y fácil. Los juegos complejos son como preparar una comida de cinco platos: necesitan más tiempo y recursos.',
    '',
];
?>