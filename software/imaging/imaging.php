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

$links = [
    'thirdDimension'=>'https://all3dp.com/2/3d-file-format-3d-model-types/',
    'graphicFileFormats'=>'https://www.adobe.com/creativecloud/file-types/image/raster.html',
    'sight'=>'https://www.livescience.com/60752-human-senses.html#section-sense-of-sight',
    'optics'=>'https://en.wikipedia.org/wiki/Optics',
    'vision'=>'https://en.wikipedia.org/wiki/Visual_perception',
    'mit'=>'https://mitmuseum.mit.edu/collections/object/2000.006.001',
    'whirlwind'=>'https://en.wikipedia.org/wiki/Whirlwind_I',
    'ivanSutherland'=>'https://en.wikipedia.org/wiki/Ivan_Sutherland',
    'sketchPad'=>'https://en.wikipedia.org/wiki/Sketchpad',
    'graphics1970'=>'https://danielsevo.com/hocg/hocg_1970.htm',
    'graphics1980'=>'https://danielsevo.com/hocg/hocg_1980.htm',
    'animation'=>'https://en.wikipedia.org/wiki/History_of_computer_animation#Towards_3-D:_mid-1970s_into_the_1980s',
    'gpu'=>'https://www.techspot.com/article/650-history-of-the-gpu/',
    'realTimeGraphics'=>'https://www.advances.realtimerendering.com/',
    'photoRealism'=>'https://www.theartstory.org/movement/photorealism/',
    'vector'=>'https://www.techtarget.com/whatis/definition/vector-graphics',
    'twoD'=>'https://www.velocenetwork.com/tech/what-is-a-2d-computer-graphic/',
    'threeD'=>'https://blog.zwsoft.com/3d-computer-graphics/',
    'logo'=>'https://en.wikipedia.org/wiki/Logo',
    'typography'=>'https://en.wikipedia.org/wiki/Typography',
    'technicalIllustrations'=>'https://en.wikipedia.org/wiki/Technical_illustration',
    'polygons'=>'https://ikarus3d.com/media/3d-blog/a-comprehensive-guide-to-polygonal-modeling/',
    'rayTracing'=>'https://en.wikipedia.org/wiki/Ray_tracing_(graphics)',
    'realtimeRendering'=>'https://en.wikipedia.org/wiki/Real-time_computer_graphics',
    'digitalPhotography'=>'https://en.wikipedia.org/wiki/Digital_photography',
    'sensors'=>'https://petapixel.com/2025/02/03/the-60-year-history-of-digital-image-sensors-as-told-by-those-involved/',
    'textureMapping'=>'https://en.wikipedia.org/wiki/Texture_mapping',
    'display'=>'../../hardware/?monitor#monitor',
    'arVr'=>'../../hardware/?headset',
    'mri'=>'https://www.healthline.com/health/what-is-a-mri#what-it-is',
    'ct'=>'https://my.clevelandclinic.org/health/diagnostics/4808-ct-computed-tomography-scan',
    'satelliteImaging'=>'https://business.esa.int/newcomers-earth-observation-guide',
    'aiImaging'=>'https://www.spectral-ai.com/blog/the-intelligent-revolution-ai-in-medical-imaging-and-diagnostics/',
    'dataQuality'=>'https://research.aimultiple.com/data-quality-ai/',
    'ethicalConcerns'=>'https://hbr.org/2024/05/ais-trust-problem',
    'rasterImages'=>'https://en.wikipedia.org/wiki/Raster_graphics',
    'colorTheory'=>'https://www.colorsexplained.com/color-theory/',

    //don't forget the links have titles. an imagesTitles variable will be needed for this feat, because Im not using arrays like last time. Last time was fun right? I bet it was, supposedly im done, so I don't have to look at old code ever again. hahhahahahah 🙃 I love PHP, write it once Forget it for a cool lustrum.
];

$images = [
    'girl'=>['https://www.w3schools.com/w3images/photographer.jpg','Photographer']
];

$sight = [
    '<a href="'.$links['sight'].'">Sight</a> is one of the primary senses humans use to make sense of the world.',
    'When <a href="'.$links['optics'].'">light reflects off an object</a>, the eyes detect light variations, then the brain processes this information to create a personal experience of perceived reality trough <b><a href="'.$links['vision'].'">vision</a></b>.',
    'I\'d say, if an object is visible to an observer, the object\'s existence can be further confirmed by testing it with the other senses, such as <b>touch</b>, <b>sound</b>, <b>taste</b>, and <b>smell</b>, etc...'
];

