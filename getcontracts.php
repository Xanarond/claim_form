<?php

if(isset($_GET['countryCode'])){
  
  switch($_GET['countryCode']){
    
    case "glt":

      echo "obj.options[obj.options.length] = new Option('№ SDSRU20170109/GLT от 09.01.2017','1');\n";
      break;

    case "iteco":
      
      echo "obj.options[obj.options.length] = new Option('№ SDSRU20171009/ITECORUSSIA от 09.10.2017','11');\n";
      break;
    case "rusglobal":
      
      echo "obj.options[obj.options.length] = new Option('№ SDSRU20150801/RUSGLOBAL от 01.08.2015','21');\n";
      break;

    case "transcord":

      echo "obj.options[obj.options.length] = new Option('№ SDSRU20181005/TransCord от 05.10.2018','31');\n";
      break;

    case "itella":

      echo "obj.options[obj.options.length] = new Option('№ SDSRU20150801/ITELLA от 01.08.2015','41');\n";
      break;

    case "vesta":

      echo "obj.options[obj.options.length] = new Option('№ SDSRU20181005/Vesta от 05.10.2018','51');\n";
      break;

    case "crafter":

      echo "obj.options[obj.options.length] = new Option('№ SDSRU20150801/Crafter от 01.08.2015','61');\n";
      break;

    case "union":

      echo "obj.options[obj.options.length] = new Option('№ 1 от 01.04.2018','71');\n";
      break;

    case "milarin":

      echo "obj.options[obj.options.length] = new Option('№ SDSRU20161101/GKMELARIN от 01.11.2016','81');\n";
      break;
  }  
}

?> 