

<?php
function createID() {
    // 1. Current Unix timestamp (4 bytes)
    $timestamp = dechex(time());

    // 2. Random 5 bytes
    $random = bin2hex(random_bytes(5));

    // 3. Incrementing counter (3 bytes)
    static $counter = 0;
    $counter = ($counter + 1) % 0xFFFFFF; // roll over after 3 bytes
    $counterHex = str_pad(dechex($counter), 6, '0', STR_PAD_LEFT);

    // Return final 24-character ObjectId
    return $timestamp . $random . $counterHex;
}
?>