$evolution = [
    'The history of computer graphics dates back to the 1950s, beginning with the <a href="'.$links['whirlwind'].'">Whirlwind computer</a> at <a href="'.$links['mit'].'">MIT</a> which used a CRT display for output. In 1963, <a href="'.$links['ivanSutherland'].'">Ivan Sutherland</a> revolutionized the field with <a href="'.$links['sketchPad'].'">Sketchpad</a>, the first computer-aided design program. The 1970s saw the birth of <a href="'.$links['graphics1970'].'">2D computer graphics</a> in commercial applications, while the 1980s brought us breakthrough developments in <a href="'.$links['graphics1980'].'">3D graphics</a> and <a href="'.$links['animation'].'">animation</a>. The 1990s witnessed the rise of dedicated <a href="'.$links['gpu'].'">graphics processing units</a> (GPUs), leading to today\'s <a href="'.$links['photoRealism'].'">photorealistic</a> rendering capabilities and <a href="'.$links['realTimeGraphics'].'">real-time 3D graphics</a>.'
];

$graphics2D = ['<a href="'.$links['twoD'].'">2D graphics</a> form the basis of digital imaging, consisting of pixels arranged in a two-dimensional grid. These graphics include everything from basic user interfaces to digital art and photographs. <a href="'.$links['vector'].'">Vector graphics</a>, another form of 2D imaging, use mathematical equations to create scalable images that maintain quality at any size. Common applications include <a href="'.$links['logo'].'">logo</a> design, <a href="'.$links['typography'].'">typography</a>, and <a href="'.$links['technicalIllustrations'].'">technical illustrations</a>.'];

$graphics3D = [
    'thirdD' => '<a href="'.$links['threeD'].'">3D graphics</a> introduce the z-axis, creating virtual objects with depth, volume, and perspective. Modern 3D graphics utilize complex techniques like:',
    'first' => 'Polygon mesh <a href="'.$links['polygons'].'">modeling</a> for creating object shapes',
    'second' => '<a href="'.$links['textureMapping'].'">Texture mapping</a> for adding surface details',
    'third' => '<a href="'.$links['rayTracing'].'">Ray tracing</a> for realistic lighting and shadows',
    'fourth' => '<a href="'.$links['realtimeRendering'].'">Real-time rendering</a> for interactive experiences',
    'thirdDLast' => 'These technologies power everything from video games to architectural visualization and scientific simulations.',
];

$digitalPhotography = [
    'photo'=>'Digital <a href="'.$links['digitalPhotography'].'">photography</a> represents a crucial aspect of modern imaging technology.',
    'include'=>'Key components include:',
    'sensor'=>[
        'image'=>'Image Sensors',
        'type'=>'At the heart of digital cameras are two main types of image sensors:',
        'ccd'=>['strong'=>'CCD (Charge-Coupled Device):',
            'pro'=>'Known for high-quality images with less noise, traditionally used in professional cameras'],
        'cmos'=>['strong'=>'CMOS (Complementary Metal-Oxide Semiconductor):',
            'pro'=>'More energy-efficient and cheaper to manufacture, now the dominant technology in most modern cameras'],
        'sensors'=>'These <a href="'.$links['sensors'].'">sensors</a> convert light into electrical signals through millions of photosites (pixels).'
    ],
    'keyComponents'=>'Key Photography Components',
    'elements'=>'Several elements work together to create digital images:',
    'components'=>[
        'lens'=>['Lens System:','Controls focus, zoom, and light gathering through adjustable apertures'],
        'processor'=>['Image Processor:','Converts sensor data into digital images, handling tasks like noise reduction and color processing'],
        'resolution'=>['Resolution:','Measured in megapixels, determining the detail level of captured images'],
        'range'=>['Dynamic Range:','The camera\'s ability to capture both bright and dark areas in a single shot'],
        'keyComponentsSection'=>[
            'lens'=>['Lens System:','Controls focus, zoom, and light gathering through adjustable apertures'],
            'processor'=>['Image Processor:','Converts sensor data into digital images, handling tasks like noise reduction and color processing'],
            'resolution'=>['Resolution:','Measured in megapixels, determining the detail level of captured images'],
            'range'=>['Dynamic Range:','The camera\'s ability to capture both bright and dark areas in a single shot']
        ]
    ]
];

$digitalProcessing = [
    'title' => 'Digital Image Processing',
    'intro' => 'After capture, images go through several processing steps:',
    'steps' => [
        'raw' => ['RAW Processing:', 'Converting raw sensor data into viewable images'],
        'color' => ['Color Correction:', 'Adjusting white balance and color accuracy'],
        'noise' => ['Noise Reduction:', 'Removing digital artifacts and sensor noise'],
        'compression' => ['Compression:', 'Optimizing file size while maintaining image quality']
    ]
];

