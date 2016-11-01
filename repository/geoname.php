<?php

function geonameID($db){
    $select=$db->query("SELECT `geonameid` FROM `geoname`");
    $geonameid=$select->fetchAll();
    return $geonameid;
}
