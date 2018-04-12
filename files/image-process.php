<?php

/* 
 * The mouse location in the image map consists of two co-ordibates - 
 * an x coordinate and a y coordinate
 */

if($_REQUEST["imap_x"] == 517 and $_REQUEST["imap_y"] == 323){
    
    header("Location : http://localhost/dashboard/Five-Applications-in-php/files/jackpot.php");
    
}
elseif($_REQUEST["imap_x"] == 518 and $_REQUEST["imap_y"] == 322){
    
    header("Location : http://localhost/dashboard/Five-Applications-in-php/files/jackpot.php");
    
}
elseif($_REQUEST["imap_x"] == 519 and $_REQUEST["imap_y"] == 321){
    
    header("Location : http://localhost/dashboard/Five-Applications-in-php/files/jackpot.php");
    
}
elseif($_REQUEST["imap_x"] == 527 and $_REQUEST["imap_y"] == 334){
    
    header("Location : http://localhost/dashboard/Five-Applications-in-php/files/jackpot.php");
    
}
elseif($_REQUEST["imap_x"] == 530 and $_REQUEST["imap_y"] == 316){
    
    header("Location : http://localhost/dashboard/Five-Applications-in-php/files/jackpot.php");
    
}
elseif($_REQUEST["imap_x"] == 573 and $_REQUEST["imap_y"] == 353){
    
    header("Location : http://localhost/dashboard/Five-Applications-in-php/files/jackpot.php");
    
}
elseif($_REQUEST["imap_x"] == 572 and $_REQUEST["imap_y"] == 356){
    
    echo "Winners take nothing!";
    
}
else {
    echo "Sorry, you have clicked the image at wrong location (" . $_REQUEST["imap_x"] . 
            ", " . $_REQUEST["imap_y"] . "). You would have won if you clicked between two eyes.";
}


