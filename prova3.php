<!DOCTYPE html>
<html lang=''>
   <head>
      <title></title>
   </head>
   <body>
      <?php
         $marques=array("Volvo","BMW","Toyota");
         $dies_mes=array(31,30,31,30,31,30,31,31,30,31);

         echo "Quin cotxe tens: " . $marques[1] . "<br>";

         $anys= array("Pere"=>"35", "Benito"=>"37", "Joel"=>"43");
         echo "Anys Pere: " . $anys['Pere'] . "<br>";
         //echo "Anys per posicio?: " . $anys[2] . "<br>"; //incorrecte

         $info = array(
            "pere" => array("cotxe"=>"BMW", "anys"=>"35"),
            "benito" => array("cotxe"=>"Volvo", "anys"=>"23"),
            "joel" => array("cotxe"=>"Toyota", "anys"=>"75")
         );

         echo "El cotxe del pere es: " . $info["pere"]["cotxe"] . "<br>";
         echo "Les persones son: " . count($info) ."<br>";
         echo "Les informacions de pere son: " . count($info["pere"]);
      ?>
   </body>
</html>