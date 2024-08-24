<?php
$title = "Test environment";
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


    ====================================================            
</article>
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

        // Check if any query parameter is set and update the image source and description accordingly
        foreach ($imageMap as $key => $value) {
            if (isset($_GET[$key])) {
                $imageSrc = $value[0];
                $imageDesc = $value[1];
                break;
            }
        }

        // Display the image and description
        echo "<img src=\"$imageSrc\" width=\"100%\">";
        echo "<figcaption><p>$imageDesc</p></figcaption>";
        ?>
    </figure>

    <div class="gallery">
        <?php
        // Define the image filenames and corresponding query parameters for the gallery
        $galleryImages = [
            ['./image1.png', '?first'],
            ['./image2.png', '?second'],
            ['./image3.png', '?third'],
            ['./image4.png', '?fourth'],
            ['./image5.png', '?fifth'],
            ['./image6.png', '?sixth'],
            ['./image7.png', '?seventh'],
            ['./image8.png', '?eighth'],
            ['./image9.png', '?ninth'],
            ['./image10.png', '?tenth'],
            ['./image11.png', '?eleventh'],
            ['./image12.png', '?twelfth']
        ];

        // Display the gallery items
        foreach ($galleryImages as [$image, $query]) {
            echo "<a href=\"$query\"><img src=\"$image\" class=\"gallery-item\"></a>";
        }
        ?>
    </div>
</div>

<?php } ?>