
<?php
if (isset($_POST['bold'],))
{
    $text=$_POST['text'];
    echo"<div style=' border: 4px outset grey;
            border-radius: 5px;
            width: fit-content;
            color: blue;'><b>$text</b></div>";
}
elseif (isset($_POST['italic']))
{
    $text=$_POST['text'];
    echo"<div style=' border: 4px outset grey;
            border-radius: 5px;
            width: fit-content;
            color: blue;'><i>$text</i></div>";
}
elseif (isset($_POST['uppercase']))
{
    $text=$_POST['text'];
    $uppercase=strtoupper($text);
    echo"<div style=' border: 4px outset grey;
            border-radius: 5px;
            width: fit-content;
            color: blue;'>$uppercase</div>";
}
elseif (isset($_POST['lowercase']))
{
    $text=$_POST['text'];
    $lowercase=strtolower($text);
    echo"<div style=' border: 4px outset grey;
            border-radius: 5px;
            width: fit-content;
            color: blue;'>$lowercase</div>";
}
?>