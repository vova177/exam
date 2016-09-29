<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 27.09.16
 * Time: 20:27
 */

if($action=="quest"){

    $array=isset($_POST['form']) ? $_POST['form'] : null;
    $check=isset($_POST['check']) ? $_POST['check'] : null;

    $valid=validate($array);
     if($valid==true) {
         write_file($array, FILE_VAY);
     }
    $arr=read_file(FILE_VAY);
  //  var_dump($arr);

    $message=$array['message'];

    setcookie($array['name'], $array['email'],time() + 5 * 3600, "/");

    if($check) {
         send_mail($message,$inf);
    }
    if($_COOKIE[$array['name']]){
        $_SESSION['return_user']=1;
    }else{
        $_SESSION['return_user']=0;
    }

//    foreach ($arr as  $value) {
//        echo $value['name'] . "<br/>";
//        echo $value['email'] . "<br/>";
//        echo $value['message'] . "<br/>";
//    }
//    //include"teamPlates/quest.php";
    view('quest',['arr'=>$arr]);
}
