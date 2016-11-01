<?php
if($action=="auto-complete"){
   if(isset($_POST["symbol"])){
       $output="";
       $select=$db->query("SELECT * FROM `users` WHERE `name` LIKE '%".$_POST['symbol']."%' LIMIT 10");
       $result=$select->fetchAll();
       $output = '<ul class="list-unstyled">';
       if($result>0){
           foreach($result as $value){
              $output .='<li>'.$value['name'].'<li/>';
           }
       }else{
           $output .= "users not found";
       }
       $output .="<ul/>";
      echo $output;
   }
}