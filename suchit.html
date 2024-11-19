<!DOCTYPE html>
<html>
<head>
    <title>Header DevGroup Team</title>
    <style>
        /* CSS for glowing borders */
        @keyframes glow {
            0% {
                border-color: #00ff00;
            }
            50% {
                border-color: #00ff00;
            }
            100% {
                border-color: #00ffff;
            }
        }

        /* Gallery styles */
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .gallery img {
            max-width: 100%;
            max-height: 200px;
            margin: 5px; /* Adjust margin as needed */
            animation: glow 2s infinite alternate; /* Apply glowing effect */
        }
        .image-name {
            text-align: center;
            margin-top: 5px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
        .image-container {
            text-align: center;
            width: 200px;
            border: 2px solid transparent; /* Start with transparent border */
            border-radius: 10px; /* Border radius */
        }
        .image-container:hover {
            animation: glow 1s infinite alternate; /* Apply glowing effect on hover */
        }
        body {
            background-color: #f0f0f0; /* Background color */
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Header DevGroup Team</h1>
    <?php
    $html = file_get_contents("https://shershahcollege.co.in/shershahugadm23/upphoto/?C=M;O=A");

    $dom = new DOMDocument();
    $dom->loadHTML($html);

    $links = [];

    $anchors = $dom->getElementsByTagName('a');

    foreach ($anchors as $anchor) {
        $href = $anchor->getAttribute('href');
        if (strpos($href, '.jpg') !== false || strpos($href, '.jpeg') !== false || strpos($href, '.png') !== false || strpos($href, '.gif') !== false) {
            // Exclude specific links
            if ($href === '23303104033030photo.jpg' || $href === '23303104033103IMG-20240515-WA0011.jpg') {
                continue;
            }
            $links[] = $href;
        }
    }

    echo '<div class="gallery">'; // Open gallery container

    foreach ($links as $link) {
        $filename = basename($link); // Get the filename from the URL
        $imageName = substr($filename, 0, 14); // Extract the first 14 characters of the filename
        echo '<div class="image-container">'; // Container for each image and its name
        echo '<img src="https://shershahcollege.co.in/shershahugadm23/upphoto/'.$link.'">'; // Image with source
        echo '<div class="image-name">'.$imageName.'</div>'; // Display the first 14 characters of the filename
        echo '</div>'; // Close container
    }

    echo '</div>'; // Close gallery container
    ?>
</body>
</html>
