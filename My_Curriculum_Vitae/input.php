<?php
if(isset($_POST['firstname']) && isset($_POST['eduform']) && 
    isset($_POST['comment']) && isset($_POST['courses'])) 
{
    $name = htmlentities($_POST['firstname']);
    $eduform = htmlentities($_POST['eduform']);
    $hostel = "РЅРµС‚";
    if(isset($_POST['hostel'])) $hostel = "РґР°";
    $comment = htmlentities($_POST['comment']);
    $courses = $_POST['courses'];
    $output ="
    <html>
    <head>
    <title>РђРЅРєРµС‚РЅС‹Рµ РґР°РЅРЅС‹Рµ</title>
    </head>
    <body>
    Р’Р°СЃ Р·РѕРІСѓС‚: $name<br />
    Р¤РѕСЂРјР° РѕР±СѓС‡РµРЅРёСЏ: $eduform<br />
    РўСЂРµР±СѓРµС‚СЃСЏ РѕР±С‰РµР¶РёС‚РёРµ: $hostel<br />
    Р’С‹Р±СЂР°РЅРЅС‹Рµ РєСѓСЂСЃС‹:
    <ul>";
    foreach($courses as $item)
        $output.="<li>" . htmlentities($item) . "</li>";
    $output.="</ul></body></html>";
    echo $output;
}
else
{   
    echo "Р’РІРµРґРµРЅРЅС‹Рµ РґР°РЅРЅС‹Рµ РЅРµРєРѕСЂСЂРµРєС‚РЅС‹";
}
?>



<h2>Анкета</h2>
<form action="input.php" method="POST">
<p>Введите имя:<br> 
<input type="text" name="firstname" /></p>
<p>Форма обучения: <br> 
<input type="radio" name="eduform" value="очно" />очно <br>
<input type="radio" name="eduform" value="заочно" />заочно </p>
<p>Требуется общежитие:<br>
<input type="checkbox" name="hostel" />Да</p>
<p>Выберите курсы: <br>
<select name="courses[]" size="5" multiple="multiple">
    <option value="ASP.NET">ASP.NET</option>
    <option value="PHP">PHP</option>
    <option value="Ruby">RUBY</option>
    <option value="Python">Python</option>
    <option value="Java">Java</option>
</select></p>
<p>Краткий комментарий: <br>
<textarea name="comment" maxlength="200"></textarea></p>
<input type="submit" value="Выбрать">
</form>
