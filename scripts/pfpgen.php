<?php// Load the image from the file
$image = imagecreatefromwebp('C:\xampp\htdocs\newsurg\media\img\min\default-user.webp');

// Enable alpha channel support
imagealphablending($image, true);
imagesavealpha($image, true);

// Get the width and height of the image
$width = imagesx($image);
$height = imagesy($image);

// Create a blank image to hold the shifted image
$shifted = imagecreatetruecolor($width, $height);

// Enable alpha channel support
imagesavealpha($shifted, true);
imagefill($shifted, 0, 0, imagecolorallocatealpha($shifted, 0, 0, 0, 127));

// Generate a random hue shift value
$hue_shift = mt_rand(0, 359);

// Loop through each pixel in the original image
for ($x = 0; $x < $width; $x++) {
    for ($y = 0; $y < $height; $y++) {
        // Get the color of the current pixel
        $color = imagecolorat($image, $x, $y);

        // Extract the red, green, blue, and alpha components of the color
        $red = ($color >> 16) & 0xFF;
        $green = ($color >> 8) & 0xFF;
        $blue = $color & 0xFF;
        $alpha = ($color & 0x7F000000) >> 24;

        // Convert the RGB color to HSL
        $hsl = rgb2hsl($red, $green, $blue);

        // Add the hue shift to the HSL hue component
        $hsl[0] = ($hsl[0] + $hue_shift) % 360;

        // Convert the HSL color back to RGB
        $rgb = hsl2rgb($hsl[0], $hsl[1], $hsl[2]);

        // Set the pixel color in the shifted image
        imagesetpixel($shifted, $x, $y, imagecolorallocatealpha($shifted, ($rgb >> 16) & 0xFF, ($rgb >> 8) & 0xFF, $rgb & 0xFF, $alpha));
    }
}

// Output the shifted image to the browser as a PNG file
header('Content-Type: image/png');
imagepng($shifted);

// Free up memory
imagedestroy($image);
imagedestroy($shifted);

/**
 * Convert an RGB color to HSL.
 *
 * @param int $r The red component (0-255).
 * @param int $g The green component (0-255).
 * @param int $b The blue component (0-255).
 *
 * @return array The HSL components.
 */
function rgb2hsl($r, $g, $b) {
    $r /= 255;
    $g /= 255;
    $b /= 255;

    $max = max($r, $g, $b);
    $min = min($r, $g, $b);

    $h = $s = $l = ($max + $min) / 2;

    if ($max == $min) {
        $h = $s = 0; // achromatic
    } else {
        $d = $max - $min;
        $s = $l > 0.5 ? $d / (2 - $max - $min) : $d / ($max + $min);
        switch ($max) {
            case $r:
                $h = ($g - $b) / $d + ($g < $b ? 6 : 0);
                break;
            case $g:
                $h = ($b - $r) / $d + 2;
                break;
            case $b:
                $h = ($r - $g) / $d + 4;
                break;
        }
        $h /= 6;
    }

    return array($h * 360, $s, $l);
}

/**
 * Convert an HSL color to RGB.
 *
 * @param int
 * @param int $h The hue component (0-359).
 * @param int $s The saturation component (0-1).
 * @param int $l The lightness component (0-1).
 *
 * @return int The RGB color as a single integer.
 */
function hsl2rgb($h, $s, $l) {
    if ($s == 0) {
        $r = $g = $b = $l * 255; // achromatic
    } else {
        $q = $l < 0.5 ? $l * (1 + $s) : $l + $s - $l * $s;
        $p = 2 * $l - $q;
        $h /= 360;
        $r = hue2rgb($p, $q, $h + 1/3);
        $g = hue2rgb($p, $q, $h);
        $b = hue2rgb($p, $q, $h - 1/3);
    }

    return (($r << 16) + ($g << 8) + $b);
}

/**
 * Convert a hue component to an RGB component.
 *
 * @param int $p The p component.
 * @param int $q The q component.
 * @param int $t The t component.
 *
 * @return int The RGB component.
 */
function hue2rgb($p, $q, $t) {
    if ($t < 0) $t += 1;
    if ($t > 1) $t -= 1;
    if ($t < 1/6) return ($p + ($q - $p) * 6 * $t);
    if ($t < 1/2) return $q;
    if ($t < 2/3) return ($p + ($q - $p) * (2/3 - $t) * 6);
    return $p;
}
?>