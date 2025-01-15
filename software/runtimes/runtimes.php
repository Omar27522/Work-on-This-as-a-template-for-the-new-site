<?php
$title="Understanding Program Runtimes:<br />The Magic Behind Your Apps";
$question="Ever wondered why some apps run smoothly while others feel sluggish? Or why the same game might run perfectly on your friend's phone but struggle on yours? The answer lies in something called \"runtime\" - the invisible conductor orchestrating everything your apps do.";
$links=[
    'programming'=>'https://en.wikipedia.org/wiki/History_of_programming_languages#Current_trends',
    'mobile'=>'https://en.wikipedia.org/wiki/Mobile_game',
];
$subtitles= [
            'What is Runtime? — Think of it as a Kitchen',
            'How Does Runtime Work?',
            '🌟 Fun Fact:',
            '',
            '',
            '',
];
$kitchen = [
            'Imagine your computer as a busy restaurant kitchen:',
            'the'=>'The',
            'chef'=>['The chef','(runtime environment)','coordinates everything'],
            'recipe'=>['The recipe','(program code)','tells what needs to be done'],
            'ingredients'=>['The ingredients','(data)','are what you\'re working with'],
            'tools'=>['The kitchen tools','(system resources)','help get the job done'],
            'just'=>'Just like a kitchen needs all these elements working together to serve a meal, your apps need runtime to function!',
            'how'=>'Every <a href="'.$links['programming'].'">programming language</a> needs its own special runtime environment. Think of it as different types of kitchens - a sushi restaurant needs different tools than a pizzeria, but they both make delicious food!'
];

$funFact = 'When you\'re playing a mobile game, the runtime is handling millions of tiny tasks every second - from making sure your character jumps when you tap, to keeping track of your score, all while making sure your phone\'s battery isn\'t drained too quickly!';
?>