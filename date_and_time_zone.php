<?php
    echo time().'<br>'; // large integer number from 1970 (unix)

   echo date('m/d/Y g:ia').'<br>';

   echo date('m/d/Y g:ia',time()+(24*5*60*60)).'<br>';

   echo mktime(0,0,0,4,2,2022).'<br>';

   echo date('m/d/Y g:ia',mktime(0,0,0,4,2,2022)).'<br>';

    echo strtotime('2022-04-02 03:10:40').'<br>'; // unix
    echo date('m/d/Y g:ia',strtotime('Tomorrow')).'<br>';
    echo date('m/d/Y g:ia',strtotime('first day of october')).'<br>';
    $date = date('m/d/Y g:ia',strtotime('first day of october')).'<br>';

    echo '<pre>';
    print_r(date_parse($date));
    echo '</pre>';