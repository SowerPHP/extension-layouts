<!-- Diseño original de Alvarez.is -->
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Servicio de DNS gratuito (incluso DDNS)">
        <meta name="author" content="SASCO SpA">
        <meta name="keyword" content="dns, ddns, bind, bind10">
        <title><?=$_header_title?></title>
        <!-- Bootstrap core CSS -->
        <link href="<?=$_base?>/layouts/DASHGU/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link rel="stylesheet" href="<?=$_base?>/css/font-awesome.min.css" />
        <!-- Custom styles for this template -->
        <link href="<?=$_base?>/layouts/DASHGU/css/style.css" rel="stylesheet">
        <link href="<?=$_base?>/layouts/DASHGU/css/style-responsive.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="<?=$_base?>/layouts/DASHGU/js/jquery.js"></script>
        <script src="<?=$_base?>/layouts/DASHGU/js/bootstrap.min.js"></script>
        <script src="<?=$_base?>/layouts/DASHGU/js/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="<?=$_base?>/layouts/DASHGU/js/jquery.ui.touch-punch.min.js"></script>
        <script class="include" type="text/javascript" src="<?=$_base?>/layouts/DASHGU/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="<?=$_base?>/layouts/DASHGU/js/jquery.scrollTo.min.js"></script>
        <script src="<?=$_base?>/layouts/DASHGU/js/jquery.nicescroll.js" type="text/javascript"></script>
        <!-- scripts y estilos genéricos -->
        <script type="text/javascript" src="<?=$_base?>/js/__.js"></script>
        <script type="text/javascript" src="<?=$_base?>/js/form.js"></script>
        <link rel="stylesheet" href="<?=$_base?>/css/navpanel.css" />
        <script type="text/javascript" src="<?=$_base?>/js/app.js"></script>
<?=$_header_extra?>
    </head>
    <body>
        <section id="container" >
            <!-- **********************************************************************************************************************************************************
            TOP BAR CONTENT & NOTIFICATIONS
            *********************************************************************************************************************************************************** -->
            <!--header start-->
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Mostrar/ocultar menú de navegación"></div>
                </div>
                <!--logo start-->
                <a href="<?=$_base?>" class="logo"><b><?=$_body_title?></b></a>
                <!--logo end-->
<?php /*
                <div class="nav notify-row" id="top_menu">
                    <!--  notification start -->
                    <ul class="nav top-menu">
<?php
$tareas = [
    ['tarea'=>'T1', 'porcentaje'=>20],
    ['tarea'=>'T2', 'porcentaje'=>10],
    ['tarea'=>'T3', 'porcentaje'=>75],
];
$n_tareas = count($tareas);
$mensajes = [
    ['foto'=>'ui-zac.jpg', 'de'=>'Esteban', 'tiempo'=>'52 s', 'mensaje'=>'hola! q tal?']
];
$n_mensajes = count($mensajes);
?>
                        <!-- settings start -->
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                                <i class="fa fa-tasks"></i>
                                <?=$n_tareas?'<span class="badge bg-theme">'.$n_tareas.'</span>'."\n":''?>
                            </a>
                            <ul class="dropdown-menu extended tasks-bar">
                                <div class="notify-arrow notify-arrow-green"></div>
                                <li><p class="green">Tienes <?=$n_tareas?> tarea(s) pendiente(s)</p></li>
<?php foreach($tareas as &$tarea) : ?>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div class="desc"><?=$tarea['tarea']?></div>
                                            <div class="percent"><?=$tarea['porcentaje']?>%</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?=$tarea['porcentaje']?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$tarea['porcentaje']?>%">
                                                <span class="sr-only"><?=$tarea['porcentaje']?>% completado</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
<?php endforeach; ?>
                                <li class="external"><a href="#">Ver todas las tareas</a></li>
                            </ul>
                        </li>
                        <!-- settings end -->
                        <!-- inbox dropdown start-->
                        <li id="header_inbox_bar" class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                                <i class="far fa-envelope"></i>
                                <?=$n_mensajes?'<span class="badge bg-theme">'.$n_mensajes.'</span>'."\n":''?>
                            </a>
                            <ul class="dropdown-menu extended inbox">
                                <div class="notify-arrow notify-arrow-green"></div>
                                <li><p class="green">Tienes <?=$n_mensajes?> mensaje(s) nuevo(s)</p></li>
<?php foreach($mensajes as &$mensaje) : ?>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img alt="avatar" src="<?=$_base?>/layouts/DASHGU/img/<?=$mensaje['foto']?>"></span>
                                        <span class="subject">
                                            <span class="from"><?=$mensaje['de']?></span>
                                            <span class="time"><?=$mensaje['tiempo']?></span>
                                        </span>
                                        <span class="message"><?=$mensaje['mensaje']?></span>
                                    </a>
                                </li>
<?php endforeach; ?>
                                <li><a href="#">Ver todos los mensajes</a></li>
                            </ul>
                        </li>
                        <!-- inbox dropdown end -->
                    </ul>
                    <!--  notification end -->
                </div>
*/ ?>
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
<?php if (!$_Auth->logged()) : ?>
                        <li><a class="logout" href="<?=$_base?>/usuarios/ingresar"><span class="fas fa-sign-in-alt" aria-hidden="true"></span> Iniciar sesión</a></li>
