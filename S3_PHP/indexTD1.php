<?php
    function start_page($title)
    {
        echo ' <!DOCTYPE html> <htmllang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL
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
    start_page('Test');
?>

<?php
    $jour = date('d/m/Y', strtotime('2001-03-12'));
    echo $jour;
    echo "\n"?>
<br>
<?php
    echo date('F d, Y, H:i A');
?>
<br>


<?php
    end_page();
?>