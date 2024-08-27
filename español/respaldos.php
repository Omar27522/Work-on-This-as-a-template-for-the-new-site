<?php
$titulos = [
    "Copia de Seguridad",
    "Algunos tipos comunes de copias de seguridad incluyen",
    "Copias de seguridad completas",
    "Copias de seguridad incrementales",
    "Copias de seguridad diferenciales",
    "Copias de seguridad espejo",
    "En el sitio",
    "Fuera del sitio",
    "Nube",
    "Copia de seguridad en el sitio",
    "Copia de seguridad fuera del sitio",
    "Copia de seguridad en línea",
    "volver a la parte superior",
];

$introx = [
    "Una copia de seguridad es una copia de datos que se puede usar para restaurar los datos originales en caso de que se pierdan o dañen.",
    "Las copias de seguridad son importantes porque le permiten recuperarse de la pérdida de datos debido a accidentes, fallas de hardware, corrupción de software u otras causas.",
    "Hay muchos enfoques diferentes para hacer copias de seguridad de datos, y el mejor enfoque dependerá de sus necesidades y recursos específicos.",

    "completo" =>
        "Estas copias de seguridad incluyen una copia completa de todos los datos. Las copias de seguridad completas pueden llevar mucho tiempo crear y restaurar, pero proporcionan un registro completo de todos los datos y son útiles para la recuperación de desastres.",

    "incremental" =>
        "Estas copias de seguridad solo incluyen los cambios realizados desde la última copia de seguridad. Las copias de seguridad incrementales son más rápidas de crear y restaurar que las copias de seguridad completas, pero pueden no proporcionar tanta protección en caso de un desastre.",

    "diferencial" =>
        "Estas copias de seguridad incluyen todos los cambios realizados desde la última copia de seguridad completa. Las copias de seguridad diferenciales son similares a las copias de seguridad incrementales en que solo incluyen cambios, pero proporcionan más protección que las copias de seguridad incrementales porque incluyen todos los cambios realizados desde la última copia de seguridad completa.",

    "espejo" =>
        "Estas copias de seguridad crean una copia exacta de los datos que se están respaldando. Las copias de seguridad espejo son útiles para restaurar rápidamente los datos, pero pueden no ser tan completas como otros tipos de copias de seguridad.",

    "outro" =>
        "Generalmente se recomienda crear copias de seguridad de forma regular y almacenarlas en un lugar seguro, como un disco duro externo o un servicio de almacenamiento basado en la nube. Esto garantizará que tenga acceso a sus datos en caso de emergencia.",

    "en-sitio" => [
        "la copia de seguridad es fácil de configurar, los datos son convenientes para acceder y no se requiere conexión a Internet para hacer copias de seguridad o restaurar datos.",

        'Almacenar datos en un medio físico, hoy en día los discos duros portátiles y las unidades flash son las formas más comunes de hacer copias de seguridad de datos.
                        Digamos que tenía 2 discos duros en su computadora, uno puede ser su disco duro principal y el otro puede ser su copia de seguridad, si su disco duro fallara,
                        entonces todo lo que hay que hacer es restaurar los datos en un nuevo disco duro desde la copia de seguridad. y de esta manera el tiempo de inactividad que experimentará será mínimo
                        el último ejemplo fue un escenario del peor caso, los discos duros son lo suficientemente inteligentes como para informar a la computadora cuando tienen errores y que podrían fallar.',
    ],

    "fuera-de-sitio" => [
        'la copia de seguridad consiste esencialmente en guardar los datos en una unidad de memoria u otro dispositivo,
                                y llevar el dispositivo a un lugar diferente lejos de la ubicación principal.',

        'Almacenar datos en un medio físico, hoy en día los discos duros portátiles y las unidades flash son las formas más comunes de hacer copias de seguridad de datos.
                                Digamos que tenía 2 discos duros en su computadora y la información es tan importante que una copia de seguridad no es suficiente, porque todos los datos están en un solo lugar
                                existe el riesgo de perder los datos y la copia de seguridad al mismo tiempo, se puede evitar esto llevando la copia de seguridad fuera del edificio
                                para que sea más seguro en caso de un desastre que pueda llevarse sus datos principales con él. la ventaja de la copia de seguridad fuera del sitio es que se puede
                                restaurar los datos en una nueva computadora desde la copia de seguridad fuera del sitio. y de esta manera el tiempo de inactividad que experimentará será mínimo.
                                el último ejemplo fue un escenario del peor caso, las unidades de disco duro son lo suficientemente inteligentes como para informar a la computadora cuando tienen errores y que podrían fallar, y tener en cuenta que se necesitará una unidad de reemplazo.',
    ],

    "nube" => [
        "la copia de seguridad requiere una conexión a Internet para acceder al espacio en la nube donde se almacenan los datos, es simple y se puede acceder a los datos desde cualquier lugar.",

        "Almacenar datos en Internet, de esa manera, si necesitara un archivo, simplemente puede iniciar sesión y recuperar el archivo de su cuenta de copia de seguridad en línea. hay servicios que hacen copias de seguridad de sus datos automáticamente en línea, la mayoría de los servicios gratuitos tienen espacio y capacidades limitadas.",
    ],
];
?>
