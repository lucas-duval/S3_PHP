<?php
function start_page($title)
{
    echo ' <!DOCTYPE html> <htmllang="fr"><head><link id="main-stylesheet" rel="stylesheet" href="css/style.css"/><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL
    ;
};
?>

<?php
function end_page()
{
    echo ' <!body> <!html>';
};
?>

<?php
    start_page('Page Calculatrice');
?>

<form action="calcul.php" method="post">
    <div>
        <label>
            op1
        </label>
    </div>
    <div>
        <label>
            op2
        </label>
    </div>
    <input checked="checked" type="radio" name="op" value="*"/>*<br/>
    <input type="radio" name="op" value="+"/>+<br/>
    <input type="radio" name="op" value="-"/>-<br/>
    <input type="radio" name="op" value="/"/>/<br/>
    <input type="submit" name="Soumettre">
</form>

<?php
    end_page();
?>