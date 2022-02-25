<?php
$l = 60;


$v = rand (50, 80);
while($l >=0){
    if($v >=60):?>
        <p style='color:red'>Ati depasit viteza legala 50 km/h!</p>

    <?php endif;?>
   
    <?php if ($l >=10 && $l % 5 ==1):?>
        <p>Mergi prudent! Viata are prioritate</p>
    <?php elseif($l >=2 && $l <10):?>
        <p style='color:orange'>Va rog sa alimentati !</p>
    <?php elseif($l <=1):?>
        <p style='color:red'>Trebuie sa ne oprim !</p>
    <?php die; endif;?>
<?php 
    $l = $l-2;
    }
?>