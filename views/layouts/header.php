<?
$nav_menu = [
        'Військовий округ' => '/district',
        'Військові частини' => '/bases',
        'Військова техніка' => '/machines',
        'Військовослужбовці' => '/military',
        'Озброєння' => '/weapons'


];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../template/css/materialize.min.css">
    <link rel="stylesheet" href="../../template/css/main.css">
    <title>Воєнком</title>
</head>
<body>
    <nav class="main-nav">
        <div class="nav-wrapper">
            <a href="/" class="brand-logo">Збройні Сили України</a>
            <img src="../../template/media/zsu.png" >
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <?
                foreach ($nav_menu as $title_menu => $url_menu){
                    $active_link = strpos("%{$_SERVER['REQUEST_URI']}%", $url_menu) !== false ? 'link-active' : '';
                    echo " <li><a class='{$active_link}' href='{$url_menu}'>{$title_menu}</a></li>";
                }
                ?>
            </ul>
        </div>
    </nav>