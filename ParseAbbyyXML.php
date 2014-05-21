<?php

function parseAbbyyXML($response)
{
   // print_r($response);

   $xml = simplexml_load_string($response);
   print_r($xml);

   // echo "<br/><br/>------------------------------------------";
   // print_r($xml->page->text->par);

   $resultTextString = '';

   $texts = $xml->page->block->text;
   for ($t = 0; $t < sizeof($texts); $t++)
   {
      $pars = $texts[$t];
      for ($p = 0; $p < sizeof($pars); $p++)
      {
         $lines = $pars[$p]->line;
         for ($l = 0; $l < sizeof($lines); $l++)
         {
            $chars = $lines[$l]->formatting->charParams;
            for ($c = 0; $c < sizeof($chars); $c++)
            {
               // echo $chars[$c];
               $resultTextString += $chars[$c];
            }
         }
      }
   }
   return $resultTextString;
}

?>