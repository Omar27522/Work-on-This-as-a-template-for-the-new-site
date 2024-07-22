<?php
$title="Hardware";
$directoryPath = '../';
$lang = 'en';
$hardware ='active';

include ('../include/_code/page.php');

function content(){
    $title="<h2>The Hardware is the computer — it&#39;s physical components.</h2>";

    $description ="<p>These components may include the computer&#39;s
		functionality, design, materials, innovations, thermals, etc.<br />A computer is an electronic device that
		manipulates data or information. It has the ability to store,retrieve, and process data.<p>     <!--https://unsplash.com/photos/2sILr4DwabQ-->
		<h3><a href=\"https://latinospc.com/hardware/?anatomy_of_a_computer#navi\">The anatomy of a computer</a> typically includes,
    <a href=\"https://latinospc.com//hardware/?notebooks#navi\">Laptops</a>, Portable, Smart Devices, Modular PC\'s, ETC.</h3>";

    $contentSubTitles= ["Computer Parts",       "Central Processing Unit (CPU):",       "Memory (RAM):",        "Memory Storage Drive (hard drive, SSD):",
                            "Motherboard:",        "Power Supply Unit (PSU):",      "GPU:",       "Chassis:",       "Coolers",      "Input/Output devices:", "Peripheral devices:"  ];

    $content=['CPU' =>  "The \"brain\" of the computer, responsible for carrying out instructions of computer programs.",
                'RAM' =>  "Stores data that the CPU uses in the short-term.",
                    'HDD' =>  "Persistently stores data, even when the computer is powered off.",
                        'Motherboard' =>  "The main circuit board in a computer, which houses the CPU, memory, and other components.&nbsp;",
                            'PSU' =>  "Converts AC power from a wall outlet into DC power used by the computer.",
                                'GPU' =>  "specialized Graphic Processing Unit (GPU) that handles the computational heavy lifting needed for tasks.&nbsp ",
                                    'Chassis' =>  "Houses all the internal components a computer needs.",
                                        'Coolers' =>  "Help to regulate the temperature of the central processing unit (CPU) and other critical components of the computer.",
                'I/O' =>  "Allow data to be input into the computer (such as a keyboard and mouse) and output from the computer (such as a display and speakers).&nbsp",
                'Peripherals' =>  "Additional hardware connected to a computer, such as printers, scanners, and external hard drives.&nbsp"
             ];
    $peripherals = [
    "Mouse",
    "Keyboard",
    "Display",
    "External Memory Drives",
    "PCI Cards",
    "Power Supply",
    "Cooling",
    "GPU",
    "Scanners",
    "Printers",
    "Console Controllers",
    "Joystick",
    "Tablets",
    "Microphones",
    "Headsets",
    "Headphones",
    "Audio Mixers",
    "Controllers",
    "Gaming Uniforms",
    "Pens, Pencils & Tablets",
    "Chairs",
    "Desks",
    "Anti-Slip Mats",
    "Speakers and Subwoofers",
    "Peripherals",
];



    include ('../include/_works/hardware.php');

}
?>
