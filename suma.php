<?php
session_start();
$_SESSION['name']=$_POST['name'];
$_SESSION['rogale']=$_POST['rogale'];
$cenaR=$_POST['ileR'];
$_SESSION['bulki']=$_POST['bulki'];
$cenaB=$_POST['ileB'];
$_SESSION['sumaR'] =$_SESSION['rogale']*$cenaR;
$_SESSION['sumaB'] =$_SESSION['bulki']*$cenaB;
$_SESSION['suma']  =$_SESSION['sumaR']+$_SESSION['sumaB'];
  
header("Location: view.php");
