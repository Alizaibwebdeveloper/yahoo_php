<?php
    
// if esleif statement in php

$per = 90;


if( $per>= 80 && $per<= 100 ){

echo "You are in merit";

}elseif( $per>= 60 && $per<= 80 ){

    echo "You got the first division";
    
}elseif( $per>= 45 && $per<= 60 ){

    echo "You got the second division";
    
}elseif( $per>= 33 && $per<= 45 ){

    echo "You got the third division";
    
}elseif($per<33){
    echo "You are fail";
}else{

    echo "plzz enter the valid percentage(%)";
}