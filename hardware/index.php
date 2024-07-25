<?php
if (isset($_GET['cpu'])) :
    $title="CPU";
elseif (isset($_GET['ram'])) :
    $title="RAM";
else:
$title="Hardware";
endif;

$directoryPath = '../';
$lang = 'en';
$hardware ='active';

include ('../include/_code/page.php');

function content(){

    $include_path = '../include/_works/hardware/';

if (isset($_GET)) :
    switch (key($_GET)) :
        case 'cpu':
            include ('../hardware/cpu.php');
            include ($include_path . 'cpu.php');
            break;
        case 'cooling':
            include ($include_path . 'cooling.php');
            break;
        case 'chassis':
            include ($include_path . 'chassis.php');
            break;
        case 'gpu':
            include ($include_path . 'gpu.php');
            break;
        case 'psu':
            include ($include_path . 'psu.php');
            break;
        case 'motherboard':
            include ($include_path . 'motherboard.php');
            break;
        case 'ssd':
            include ($include_path . 'ssd.php');
            break;
        case 'ram':
            include ($include_path . 'ram.php');
            break;
        case 'mouse':
        case 'computer_mouse':
            include ($include_path . 'mouse.php');
            break;
        case 'keyboard':
            include ($include_path . 'keyboard.php');
            break;
        case 'display':
            include ($include_path . 'display.php');
            break;
        case 'external_memory_drives':
        case 'external_drives':
            include ($include_path . 'external_memory_drives.php');
            break;
        case 'pci_cards':
        case 'pci':
            include ($include_path . 'pci_cards.php');
            break;
        case 'power_supply':
            include ($include_path . 'power_supply.php');
            break;
        case 'scanners':
            include ($include_path . 'scanners.php');
            break;
        case 'printers':
        case 'printer':
            include ($include_path . 'printers.php');
            break;
        case 'ontrollers':
            include ($include_path . 'controllers.php');
            break;
        case 'cc':
            include ($include_path . 'console_controllers.php');
            break;
        case 'joystick':
        case 'joysticks':
            include ($include_path . 'joystick.php');
            break;
        case 'tablets':
            include ($include_path . 'tablets.php');
            break;
        case 'microphones':
        case 'microphone':
            include ($include_path . 'microphones.php');
            break;
        case 'headsets':
            include ($include_path . 'headsets.php');
            break;
        case 'headphones':
            include ($include_path . 'headphones.php');
            break;
        case 'audio_mixers':
        case 'audiomixer':
            include ($include_path . 'audio_mixers.php');
            break;
        case 'gaming_uniforms':
        case 'uniforms':
            include ($include_path . 'gaming_uniforms.php');
            break;
        case 'pens_pencils_tablets':
        case 'pens_and_pencils_and_stylus':
            include ($include_path . 'pens_pencils_tablets.php');
            break;
        case 'chairs':
            include ($include_path . 'chairs.php');
            break;
        case 'desks':
            include ($include_path . 'desks.php');
            break;
        case 'anti_slip_mats':
        case 'antislipmats':
            include ($include_path . 'anti_slip_mats.php');
            break;
        case 'speakers_and_subwoofers':
            include ($include_path . 'speakers_and_subwoofers.php');
            break;
        default:
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
            break;
    endswitch;
endif;

}
?>
