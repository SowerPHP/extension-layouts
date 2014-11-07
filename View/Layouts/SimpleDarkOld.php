<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- Design by http://delaf.cl -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <meta name="generator" content="SowerPHP"/>
        <title><?=$_header_title?></title>
        <link rel="shortcut icon" href="<?=$_base?>/img/favicon.png" />
        <link rel="stylesheet" media="screen" type="text/css" href="<?=$_base?>/layouts/<?=$_layout?>/css/screen.css" />
<?=$_header_extra?>
    </head>
    <body>
        <div id="page">
            <div id="header">
                <div class="title_<?php echo strpos($_body_title, "\n") ? 'ascii' : 'normal'; ?>">
<?php echo $_body_title; ?>
                </div>
            </div>
            <div id="navigation">
<?php
    foreach($_nav_website as $link => &$name) {
        if($link[0]=='/') $link = $_base.$link;
        if(is_array($name)) echo '                <a href="',$link,'" title="',$name['title'],'">',$name['name'],'</a>',"\n";
        else echo '                <a href="',$link,'">',$name,'</a>',"\n";
    }
?>
            </div>
            <div id="content">
<?php
$message = \sowerphp\core\Model_Datasource_Session::message();
if($message) echo '<div class="session_message session_message_',$message['type'],'">',$message['text'],'</div>';
echo $_content;
?>
            </div>
            <div id="footer">
                <?= is_array($_footer) ? implode (' ', $_footer): $_footer ?>
            </div>
        </div>
    </body>
</html>
