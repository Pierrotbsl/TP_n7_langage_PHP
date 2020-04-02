<html>
<h1>TP_n°7_langage_PHP</h1>
<hr>
<h2>Exercice_1</h2>


<?php

/*final*/ class Formulaire
{
    public function __construct($_nomfichier, $_methode)
    {
        echo "<form action=\"$_nomfichier\" method=\"$_methode\"></form>";
    }
    public function ajouterzonetexte($_nom)
    {
        echo "<div>";
        echo "Votre ".$_nom.": <input type=\"text\" id=$_nom name=\"user_\".$_nom><br>";
        echo "\n";
        echo "</div><br>";

    }
    public function ajouterbouton()
    {
        echo "<div>";
        echo "<input type=\"submit\" name=\"valider\" value=\"Valider\"/><br>";
        echo "</div><br>";

    }
    public function getform()
    {
        echo "<div>";
        echo "code HTML : <br>";
        $page = file_get_contents("TestFormulaire.php");
        print_r($page);
        echo "</div>";
    }
}
class Formulaire2 extends Formulaire
{
    /*final*/ function ajouterradio($_nom)
{
    echo "$_nom <input type=\"radio\" name=\"sexe[]\" value=name=\"user_\".$_nom>&nbsp;";
}
    function ajoutercheckbox($_nom)
    {
        echo "<br>$_nom <input type=\"checkbox\" name=\"activity[]\" value=name=\"user_\".$_nom>&nbsp;";
    }

}
$form = new Formulaire2('Exercice_1.php', 'post');
$form->ajouterzonetexte(nom);
$form->ajouterzonetexte(code);
$form->ajouterbouton();
$form->ajouterradio(Homme);
$form->ajouterradio(Femme);
$form->ajoutercheckbox(Tennis);
$form->ajoutercheckbox(Équitation);

?>