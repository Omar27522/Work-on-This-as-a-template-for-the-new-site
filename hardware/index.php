<?php
//The URL contains a ? preceding the value. each value corresponds to a title in the site.
# URL: ?psu    =>   The title will be "PSU".

$hardwareTitles = [
'cc'   => 'Console Controllers',
'cpu'  => 'CPU',
'ram'  => 'RAM',
'ssd'  => 'SSD',
'psu'  => 'PSU',
'gpu'  => 'Graphics Cards',
'pci'  => 'PCI Cards',
'mouse' => 'Mouse',
'desk'  => 'Desks',
'chair'  => 'Chairs',
'cooling'=> 'Cooling',
'tablet' => 'Tablets',
'micro'  => 'Microphones',
'monitor' => 'Display',
'headset' => 'Headsets',
'printer' => 'Printers',
'scanner' => 'Scanners',
'chassis'  => 'Computer Case',
'keyboard'  => 'Keyboard',
'joystick'  => 'Joysticks',
'headphone' => 'Headphones',
'p_memory'  => 'Portable Memory',
'controller' => 'Controllers',
'audiomixer' => 'Audio Mixers',
'motherboard' => 'Motherboard',
'pencil' => 'Pens, Pencils and Tablets',
'antislipmats' => 'Anti-Slip Mats',
'speakers_and_subwoofers' => 'Speakers and Subwoofers',
'team_uniformity_authority' => 'Uniforms'
];

$title = 'Hardware'; // Default title
foreach ($hardwareTitles as $key => $value) {
    if (isset($_GET[$key])) {
        $title = $value;
        break;
    }
}

