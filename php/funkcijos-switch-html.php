<?php

function fonto_dydis ($dydis)
{
    switch ($dydis) {
        case 'mazas':
            $fontas = '10px';
            break;
        case 'normalus':
            $fontas = '14px';
            break;
        case 'didelis':
            $fontas = '';
            break;
        case 'extra':
            $fontas = '25px';
            break;
        default: $fontas = '11px';
    }
    return $fontas;
}
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Title of the document</title>
</head>

<body>
<p>Lorem ipsum dolor sit amet, <span style="font-size: <?php echo fonto_dydis('mazas')?>"> consectetur adipisicing elit.</span>Dicta <span style="font-size: <?php echo fonto_dydis('normalus')?>">doloremque fugit</span> in <span style="font-size: <?php echo fonto_dydis('didelis')?>">libero natus</span>, necessitatibus nobis <span style="font-size: <?php echo fonto_dydis('extra')?>"> odit officiis</span> placeat praesentium quae quisquam, sapiente sit soluta tempora ullam, voluptatem? Id, non?</p>

<?php
echo '<script>alert("!");</script>'
?>
</body>

</html>