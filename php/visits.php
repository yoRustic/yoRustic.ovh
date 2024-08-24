<?php 
    $File= file_get_contents("./misc/visits.txt");
    $Visits=$File;
    
    $NewVisits=$Visits+1;

    $NewFile=fopen("./misc/visits.txt","w");

    fwrite($NewFile,$NewVisits);

    fclose($NewFile);
?>