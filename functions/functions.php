<?php

function deb($post)
{
   echo "<pre>";
   print_r($post);
   echo "</pre>";
   die();
}



function checkallfields($tab = [])
{
   if (!empty($_POST)) {
      $result = [];
      foreach ($_POST as $name => $v) {
         if (empty($v)) {
            if (in_array($name, $tab)) {
            } else {
               array_push($result, $name);
            }
         }
      }
      return $result;
   }
}


function errorclasse($filed)
{
   if (!empty($_POST)) {
      if (empty($filed)) {
         echo "is-invalid";
      } else {
         echo "";
      }
   }
}

function VideChamps($post)
{
   if (!empty($post)) {
      extract($post);
      foreach ($post as $key => $value) {
         unset($$key);
      }
   }
}


function errormessage($filed)
{
   if (!empty($_POST)) {
      if (empty($filed)) {
         echo "Veuillez remplir ce champ";
      } else {
         echo "";
      }
   }
}

function fieldempty($fild)
{
    if(!empty($_POST))
    {
      if(empty($fild))
    {
        echo"*";
    }
    }
}

function viderchamp(){
    
    foreach($_POST as $key=>$value)
    {
        global $$key;
        $$key = null;   
    }
}

function inputred($fild)
{
   if(!empty($_POST))
   {
    if(empty($field))
    {
        echo"is-invalid";
    }
   }
}
