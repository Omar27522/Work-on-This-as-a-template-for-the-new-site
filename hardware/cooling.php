<?php
$titles =[ 'Cooling Devices',':Fans:',':Solid State Coolers:',':Phase Change:','Computer coolers','There are two types of computer coolers:',
            'The process typically involves the following steps:','Doppler cooling:','Coolers:','Air:','Liquid:','Solid-State:',
            'Thermoelectric Coolers (TECs):','Hybrid Coolers:','Phase Change Cooling:','Maintenance and Installation:','Conclusion:','Lasers','On the other hand,',
            'There are several types of active cooling systems,',':Liquid Coolers:',':TECS:','Recently,','Sisyphus cooling:','Evaporative cooling:',
            'When choosing a cooler, consider factors such as Cooler Size and Compatibility:','Cooler Height:','Socket Compatibility:','Cooling Performance:'
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
$coolers = ['coolers'=>'are an essential component of any computing system, as
                they help to regulate the temperature of the central processing unit (CPU) and other critical components of
                the computer. The cooling system is crucial because the performance and lifespan of the computer&#39;s
                components can be negatively affected by excessive heat.',

            'passiveAndActivePassive'=>'<a href="https://www.cybernetman.com/blog/fanless-cooling-how-it-works-and-why-you-need-it/">passive</a> and
                <a href="https://www.pcmag.com/encyclopedia/term/active-cooling#:~:text=Active%20cooling%20uses%20a%20fan,allow%20the%20air%20to%20dissipate.">active</a> cooling.
                Passive cooling systems use natural convection or airflow to remove heat from the computer.
                Passive cooling systems are typically made up of heat sinks or radiators that absorb heat from the CPU
                and other components and disperse it through a series of fins or pipes.',

            'passiveAndActiveActive'=>'active cooling uses a fan or pump to create
                forced airflow or liquid circulation to remove heat from the computer. Active cooling is typically more
                effective than passive cooling because it can move air or liquid at a higher velocity, thus removing
                heat more efficiently.',

            'types'=>'including air-cooled, liquid-cooled, and thermoelectric coolers.',

            'air'=>'Air-cooled systems',

            'common'=>'are the most common and use fans to blow air over the heat sink, which in turn dissipates heat from the CPU.',

            'liquid'=>'Liquid-cooled systems',

            'pump'=>', on the other hand, use a pump to circulate liquid through a radiator to remove heat from the CPU and other components.',

            'thermoelectric'=>'Thermoelectric coolers',

            'peltier'=>'use the Peltier effect to cool the CPU by creating a temperature differential between two surfaces.',

            'ssc'=>'there have been advancements in solid-state cooling technology, which uses materials that can transfer heat without the need for a fan or liquid. These materials are known as thermoelectric materials and can be used to create solid-state heat sinks or coolers that can be incorporated into a computer&#39;s cooling system.',

            'laserCooling'=>'This is a fascinating phenomenon in physics that involves the use of lasers to cool atoms or molecules down to extremely low temperatures, often close to absolute zero. It relies on the principles of quantum mechanics and involves manipulating the motion of particles through the absorption and emission of photons.',

            'dopplerCooling'=>'This method utilizes the Doppler effect to slow down the movement of atoms or molecules. Laser beams are directed at the particles, and as they absorb and re-emit photons, their momentum changes. By carefully tuning the frequency of the lasers, the particles can be slowed down significantly.',

            'sisyphus'=>'In this technique, particles are trapped in a periodic potential, often created by intersecting laser beams. As the particles move through this potential, they exchange kinetic energy with the light field, leading to further cooling.',

            'evaporative'=>'Once the particles are sufficiently cooled using techniques like Doppler and Sisyphus cooling, evaporative cooling can be employed to further reduce their temperature. This involves selectively removing the highest-energy particles from the system, leaving behind a colder ensemble.',

            'laserCoolingSummary'=>'In summary, computer coolers are essential to ensure that the CPU and other critical components of a computer are kept within safe operating temperatures. Active cooling systems, including air-cooled, liquid-cooled, and thermoelectric coolers, are more effective than passive cooling systems and can help extend the lifespan and improve the performance of a computer. Solid-state cooling technology is also an emerging technology that has the potential to improve computer cooling systems further.',

            'airCooling'=>'Air coolers are the most common type of CPU cooler. They consist of a heat-sink with metal fins and one or more fans mounted on top or alongside the fins.',

            'airCooling2'=>'The fan(s) blow air over the heat-sink, dissipating heat from the CPU. Heat pipes, often embedded in the heat-sink, help conduct heat away from the CPU to the fins where it can be dispersed.',

            'liquidCooling'=>'Liquid coolers, also known as water coolers, use a closed-loop system to transfer heat away from the CPU.',

            'liquidCooling2'=>'A pump circulates a coolant (usually water mixed with a coolant additive) through tubes connected to a radiator. The radiator dissipates heat into the surrounding air, and the cooled coolant is then pumped back to the CPU block to absorb more heat.',

            'solidStateCooling'=>'Solid-state coolers use thermoelectric materials to transfer heat without the need for fans or liquid.',

            'solidStateCooling2'=>'These materials create a temperature gradient when an electric current is applied, enabling heat transfer. Solid-state coolers are still emerging and hold potential for compact and efficient cooling solutions.',

            'tec'=>['TECs utilize the','Peltier effect','to cool the CPU.','When an electrical current is applied to a thermoelectric module, it creates a temperature differential between its two surfaces. One side becomes hot while the other side becomes cold, effectively cooling the CPU. However, TECs are less common due to their high power consumption and complexity.'],

            'hybrid'=>['Hybrid coolers combine elements of both air and liquid cooling systems.',
                'They typically feature a liquid cooling loop for the CPU with an integrated air cooler for other components such as VRMs (Voltage Regulator Modules) or RAM.'],

            'pcc'=>['Phase change cooling systems use refrigerants to cool the CPU.','The refrigerant undergoes phase changes from liquid to gas and back, absorbing heat during evaporation and releasing it during condensation. While highly effective, phase change cooling systems are expensive and complex, making them impractical for most users.'],

            'factors'=>['Ensure it fits within the case without obstructing other components.','Check if the cooler is compatible with your CPU socket type.','Consider the TDP (Thermal Design Power) rating and cooling capacity of the cooler relative to your CPU\'s power consumption and heat output.',
                'Follow manufacturer guidelines for installation to ensure proper contact between the cooler and CPU.',
                'Regularly clean dust and debris from air cooler fins and radiator fins in liquid cooling systems to maintain optimal airflow.',
                'Computer coolers play a crucial role in maintaining optimal temperatures for CPUs and other components. Understanding the different types of coolers and their operation can help users make informed decisions when selecting cooling solutions for their systems. As technology advances, new cooling methods and innovations continue to emerge, offering improved efficiency and performance for computer systems.']
];


// Search for the item in the array
$search_item = 'Evaporative cooling:';

$index = array_search($search_item, $titles);//array variable you want to search

if ($index !== false) {
    echo "$search_item is in the array at index $index.";
} else {
    echo "$search_item is not in the array.";
}

/*/====================================================\
|                                                    |
|   // Search for the item in the array              |
|                                                    |
|   $search_item = 'Lasers';                         |
|                                                    |
|   $index = array_search($search_item, $titles);    |
|                                                    |
|   if ($index !== false) {                          |
|       echo "$search_item is in the array           |
|       at index $index.";                           |
|   } else {                                         |
|       echo "$search_item is not in the array.";    |
|   }                                                |
|                                                    |
|   %^&Lasers is in the array at index 17.%^&        |
|                                                    |
|                                                    |
\====================================================/
*/?>