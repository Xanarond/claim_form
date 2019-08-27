<?php

if(isset($_GET['companyCode'])){
  
  switch($_GET['companyCode']){
    
    case "ООО «Глобал Логистик Транспорт»":

      echo "obj.options[obj.options.length] = new Option('№ SDSRU20170109/GLT от 09.01.2017','№ SDSRU20170109/GLT от 09.01.2017');\n";
      break;

    case "ООО «Итеко Россия»":
      
      echo "obj.options[obj.options.length] = new Option('№ SDSRU20171009/ITECORUSSIA от 09.10.2017','№ SDSRU20171009/ITECORUSSIA от 09.10.2017');\n";
      break;

    case "ООО «ТЭК РУСГЛОБАЛ»":
      
      echo "obj.options[obj.options.length] = new Option('№ SDSRU20150801/RUSGLOBAL от 01.08.2015','№ SDSRU20150801/RUSGLOBAL от 01.08.2015');\n";
      break;

    case "ООО «ТрансКорд»":

      echo "obj.options[obj.options.length] = new Option('№ SDSRU20181005/TransCord от 05.10.2018','№ SDSRU20181005/TransCord от 05.10.2018');\n";
      break;

    case "ООО «Ителла»":

      echo "obj.options[obj.options.length] = new Option('№ SDSRU20150801/ITELLA от 01.08.2015','№ SDSRU20150801/ITELLA от 01.08.2015');\n";
      break;

    case "ООО «Транспортная компания «Веста»":

      echo "obj.options[obj.options.length] = new Option('№ SDSRU20181005/Vesta от 05.10.2018','№ SDSRU20181005/Vesta от 05.10.2018');\n";
      break;

    case "ООО «Крафтер-ЦФО»":

      echo "obj.options[obj.options.length] = new Option('№ SDSRU20150801/Crafter от 01.08.2015','№ SDSRU20150801/Crafter от 01.08.2015');\n";
      break;

    case "ООО «Юнион Сервис Рус»":

      echo "obj.options[obj.options.length] = new Option('№ 1 от 01.04.2018','№ 1 от 01.04.2018');\n";
      break;

    case "ООО «Миларин»":

      echo "obj.options[obj.options.length] = new Option('№ SDSRU20161101/GKMELARIN от 01.11.2016','№ SDSRU20161101/GKMELARIN от 01.11.2016');\n";
      break;
  }  
}
