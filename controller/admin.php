<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 07.10.16
 * Time: 15:09
 */
if($action=="admin"){

    //include 'work_db.php';

    $category=isset($_POST['category'])? $_POST['category']:null;
    $name=isset($_POST['product_name'])? $_POST['product_name']:null;
    $description=isset($_POST['description'])? $_POST['description'] : null;
    $price=isset($_POST['price'])? $_POST['price'] : null;
    //var_dump($description, $price, $name);
    if($category ) {
       // echo'ok';
        try {
            $db = new PDO('mysql:host=localhost; dbname=QEST', 'root', 'euflfq');
            $insert = $db->prepare("INSERT INTO categories(`title`) VALUES(?)");
            var_dump($insert->execute(array($category)));
            $select=$db->query('SELECT * FROM categories ORDER BY ID DESC LIMIT 1');
            $last_id=$db->lastInsertId();
          //  var_dump($arr_category);
//               var_dump( $key_arr=count($arr_category));
//                 $arr_category[--$key_arr]['id'];
           // var_dump($arr_category);

                $insert2 =$db->prepare("INSERT INTO products(`title`,`description`, `price`, `categoty_id`) VALUES(:title, :description, :price, :category_id)");
               var_dump( $insert2->execute(array('title'=>$name, 'description'=>$description, 'price'=>$price, 'category_id'=>$last_id)));

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    view('admin');
}