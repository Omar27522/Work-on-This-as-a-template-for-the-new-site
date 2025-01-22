<?php
$title="Imaging";

$subTitles = [
    'The Evolution of Computer Graphics',
    '2D Graphics: The Foundation',
    '3D Graphics: Adding Depth',
    'Digital Photography and Imaging Hardware',
    'Modern Display Technologies',
    'Virtual and Augmented Reality',
    'Modern Computer Imaging'
];

$images = [
    'girl'=>['https://www.w3schools.com/w3images/photographer.jpg','Photographer']
];

$sight = [
    'Sight is one of the primary senses humans use to make sense of the world.',
    'When light reflects off an object, the eyes detect light variations, then the brain processes this information to create a personal experience of perceived reality trough <b>vision</b>.',
    'I\'d say, if an object is visible to an observer, the object\'s existence can be further confirmed by testing it with the other senses, such as <b>touch</b>, <b>sound</b>, <b>taste</b>, and <b>smell</b>, etc...'
];

$evolution = [
    'The history of computer graphics dates back to the 1950s, beginning with the Whirlwind computer at MIT which used a CRT display for output. In 1963, Ivan Sutherland revolutionized the field with Sketchpad, the first computer-aided design program. The 1970s saw the birth of 2D computer graphics in commercial applications, while the 1980s brought us breakthrough developments in 3D graphics and animation. The 1990s witnessed the rise of dedicated graphics processing units (GPUs), leading to today\'s photorealistic rendering capabilities and real-time 3D graphics.'
];

$graphics2D = ['2D graphics form the basis of digital imaging, consisting of pixels arranged in a two-dimensional grid. These graphics include everything from basic user interfaces to digital art and photographs. Vector graphics, another form of 2D imaging, use mathematical equations to create scalable images that maintain quality at any size. Common applications include logo design, typography, and technical illustrations.'];

$graphics3D = [
    'thirdD' => '3D graphics introduce the z-axis, creating virtual objects with depth, volume, and perspective. Modern 3D graphics utilize complex techniques like:',
    'first' => 'Polygon mesh modeling for creating object shapes',
    'second' => 'Texture mapping for adding surface details',
    'third' => 'Ray tracing for realistic lighting and shadows',
    'fourth' => 'Real-time rendering for interactive experiences',
    'thirdDLast' => 'These technologies power everything from video games to architectural visualization and scientific simulations.',
];

$digitalPhotography = [
    'photo'=>'Digital photography represents a crucial aspect of modern imaging technology.',
    'include'=>'Key components include:',
    'sensor'=>[
        'image'=>'Image Sensors',
        'type'=>'At the heart of digital cameras are two main types of image sensors:',
        'ccd'=>['strong'=>'CCD (Charge-Coupled Device):',
            'pro'=>'Known for high-quality images with less noise, traditionally used in professional cameras'],
        'cmos'=>['strong'=>'CMOS (Complementary Metal-Oxide Semiconductor):',
            'pro'=>'More energy-efficient and cheaper to manufacture, now the dominant technology in most modern cameras'],
        'sensors'=>'These sensors convert light into electrical signals through millions of photosites (pixels).'
    ],
    'keyComponents'=>'Key Photography Components',
    'elements'=>'Several elements work together to create digital images:',
    'components'=>[
        'lens'=>['Lens System:','Controls focus, zoom, and light gathering through adjustable
                        apertures'],
        'processor'=>['Image Processor:','Converts sensor data into digital images, handling tasks like noise reduction and color processing'],
        'resolution'=>['Resolution:','Measured in megapixels, determining the detail level of captured images'],
        'range'=>['Dynamic Range:','The camera\'s ability to capture both bright and dark areas in a single shot']
    ]
];

?>