<?php
function makeConnection()
{
 $host     = "localhost";
 $username = "root";
 $password = "";
 $dbname   = "todoapp1";
 $con      = new mysqli($host, $username, $password, $dbname);
 if ($con->connect_error) {
  echo "There is an error in Database connection" . $con->connect_error;
 }
 return $con;
//  echo "successfully connected";
}
function addItems($value)
{
 $con   = makeConnection();
 $query = "INSERT INTO todolist(id,item,status) VALUES(NULL,'$value', '0')";
 $con->query($query);
}
function getItems()
{
 $con    = makeConnection();
 $query  = "SELECT id,item from todolist WHERE status='0'";
 $result = $con->query($query);
 return $result;
}
function getitemsChecked()
{
 $con    = makeConnection();
 $query  = "SELECT id,item from todolist WHERE status='1'";
 $result = $con->query($query);
 return $result;
}
function updateItems($id)
{
 $con    = makeConnection();
 $query  = "UPDATE todolist set status ='1' WHERE id='$id'";
 $result = $con->query($query);
}
function deleteItems($id)
{
 $con    = makeConnection();
 $query  = "DELETE from  todolist  WHERE id='$id'";
 $result = $con->query($query);
}
