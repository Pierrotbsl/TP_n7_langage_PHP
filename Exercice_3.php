<html>
<h1>TP_n°7_langage_PHP</h1>
<hr>
<h2>Exercice_3</h2>

<?php
trait One
{
    public function small($text)
    {
        echo 'balise small : <small>'.$text.'</small><br><br>';
    }
    public function big($text)
    {
        echo 'balise h4 : <h4>'.$text.'</h4><br><br>';
    }
}
trait Two
{
    public function small($text)
    {
        echo 'balise i : <i>'.$text.'</i><br><br>';
    }
    public function big($text)
    {
        echo 'balise h2 : </h2><h2>'.$text.'</h2><br><br>';
    }
}

class Text
{

    use One, Two
    {
        Two::small insteadof One;
        One::big insteadof Two;
    }
    public function write($text)
    {
        $this->small($text);
        $this->big($text);

    }
}

$trait = new Text;
$trait->write("Texte");

?>



