<?php
$folderPath = './'; // Update with your folder path

// Array to store image paths
$imagePaths = array();

// Open the directory
if ($handle = opendir($folderPath)) {
    // Loop through the directory contents
    while (false !== ($entry = readdir($handle))) {
        // Skip the current and parent directory entries
        if ($entry != "." && $entry != "..") {
            // Check if the entry is a file and has a valid image extension
            $fileExtension = pathinfo($entry, PATHINFO_EXTENSION);
            $validExtensions = ['jpg', 'jpeg', 'png', 'gif'];

            if (in_array(strtolower($fileExtension), $validExtensions)) {
                $imagePaths[] = $folderPath . '/' . $entry;
            }
        }
    }
    // Close the directory
    closedir($handle);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Viewer</title>
</head>

<body>
    <script>
    var images = <?php echo json_encode($imagePaths); ?>;
    var preloadedImages = [];
    var currentIndex = 0;

    // Preload images
    for (var i = 0; i < images.length; i++) {
        var img = new Image();
        img.src = images[i];
        preloadedImages.push(img);
    }

    function showImage(index) {
        var img = preloadedImages[index];
        img.style.width = "100%";
        img.style.position = "absolute";
        document.body.innerHTML = "";
        document.body.appendChild(img);
    }

    document.addEventListener("keydown", function(event) {
        if (event.key === "ArrowRight") {
            currentIndex++;
            if (currentIndex >= preloadedImages.length) {
                currentIndex = 0; // Loop back to the first image
            }
            showImage(currentIndex);
        } else if (event.key === "ArrowLeft") {
            currentIndex--;
            if (currentIndex < 0) {
                currentIndex = preloadedImages.length - 1; // Loop back to the last image
            }
            showImage(currentIndex);
        }
    });

    // Show the first image initially
    showImage(currentIndex);
    </script>
</body>

</html>