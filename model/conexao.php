<?php


    function conectar(){

    $conn = mysqli_connect('localhost', 'root', '', 'hotelzinho');
    
	if(!$conn){
    return "Conexão não abre !" ;
                
	}else{
    return $conn ;
    }
    

    
}
