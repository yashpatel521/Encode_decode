<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$val = 10;
echo base64_encode(base64_encode('51'));
echo "<br>";
echo base64_decode(base64_decode('TlRFPQ=='));
echo "<br>";
echo "<br>";
echo "<br>";

function encode($a, $b)
{
    if ($a > 0) {
        return encode($a - 1, base64_encode($b));
    } else {
        return $b;
    }
}

function decode($a, $b)
{
    if ($a > 0) {
        return decode($a - 1, base64_decode($b));
    } else {
        return $b;
    }
}
echo encode($val, '51');
echo "<br>";
echo decode($val, encode($val, '51'));

?>

<body>
</body>
<script>
    console.log(btoa(btoa('51')));
    console.log(atob(atob('TlRFPQ==')));

    function encode(a, b) {
        if (a > 0) {
            return encode(a - 1, btoa(b));
        } else {
            return b;
        }
    }
    console.log(encode(3, '51'));

    function decode(a, b) {
        if (a > 0) {
            return decode(a - 1, atob(b));
        } else {
            return b;
        }
    }
    console.log(decode(3, encode(3, '51')));
</script>

</html>