<?php else : ?>
                        <li><a class="logout" href="<?=$_base?>/usuarios/salir"><span class="fas fa-sign-out-alt" aria-hidden="true"></span> Cerrar sesión</a></li>
<?php endif; ?>
                    </ul>
                </div>
            </header>
            <!--header end-->
            <!-- **********************************************************************************************************************************************************
            MAIN SIDEBAR MENU
            *********************************************************************************************************************************************************** -->
            <!--sidebar start-->
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">
<?php if ($_Auth->logged()) : ?>
                        <a href="<?=$_base?>/usuarios/perfil" title="Ver perfil del usuario <?=$_Auth->User->usuario?>">
                            <p class="centered"><img src="<?=$_Auth->User->getAvatar();?>" class="img-circle" width="60"></p>
                            <h5 class="centered"><?=$_Auth->User->nombre?> (<?=$_Auth->User->usuario?>)</h5>
                        </a>
<?php endif; ?>
<?php
function nav($nav, $check, $_page, $_base, $_Auth) {
    foreach ($nav as $link=>$name) {
        if ($check and !$_Auth->check($link))
            continue;
        $active = $_page == $link ? ' class="active"' : '';
        if ($link[0]=='/') $link = $_base.$link;
        if (isset($name['nav'])) {
            echo '                        <li class="sub-menu">',"\n";
            echo '                            <a href="javascript:;"',$active,'><i class="fa fa-',$name['icon'],'"></i> ',$name['name'],'</a>',"\n";
            echo '                            <ul class="sub">',"\n";
            foreach($name['nav'] as $l=>$n) {
                echo '                                <li><a href="',$link,$l,'">',$n,'</a></li>',"\n";
            }
            echo '                            </ul>',"\n";
            echo '                        </li>',"\n";
        } else {
            if (is_array($name)) {
                $title = isset($name['desc']) ? $name['desc'] : (isset($name['title']) ? $name['title'] : '');
                $icon = isset($name['icon']) ? $name['icon'] : '';
                $name = $name['name'];
            } else $title = $icon = '';
            echo '                        <li><a href="',$link,'" title="',$title,'"',$active,'><i class="fa fa-',$icon,'"></i> ',$name,'</a></li>',"\n";
        }
    }
}
nav($_nav_website, false, $_page, $_base, $_Auth);
if ($_Auth->logged()) {
    nav($_nav_app, true, $_page, $_base, $_Auth);
    nav(['/documentacion'=>['name'=>'Documentación','icon'=>'book']], false, $_page, $_base, $_Auth);
}
?>
                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->
            <!-- **********************************************************************************************************************************************************
            MAIN CONTENT
            *********************************************************************************************************************************************************** -->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper site-min-height" style="padding-top:15px;background:white">
<!-- BEGIN MAIN CONTENT -->
<?php
// menú de módulos si hay sesión iniciada
if (\sowerphp\core\App::layerExists('sowerphp/app') and $_Auth->logged() and $_module_breadcrumb) {
    echo '<ol class="breadcrumb">',"\n";
    $url = '/';
    foreach ($_module_breadcrumb as $link => &$name) {
        if (is_string($link)) {
            echo '    <li><a href="',$_base,$url,$link,'">',$name,'</a></li>',"\n";
            $url .= $link.'/';
        } else {
            echo '    <li class="active">',$name,'</li>';
        }
    }
    echo '</ol>',"\n";
}
// mensaje de sesión
$message = \sowerphp\core\Model_Datasource_Session::message();
if ($message) {
    $icons = [
        'success' => 'ok',
        'info' => 'info-sign',
        'warning' => 'warning-sign',
        'danger' => 'exclamation-sign',
    ];
    echo '<div class="alert alert-',$message['type'],'" role="alert">',"\n";
    echo '    <span class="glyphicon glyphicon-',$icons[$message['type']],'" aria-hidden="true"></span>',"\n";
    echo '    <span class="sr-only">',$message['type'],': </span>',$message['text'],"\n";
    echo '</div>'."\n";
}
// contenido de la página
echo $_content;
?>
<!-- END MAIN CONTENT -->
<?php if (\sowerphp\core\Configure::read('google.adsense')) : ?>
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle" style="display:block;margin-top:15px" data-ad-client="<?=\sowerphp\core\Configure::read('google.adsense.client')?>" data-ad-slot="<?=\sowerphp\core\Configure::read('google.adsense.slot')?>" data-ad-format="auto"></ins>
                    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
<?php endif; ?>
                </section><!--/wrapper -->
            </section><!-- /MAIN CONTENT -->
            <!--main content end-->
            <!--footer start-->
            <footer class="site-footer">
                <div class="text-center">
                    <?=!is_array($_footer)?$_footer:($_footer['left'].(isset($_footer['right'])?'<br/>'.$_footer['right']:''))?>
                    <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>
                </div>
            </footer>
            <!--footer end-->
        </section>
        <script src="<?=$_base?>/layouts/DASHGU/js/common-scripts.js"></script>
    </body>
</html>
