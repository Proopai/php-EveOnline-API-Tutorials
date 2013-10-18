<?php

  /*
    Author: Eric Vasquez AKA Devilen
    Date: May 15th 2013
    Site: http://scireportals.net

    This is for the first Tutorial on how to use Pheal or SimpleXML to Parse the Eve-Online API.

  */

  $apiSite = "https://api.eveonline.com/account/APIKeyInfo.xml.aspx?keyID=&vCode="; // note you will need to put your own KeyID and vCode in.
  $xml = simplexml_load_file($apiSite);

  foreach($xml->result->key->rowset->row as $rows){
     echo $rows->attributes()->characterName."<br>";
  }
?>
