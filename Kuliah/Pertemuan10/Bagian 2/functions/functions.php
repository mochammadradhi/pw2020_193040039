<?php
function connect(){
  return mysqli_connect("localhost","root","","pw_193040039");
}

function query($query){
  $conn = connect();
  $result = mysqli_query($conn, $query);
  $rows = [];
  if(mysqli_num_rows($result) == 1){
    $rows = mysqli_fetch_assoc($result);
  }
      while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
  
  return $rows;
}

?>