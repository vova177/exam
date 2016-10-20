<?php
if(isset($id) && $action=="products"){
   $mass=get_products_by_id($db, $id);
    view('product', $mass);
}