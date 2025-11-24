<?php
declare(strict_types=1);

require_once("HTMLPage.php");
require_once("HTMLP.php");
require_once("HTMLForm.php");
require_once("HTMLInput.php");

$head = new HTMLHead("Hello");
$body = new HTMLBody("Body");
$page = new HTMLPage($head, $body);

$body->add(new HTMLP("hello"));
$body->add(new HTMLP("toto"));
$body->add(new HTMLP("titi"));

echo $page->__toString();

echo "Formulaire";

$form = new HTMLForm("result.php");
$form->add(new HTMLInput("Nom", "nom", "text"," "));
$form->add(new HTMLInput("Prenom", "prenom", "text"," "));
$form->add(new HTMLInput(" ","submit", "submit"," Go!"));

echo $form;


?>