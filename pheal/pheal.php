<?php

  /*
    Author: Eric Vasquez AKA Devilen
    Date: May 15th 2013
    Site: http://scireportals.net

    This is for the first Tutorial on how to use Pheal or SimpleXML to Parse the Eve-Online API.

  */

  require_once "pheal/Pheal.php";
  spl_autoload_register("Pheal::classload");

  $pheal = new Pheal("KeyID", "vCode"); // note you will need to put your own KeyID and vCode in.

  $result = $pheal->Characters();

  foreach ($result->characters as $characters) {
    echo $character->name."<br>";
  }
?>