$directoryPath = '../';
$hardware ='active';
// Keywords and descriptions.
if (isset($_GET)) :
    switch (key($_GET)) :
        case 'cpu':
            $keywords = '<meta name="keywords" content="CPU, Processor, Computer Processor, CPU Models, CPU Specs, CPU Performance, Desktop CPU, Laptop CPU, Intel CPU, AMD CPU, Multi-core CPU, CPU Cooling">';
            $description = '<meta name="description" content="Discover a variety of CPUs including Intel and AMD processors. Explore different models and specifications to find the perfect CPU for your desktop or laptop. Learn about CPU performance, multi-core options, and cooling solutions to enhance your computing experience.">';
            break;
        case 'ram':
            $keywords = '<meta name="keywords" content="RAM, Computer Memory, DDR4 RAM, DDR5 RAM, RAM Modules, Memory Upgrade, High-Speed RAM">';
            $description = '<meta name="description" content="Upgrade your computer with high-quality RAM modules. Explore our range of DDR4 and DDR5 RAM for enhanced performance and speed. Find the right memory upgrade for your system.">';
            break;
        case 'cooling':
            $keywords = '<meta name="keywords" content="Cooling, Fans, Heatsinks, Thermal Paste, Cooling Solutions">';
            $description = '<meta name="description" content="Explore various cooling solutions including fans, heatsinks, and thermal paste to keep your computer components running cool and efficiently.">';
            break;
        case 'chassis':
            $keywords = '<meta name="keywords" content="Chassis, Computer Case, Tower Case, Mid Tower, Full Tower, Case Fans">';
            $description = '<meta name="description" content="Find the perfect computer chassis for your build, including tower cases, mid towers, and full towers. Choose from a variety of designs and features.">';
            break;
        case 'gpu':
            $keywords = '<meta name="keywords" content="GPU, Graphics Card, Video Card, NVIDIA, AMD, Gaming GPU">';
            $description = '<meta name="description" content="Browse our selection of GPUs and graphics cards, including options from NVIDIA and AMD. Find the right GPU for gaming, creative work, and more.">';
            break;
        case 'psu':
        case 'power_supply':
            $keywords = '<meta name="keywords" content="PSU, Power Supply, Computer Power Supply, Wattage, Modular PSU, Non-Modular PSU">';
            $description = '<meta name="description" content="Choose the right power supply unit (PSU) for your computer. We offer modular and non-modular PSUs with various wattages to suit your needs.">';
            break;
        case 'motherboard':
            $keywords = '<meta name="keywords" content="Motherboard, Mainboard, Computer Motherboard, ATX, Micro ATX, Chipset">';
            $description = '<meta name="description" content="Find a wide range of motherboards for your computer build, including ATX, Micro ATX, and other form factors. Explore different chipsets and features.">';
            break;
        case 'ssd':
            $keywords = '<meta name="keywords" content="SSD, Solid State Drive, SSD Storage, SATA SSD, NVMe SSD">';
            $description = '<meta name="description" content="Upgrade your computer with a solid-state drive (SSD) for faster performance and reliability. Choose from SATA SSDs and NVMe SSDs.">';
            break;
        case 'ram':
            $keywords = '<meta name="keywords" content="RAM, Memory, Computer RAM, DDR4, DDR5, Memory Modules">';
            $description = '<meta name="description" content="Enhance your computer’s performance with high-quality RAM. Find DDR4 and DDR5 memory modules for various applications and needs.">';
            break;
        case 'mouse':
        case 'computer_mouse':
            $keywords = '<meta name="keywords" content="Mouse, Computer Mouse, Gaming Mouse, Wireless Mouse, Wired Mouse">';
            $description = '<meta name="description" content="Discover a range of computer mice including gaming mice, wireless and wired options. Find the perfect mouse for your needs.">';
            break;
        case 'keyboard':
            $keywords = '<meta name="keywords" content="Keyboard, Computer Keyboard, Mechanical Keyboard, Membrane Keyboard, Gaming Keyboard">';
            $description = '<meta name="description" content="Explore our selection of computer keyboards, including mechanical, membrane, and gaming keyboards. Choose the right keyboard for your typing and gaming needs.">';
            break;
        case 'display':
        case 'monitor':
            $keywords = '<meta name="keywords" content="Display, Monitor, Computer Monitor, LCD Monitor, LED Monitor, 4K Monitor">';
            $description = '<meta name="description" content="Find the ideal monitor for your setup, including LCD, LED, and 4K displays. Explore various sizes and resolutions to fit your needs.">';
            break;
        case 'external_memory_drives':
        case 'p_memory':
        case 'external_drives':
            $keywords = '<meta name="keywords" content="External Drives, External Memory, USB Drives, External Hard Drives, SSD External Drives">';
            $description = '<meta name="description" content="Browse our external drives for additional storage needs. Choose from USB drives, external hard drives, and SSD external drives.">';
            break;
        case 'pci_cards':
        case 'pci':
            $keywords = '<meta name="keywords" content="PCI Cards, Expansion Cards, Graphics Cards, Sound Cards, Network Cards">';
            $description = '<meta name="description" content="Enhance your computer with PCI cards including graphics, sound, and network cards. Expand your system’s capabilities with our selection.">';
            break;
        case 'scanner':
            $keywords = '<meta name="keywords" content="Scanner, Document Scanner, Flatbed Scanner, Sheetfed Scanner">';
            $description = '<meta name="description" content="Find the perfect scanner for your needs, including document scanners, flatbed scanners, and sheetfed scanners for home or office use.">';
            break;
        case 'printers':
        case 'printer':
            $keywords = '<meta name="keywords" content="Printer, Computer Printer, Inkjet Printer, Laser Printer, Multifunction Printer">';
            $description = '<meta name="description" content="Explore our range of printers including inkjet, laser, and multifunction models. Find the right printer for your home or office needs.">';
            break;
        case 'controller':
            $keywords = '<meta name="keywords" content="Controller, Game Controller, Gamepad, Gaming Controller">';
            $description = '<meta name="description" content="Discover various game controllers and gamepads for an enhanced gaming experience. Find controllers compatible with your system and games.">';
            break;
        case 'cc':
            $keywords = '<meta name="keywords" content="Console Controllers, Gaming Console Controllers, Xbox Controllers, PlayStation Controllers">';
            $description = '<meta name="description" content="Browse our selection of console controllers including Xbox and PlayStation controllers. Find the perfect controller for your gaming console.">';
            break;
        case 'joystick':
        case 'joysticks':
            $keywords = '<meta name="keywords" content="Joystick, Computer Joystick, Gaming Joystick, Flight Stick">';
            $description = '<meta name="description" content="Find high-quality joysticks and flight sticks for gaming and simulation. Enhance your gaming experience with precise control and feedback.">';
            break;
        case 'tablet':
            $keywords = '<meta name="keywords" content="Tablet, Computer Tablet, Android Tablet, iOS Tablet, Windows Tablet">';
            $description = '<meta name="description" content="Explore our range of tablets including Android, iOS, and Windows tablets. Find the perfect tablet for productivity, entertainment, and more.">';
            break;
        case 'microphones':
        case 'micro':
        case 'microphone':
            $keywords = '<meta name="keywords" content="Microphone, Computer Microphone, USB Microphone, Condenser Microphone, Dynamic Microphone">';
            $description = '<meta name="description" content="Choose from a variety of microphones including USB, condenser, and dynamic types for clear audio recording and communication.">';
            break;
        case 'headset':
            $keywords = '<meta name="keywords" content="Headset, Computer Headset, Gaming Headset, Wireless Headset, Noise-Cancelling Headset">';
            $description = '<meta name="description" content="Discover our range of headsets including gaming, wireless, and noise-cancelling options for immersive sound and comfortable wear.">';
            break;
        case 'headphones':
        case 'headphone':
            $keywords = '<meta name="keywords" content="Headphones, Computer Headphones, Over-Ear Headphones, In-Ear Headphones, Bluetooth Headphones">';
            $description = '<meta name="description" content="Explore various headphones including over-ear, in-ear, and Bluetooth models for high-quality audio and comfort.">';
            break;
        case 'audio_mixers':
        case 'audiomixer':
            $keywords = '<meta name="keywords" content="Audio Mixer, Mixing Console, DJ Mixer, Audio Mixing Equipment">';
            $description = '<meta name="description" content="Find audio mixers and mixing consoles for professional sound mixing. Explore DJ mixers and other audio mixing equipment.">';
            break;
        case 'gaming_uniforms':
        case 'team_uniformity_authority':
        case 'uniforms':
            $keywords = '<meta name="keywords" content="Gaming Uniforms, Team Uniforms, eSports Uniforms, Gaming Apparel">';
            $description = '<meta name="description" content="Browse gaming uniforms and apparel for eSports and team events. Find high-quality uniforms and accessories for your gaming team.">';
            break;
        case 'pens_pencils_tablets':
        case 'pencil':
        case 'pens_and_pencils_and_stylus':
            $keywords = '<meta name="keywords" content="Pens, Pencils, Stylus, Writing Instruments, Drawing Tools">';
            $description = '<meta name="description" content="Discover a variety of writing instruments including pens, pencils, and styluses. Find tools for writing, drawing, and note-taking.">';
            break;
        case 'chair':
            $keywords = '<meta name="keywords" content="Chair, Computer Chair, Gaming Chair, Office Chair, Ergonomic Chair">';
            $description = '<meta name="description" content="Find comfortable and ergonomic chairs for your computer setup, including gaming chairs and office chairs. Improve your seating experience with our selection.">';
            break;
        case 'desk':
            $keywords = '<meta name="keywords" content="Desk, Computer Desk, Gaming Desk, Office Desk, Desk Setup">';
            $description = '<meta name="description" content="Explore a range of desks for your computer setup, including gaming and office desks. Find the perfect desk to fit your workspace and needs.">';
            break;
        case 'anti_slip_mats':
        case 'antislipmats':
            $keywords = '<meta name="keywords" content="Anti-Slip Mats, Desk Mats, Mouse Pads, Keyboard Mats">';
            $description = '<meta name="description" content="Browse anti-slip mats and desk mats to keep your workspace organized and prevent slipping. Find mouse pads and keyboard mats for added comfort.">';
            break;
        case 'speakers_and_subwoofers':
            $keywords = '<meta name="keywords" content="Speakers, Subwoofers, Computer Speakers, Surround Sound, Audio System">';
            $description = '<meta name="description" content="Enhance your audio experience with high-quality speakers and subwoofers. Explore options for computer speakers and surround sound systems.">';
            break;
            default:
            $keywords = '<meta name="keywords" content="CPU, RAM, HDD, SSD, MainBoard, PSU, I/O Devices, Peripherals, GPU, Chassis, Coolers, Mouse, Keyboard, Display, External Drives, PCI Cards, Scanners, Printers, Console Controllers, Joysticks, Tablets, Microphones, Headsets, Audio Mixer, Controllers, Gaming Uniforms, Pens, Pencils, Chairs, Desks, Anti-slip Mats, Speakers and Subwoofers">';
            $description = '<meta name="description" content="Explore a wide range of computer components and peripherals including CPU, RAM, HDD, SSD, MainBoard, PSU, I/O devices, Peripherals, GPU, Chassis, Coolers, Mouse, Keyboard, Display, External Drives, PCI Cards, Scanners, Printers, Console Controllers, Joysticks, Tablets, Microphones, Headsets, Audio Mixer, Controllers, Gaming Uniforms, Pens, Pencils, Chairs, Desks, Anti-slip Mats, Speakers, and Subwoofers. Find everything you need for your computer and gaming setup." />';
            break;
    endswitch;
