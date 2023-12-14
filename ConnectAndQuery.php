<?php
class ConnectAndQuery {
    
 function setConnect(){
     $conn = mysqli_connect('localhost', 'root', '', 'test') or die("MySQL connect error");
     return $conn;
     }
    
 function GetXML() {
		  $r = file_get_contents('https://www.cbr.ru/scripts/XML_daily.asp');
		  $xml = simplexml_load_string($r);
		  return $xml;
        }

 function GetFromXML($setConnect) {
        $xml = $this->GetXML();
        
        foreach ($xml->Valute as $valute) {
            foreach($valute->Name as $name){
                $n = $name;
                foreach($valute->CharCode as $cc){
                    $c = $cc;
                    foreach($valute->VunitRate as $vr){
                        $v = $vr;
                        mysqli_query($setConnect, "INSERT INTO rate(name, charcode, vunitrate) VALUES('$n','$c', '$v')");
                    }
                }
            }
        }
        
     return $xml;
  }
}
?>
