<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head lang="ru">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <title>Домашняя работа № 3 (данные заполненной формы)</title>
</head>
<body>

<?php

//var_dump($_REQUEST); exit;
//echo $_REQUEST['firstname'];
$firstName = $_REQUEST['firstname'];
$secondName = $_REQUEST['secondname'];
$gender = $_REQUEST['gender'];
if ($gender = 'm') {
    $genderWord = 'Чоловіча';
} else {
    $genderWord = 'Жіноча';
}
$age = $_REQUEST['age'];
$gender2 = $_REQUEST['gender2'];
$gender2Word = ($gender2 == 'm') ? 'Чоловіча' : 'Жіноча'; //тернарний оператор розгалудження:
// http://php.net/manual/ru/language.operators.comparison.php#language.operators.comparison.ternary
$genderAlert = '';
// @todo порівняти змінні $gender і $gender2 і додати меседж, якщо вони виявляться різними
$birthday = $_REQUEST['birthday'];
$status = $_REQUEST['status'];
$familyStatusWord = $status;
// @todo використовуючи оператор switch-case записати сімейний стан словом у змінну $familyStatusWord
$statusSocial = $_REQUEST['status-soc'];
$address = $_REQUEST['address'];

function activityToUkr($activityName)
{
    switch($activityName)
    {
        case 'sleeping':
            return 'сплю';
            break;
        case 'friends':
            return 'гуляю з друзями';
            break;
        case 'fishing':
            return 'ходжу на рибалку';
            break;
        case 'games':
            return 'граю в ігри';
            break;
        default:
            return 'щось невірне вказали';
    }
}

$activities = $_REQUEST['activities']; // it's an array!!!
$activitiesAsString = '';
foreach ($activities as $activityName => $activityAnswer) {
    $activityNameUkr = activityToUkr($activityName);
    $activitiesAsString = $activitiesAsString . $activityNameUkr . ',';
}
// @todo Переписати код вище, застосувавши php-функцію implode
// @todo Написати функцію, яка приймає рядок символів англійською (вид діяльності, варіанти - з форми) а повертає строку символів українською

$frequency = $_REQUEST['frequency'];
$booksHaveRead = $_REQUEST['books'];
$comments = $_REQUEST['comments'];
$multiplesel = $_REQUEST['multiplesel'];
$multipleselAsString = '';// @ Самостійно напишіть код, щоб масив опцій відображався як рядок символів
//$samplefield = $_REQUEST['samplefield']; // як виявилось, disabled поля не відправляються на сервер
$spam = $_REQUEST['spam']; // array!!!
$spamAsString = '';// @ Самостійно напишіть код, щоб масив опцій відображався як рядок символів
$complexity = $_REQUEST['complexity'];
// @todo написати функцію-перекладач на українську (див. приклад вище)
?>
<h1>Дякую, що заповнили нашу анкету!</h1>
<p>Перевірте, чи все вірно заповнено:</p>
<ul>
    <li>
        <strong>Ваше ім'я:</strong>
        <?php echo $firstName." ".$secondName; ?>
    </li>
    <li>
        <strong>Ваша стать:</strong>
        <?php echo $genderWord; ?>
        <?php echo $genderAlert; ?>
    </li>
    <li>
        <strong>Ваш вік:</strong>
        <?php echo $age; ?>
    </li>
    <li>
        <strong>Ваш день народження:</strong>
        <?php echo $birthday; ?>
    </li>
    <li>
        <strong>Ваш сімейний стан:</strong>
        <?php echo $familyStatusWord; ?>
    </li>
    <li>
        <strong>Ваш соціальний статус:</strong>
        <?php echo $statusSocial; ?>
    </li>
    <li>
        <strong>Ваша домашня адреса:</strong>
        <?php echo $address; ?>
    </li>
    <li>
        <strong>На вихідних Ви:</strong>
        <?php echo $activitiesAsString; ?>
    </li>
    <li>
        <strong>Ви вибрали частоту:</strong>
        <?php echo $frequency; ?>
    </li>
    <li>
        <strong>Ви прочитали <?php echo $booksHaveRead; ?> книжок за все життя</strong>
        <?php echo $booksHaveRead; ?>
    </li>
    <li>
        <strong>Ви вибрали частоту:</strong>
        <?php echo $frequency; ?>
    </li>
    <li>
        <strong>Ваші коментарі:</strong>
        <?php echo $comments; ?>
    </li>
    <li>
        <strong>В прикладі з multiselect Ви вибрали:</strong>
        <?php echo $multipleselAsString; ?>
    </li>
    <li>
        <strong>Ви погодились на такі розсилки спаму:</strong>
        <?php echo $spamAsString; ?>
    </li>
    <li>
        <strong>Ви оцінили складність даного завдання як:</strong>
        <?php echo $complexity; ?>
    </li>
</ul>

</body>
</html>