endif;
#---->PAGE<----
include ('../include/_code/page.php');

function content(){
    $hw = 'en';
    $include_path   = '../include/_works/_hardware/';
    $hardware_path  = '../hardware/';

if (isset($_GET)) :
    switch (key($_GET)) :
        case 'cpu':
            include ($hardware_path . 'cpu.php');
            include ($include_path . 'cpu.php');
            break;
        case 'cooling':
            include ($hardware_path . 'cooling.php');
            include ($include_path . 'cooling.php');
            break;
        case 'chassis':
            include ($hardware_path . 'chassis.php');
            include ($include_path . 'chassis.php');
            break;
        case 'gpu':
            include ($hardware_path . 'gpu.php');
            include ($include_path . 'gpu.php');
            break;
        case 'psu':
        case 'power_supply':
            include ($hardware_path . 'psu.php');
            include ($include_path . 'psu.php');
            break;
        case 'motherboard':
            include ($hardware_path . 'motherboard.php');
            include ($include_path . 'motherboard.php');
            break;
        case 'ssd':
            include ($hardware_path . 'ssd.php');
            include ($include_path . 'ssd.php');
            break;
        case 'ram':
            include ($hardware_path . 'ram.php');
            include ($include_path . 'ram.php');
            break;
        case 'mouse':
        case 'computer_mouse':
            include ($hardware_path . 'mouse.php');
            include ($include_path . 'mouse.php');
            break;
        case 'keyboard':
            include ($hardware_path . 'keyboard.php');
            include ($include_path . 'keyboard.php');
            break;
        case 'display':
        case 'monitor':
            include ($hardware_path . 'display.php');
            include ($include_path . 'display.php');
            break;
        case 'external_memory_drives':
        case 'p_memory':
        case 'external_drives':
            include ($hardware_path . 'external_drives.php');
            include ($include_path . 'external_memory_drives.php');
            break;
        case 'pci_cards':
        case 'pci':
            include ($hardware_path . 'pci_cards.php');
            include ($include_path . 'pci_cards.php');
            break;
        case 'scanner':
            include ($hardware_path . 'scanners.php');
            include ($include_path . 'scanners.php');
            break;
        case 'printers':
        case 'printer':
            include ($hardware_path . 'printers.php');
            include ($include_path . 'printers.php');
            break;
        case 'controller':
            include ($hardware_path . 'controllers.php');
            include ($include_path . 'controllers.php');
            break;
        case 'cc':
            include ($hardware_path . 'console_controllers.php');
            include ($include_path . 'console_controllers.php');
            break;
        case 'joystick':
        case 'joysticks':
            include ($hardware_path . 'joystick.php');
            include ($include_path . 'joystick.php');
            break;
        case 'tablet':
            include ($hardware_path . 'tablets.php');
            include ($include_path . 'tablets.php');
            break;
        case 'microphones':
        case'micro':
        case 'microphone':
            include ($hardware_path . 'microphones.php');
            include ($include_path . 'microphones.php');
            break;
        case 'headset':
            include ($hardware_path . 'headsets.php');
            include ($include_path . 'headsets.php');
            break;
        case 'headphones':
        case 'headphone':
            include ($hardware_path . 'headphones.php');
            include ($include_path . 'headphones.php');
            break;
        case 'audio_mixers':
        case 'audiomixer':
            include ($hardware_path . 'audio_mixer.php');
            include ($include_path . 'audio_mixer.php');
            break;
        case 'gaming_uniforms':
        case 'team_uniformity_authority':
        case 'uniforms':
            include ($hardware_path . 'uniforms.php');
            include ($include_path . 'gaming_uniforms.php');
            break;
        case 'pens_pencils_tablets':
        case 'pencil':
        case 'pens_and_pencils_and_stylus':
            include ($hardware_path . 'pens_pencils_tablets.php');
            include ($include_path . 'pens_pencils_tablets.php');
            break;
        case 'chair':
            include ($hardware_path . 'chairs.php');
            include ($include_path . 'chairs.php');
            break;
        case 'desk':
            include ($hardware_path . 'desks.php');
            include ($include_path . 'desks.php');
            break;
        case 'anti_slip_mats':
        case 'antislipmats':
            include ($hardware_path . 'anti_slip_mats.php');
            include ($include_path . 'anti_slip_mats.php');
            break;
        case 'speakers_and_subwoofers':
            include ($hardware_path . 'speakers_and_subwoofers.php');
            include ($include_path . 'speakers_and_subwoofers.php');
            break;
        default:
        $title="<h2>The Hardware is the computer — it&#39;s physical components.</h2>";

        $description ="<p>These components may include the computer&#39;s
            functionality, design, materials, innovations, thermals, etc.<br />A computer is an electronic device that
            manipulates data or information. It has the ability to store,retrieve, and process data.<p>     <!--https://unsplash.com/photos/2sILr4DwabQ-->
            <h3><a href=\"https://latinospc.com/hardware/?anatomy_of_a_computer#navi\">The anatomy of a computer</a> typically includes,
        <a href=\"https://latinospc.com//hardware/?notebooks#navi\">Laptops</a>, Portable, Smart Devices, Modular PC's, ETC.</h3>";

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