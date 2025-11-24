<?php
 function generer_en_tete_html() : string
 {
 	$s = "<html>\n";
    $s.= "<head>\n";
    $s.= "      <title>this is head of html document!</title>\n";
    $s.= "</head>\n";
    $s.="<body>\n";
    return $s;
 }
 
 function generer_corp_html():string{
 	$c= "<h1>Hello World</h1>\n";
    $c.= "<p>this is paragraphe</p>\n";
    return $c;
 }
 
 function generer_bas_html():string{
 	$b ="</body>\n";
    $b.= "</html>\n";
 }
 
 function generer_formulaire(int $secret, string $historique= "") : string{
    $s = "<form action ="cookie.php" method = "POST">"."\n"
    $s .= "Saisie : <input type = "number" name = "saisir" value = ""/><br/>\n"
    $s .= '<input type = "hidden" name = "secret" value = "'.$secret.'"/><br/>\n"'
    $s .= '<input type = "text" name = "historique" value = "'.$historique.'"/><br/>\n"'
    $s .= '<input type = "submit" name = "submit" value = "Go !"/><br/>\n"'


 }

?> 