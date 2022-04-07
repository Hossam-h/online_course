<?php

$host='localhost';
$username='root';
$pass='';
$dbname='courses_online';

$connection=mysqli_connect($host,$username,$pass,$dbname);



function db_inser($sql){
	global $connection;

	$result= mysqli_query($connection,$sql);
if($result){
	echo "insert";
}

}



function getrow_all($table){

    global $connection;

    $sql="SELECT * FROM `$table` ";

    $result=mysqli_query($connection,$sql);

    if($result){
       
       $rows=[];
       if(mysqli_num_rows($result)>0){
        while($row= mysqli_fetch_assoc($result)){
            $rows[]=$row;
        }
 
       }
       
       return $rows;
    }
}


function select($table,$id){

    global $connection;

    $sql= "SELECT * FROM $table WHERE id= $id ";

    $result=mysqli_query($connection,$sql);

    if($result){

        $row= mysqli_fetch_assoc($result);

        return $row;

    }

}



function selectall($table,$id1,$id2){

    global $connection;

    $sql= "SELECT * FROM $table WHERE $id1= $id2 ";

    $result=mysqli_query($connection,$sql);

    if($result){

        $rows=[];
        
        if(mysqli_num_rows($result)>0){
         while($row= mysqli_fetch_assoc($result)){
             $rows[]=$row;
         }
  
        }
        
        return $rows;
    }

}





?>