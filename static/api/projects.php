<?php
include "db.php";

/**
 * get projects data from the server
 * @return array  data from database
 */

function get_projects(){
  $db = new DBConnection();
  $data = $db->query("SELECT * FROM projects;");
  $db->close();

  return $data;
}

/**
 * get clients data from the server
 * @return array  data from database
 */

function get_clients(){
  $db = new DBConnection();
  $data = $db->query("SELECT * FROM clients;");
  $db->close();

  return $data;
}

/**
 * get a list of techs from the server
 * @param  string  list of tech ids seperated by spaces
 * @return array  data of the techs
 */
function get_techs($list){
  $db = new DBConnection();
  $output = [];
  $list = explode(",",$list);

  for($i = 0; $i < count($list); $i++){
    array_push($output, $db->query("SELECT * FROM tech WHERE id = '{$list[$i]}';")[0]);
  }

  $db->close();

  return $output;
}

?>