$displayTech = [
    'intro' => 'Today\'s <a href="'.$links['display'].'">display</a> technology has evolved dramatically, offering unprecedented visual experiences:',
    'technologies' => [
        'refresh' => [
            'title' => 'High Refresh Rates',
            'description' => 'Modern displays can achieve 144Hz, 240Hz, or even higher, providing smoother motion and reducing motion blur'
        ],
        'resolution' => [
            'title' => 'Resolution',
            'description' => 'From 4K (3840x2160) to 8K (7680x4320) resolutions, displays now offer incredible detail and clarity'
        ],
        'hdr' => [
            'title' => 'HDR (High Dynamic Range)',
            'description' => 'Enhanced contrast and color accuracy, making images more vivid and lifelike'
        ],
        'oled' => [
            'title' => 'OLED and Mini-LED',
            'description' => 'Advanced display technologies offering perfect blacks, vibrant colors, and improved energy efficiency'
        ]
    ]
];

$immersiveTech = [
    'intro' => 'The latest frontier in computer graphics involves immersive technologies:',
    'technologies' => [
        'vr' => [
            'title' => 'Virtual Reality (VR)',
            'description' => 'Creating fully immersive digital environments for gaming, training, and virtual tours'
        ],
        'ar' => [
            'title' => 'Augmented Reality (AR)',
            'description' => 'Overlaying digital content onto the real world, enhancing our daily experiences'
        ],
        'mr' => [
            'title' => 'Mixed Reality (MR)',
            'description' => 'Blending virtual and real environments where digital and physical objects can interact'
        ]
    ],
    'conclusion' => 'These <a href="'.$links['arVr'].'">technologies</a> are revolutionizing fields from gaming and entertainment to education, healthcare, and professional training, pushing the boundaries of human-computer interaction.'
];

$imageFormats = [
    'title' => 'Common Image File Formats',
    'intro' => 'There are numerous image file formats, each designed for specific uses. You can learn more about the major graphic file formats through this <a href="'.$links['graphicFileFormats'].'">comprehensive guide</a>.'
];

$modernImaging = [
    'intro' => 'While traditional computer displays work in 2 dimensions, modern technology enables us to capture, process, and display images in increasingly sophisticated ways:',
    'applications' => [
        'medical' => [
            'title' => 'Medical Imaging',
            'description' => 'Advanced visualization techniques like <a href="'.$links['mri'].'">MRI</a> and <a href="'.$links['ct'].'">CT</a> scans provide detailed 3D views of the human body'
        ],
        'satellite' => [
            'title' => 'Satellite Imaging',
            'description' => 'High-resolution earth observation satellites capture detailed <a href="'.$links['satelliteImaging'].'">images</a> for mapping, weather forecasting, and environmental monitoring'
        ],
        'ai' => [
            'title' => 'AI-Enhanced Imaging',
            'description' => 'AI and machine learning are changing medical <a href="'.$links['aiImaging'].'">imaging</a> by making pictures clearer, analyzing them faster, and allowing for new ways to use them. AI improves techniques like MRI and CT scans by reducing noise and enhancing details. While AI offers many benefits, there are still challenges like <a href="'.$links['dataQuality'].'">data quality</a> and <a href="'.$links['ethicalConcerns'].'">ethical concerns</a> to consider.'
        ]
        ],
 'conclusion'=>'Today\'s imaging technology extends beyond mere display - computers can now materialize digital designs into
            physical objects through <a href="'.$links['thirdDimension'].'">3D Printing
                technology</a>.'
];

$closingText = [
    'title'=>'Further Exploration',
    'text' => 'The field of computer graphics and imaging is vast and constantly evolving. We encourage you to explore topics like <b>ray tracing</b> <small>[<a href="'.$links['rayTracing'].'">1</a>]</small>, <b>vector graphics</b> <small>[<a href="'.$links['vector'].'">1</a>]</small>, <b>raster images</b> <small>[<a href="'.$links['rasterImages'].'">1</a>]</small>, <b>color theory</b> <small>[<a href="'.$links['colorTheory'].'">1</a>]</small>, and the latest developments in <b>real-time rendering</b> <small>[<a href="'.$links['realtimeRendering'].'">1</a>]</small> <small>[<a href="'.$links['realTimeGraphics'].'">2</a>]</small>. Understanding these concepts can provide deeper insights into how modern digital imaging works and where the technology is headed.'
];

?>