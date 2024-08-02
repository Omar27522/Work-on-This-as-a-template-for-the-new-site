<?php
//The page does not display a URL which I believe is better, but now the issue is that I would love a different title
//for each image fullscreen on the page.

$title = "Fullscreen Gallery";
$directoryPath = '../';
$lang = 'en';
$software = 'active';

include('../include/_code/page.php');

function content(){
?>
<style>
.gallery {
    display: inline-flex;
    flex-wrap: wrap;
    width: 100%;
    height: 100%;
    position: relative;
}

.gallery-item {
    width: 100px;
    height: auto;
    background-size: cover;
    background-position: center;
    transition: transform 0.5s ease-in-out;
}

.gallery-item:hover {
    transform: scale(1.1);
}

h2 {
    font-size: xxx-large;
}
</style>

<div class="container">
    <h2>Gallery</h2>

    <figure>
        <?php
        // Define the image map with image paths and descriptions
        $imageMap = [
            'first' => ['./image1.png', 'Sample Description One in a million'],
            'second' => ['./image2.png', 'Sample Description Two'],
            'third' => ['./image3.png', 'Sample Description Three'],
            'fourth'=> ['./image4.png', 'Sample Description Four'],
            'fifth' => ['./image5.png', 'Sample Description Five'],
            'sixth' => ['./image6.png', 'Sample Description Six'],
            'seventh' => ['./image7.png', 'Sample Description Seven'],
            'eighth' => ['./image8.png', 'Sample Description Eight'],
            'ninth' => ['./image9.png', 'Sample Description Nine'],
            'tenth' => ['./image10.png', 'Sample Description Ten'],
            'eleventh' => ['./image11.png', 'Sample Description Eleven'],
            'twelfth' => ['./image12.png', 'Sample Description Twelve']

        ];

        // Define the default image and description
        $defaultImage = ['./image4.png', 'Default image description. I need to change the image when a user chooses a different image. All images have their own unique captions.'];

        // Initialize the image source and description
        $imageSrc = $defaultImage[0];
        $imageDesc = $defaultImage[1];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['image_key']) && array_key_exists($_POST['image_key'], $imageMap)){
                $imageSrc = $imageMap[$_POST['image_key']][0];
                $imageDesc = $imageMap[$_POST['image_key']][1];
            }
        }

        // Display the image and description
        echo "<img src=\"$imageSrc\" width=\"100%\">";
        echo "<figcaption><p>$imageDesc</p></figcaption>";
        ?>
    </figure>

    <div class="gallery">
        <?php
        // Display the gallery items
        foreach ($imageMap as $key => $value) {
            echo "<form method='POST' style='display:inline;'>";
            echo "<input type='hidden' name='image_key' value='$key'>";
            echo "<button type='submit' style='border:none;background:none;padding:0;'>";
            echo "<img src=\"{$value[0]}\" class=\"gallery-item\">";
            echo "</button>";
            echo "</form>";
        }
        ?>
    </div>
</div>

<?php } ?>