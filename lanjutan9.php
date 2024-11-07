<?php
require_once 'tugasclass9.php';



   $redmi = new motor(); 
    $OPPO = new motor();

     $redmi->set_name('Redmi'); 
     $redmi->set_color('Red');
     $OPPO->set_name('OPPO'); 
     $OPPO->set_color('black');

       echo 'Nama HP '.$redmi->get_name().' Warnanya '.$redmi->get_color();
       echo '<br/>Nama HP '.$OPPO->get_name(). ' Warnanya '.$OPPO->get_color();
       ?>