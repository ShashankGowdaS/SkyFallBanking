<?php
$server="localhost";
$username="root";
$password="";
$dbname="skyfall";

$conn=mysqli_connect($server,$username,$password,$dbname);
if(!$conn){
    echo "Connection unsuccessful";
}

$sql2="create table users(id int(3) unsigned auto_increment primary key,
        name varchar(20) not null,email varchar(20) ,
        balance int(10),
        joindate timestamp default current_timestamp on update current_timestamp )";
if($conn->query($sql2)==TRUE){
    echo "table user created";
}else{
    echo "error :".$conn->error;
}




$conn->close();
?>
<!--
    $sql1="create database skyfall";
if($conn->query($sql1)==TRUE){
    echo "Creation of database successful";
}

$sql2="create table users(id int(3) unsigned auto_increment primary key,
        name varchar(20) not null,email varchar(20) ,
        balance int(10),
        joindate timestamp default current_timestamp on update current_timestamp )";
if($conn->query($sql2)==TRUE){
    echo "table created";
}else{
    echo "error :".$conn->error;
}


$sql3="create table transactions(tid int(3) unsigned auto_increment primary key,
        sender varchar(20) not null,
        receiver varchar(20) ,
        amount int(10),
        tdatetime timestamp default current_timestamp on update current_timestamp )";
if($conn->query($sql3)==TRUE){
    echo "table created";
}else{
    echo "error :".$conn->error;


echo "<h1>Jai Sri Ram</h1>";

trans="insert into transactions (sender,receiver,amount) values (?,?,?)";

$sql4="drop table transactions";
if($conn->query($sql4)==TRUE){
    echo "table removed";

$sql4="drop table users";
if($conn->query($sql4)==TRUE){
    echo "table removed";





-->