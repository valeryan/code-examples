<?php
/**
 * basic autoload function
 */
spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});

$bicCristal = new bicCristal();
$bic4Colours = new bic4Colours();
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Pen Test Page</title>
</head>

<body>
<h1>Bic Pens</h1>
<h2><?php echo $bicCristal->brandish() . ' Test'; ?></h2>
<p><?php $bicCristal->uncap()->write('This is some really standard text.')->loadInk('green')->write('Lets spice it up just a touch!')->cap(); ?></p>
<h2><?php echo $bic4Colours->brandish() . ' Test'; ?></h2>
<p><?php
$bic4Colours->click(1)->write('This is a pretty boring color for this pen.')
            ->click(2)->write('Ahh! now this color is way better!')
            ->click(3)->write('However, these are not the only colors this pen has.')
            ->click(4)->write('In fact it has 4 colors.'); ?>
</p>
</body>
</html>
