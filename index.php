<?php
    require 'core.php'; 
	 if(isset($_SESSION['id'])){
      header("Location: $site/me");
  }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title><?php echo $config['sitename']; ?> - ¡Haz amig@s, únete a la diversion, pásalo en grande!</title>
    <meta charset="utf-8">
    <meta name="robots" content="index,follow,all">
	
    <meta name="description"
          content="<?php echo $config['sitename']; ?>, ¡Haz amig@s, únete a la diversión, pásalo en grande en mayor Hotel virtual, con creditos gratis, actualizado y lo mejor del 2019.">
    <meta name="keywords"
          content="Habbo, Habbo Hotel, Habbo Latino, ,Habbo-Hotel, Habbo Club, HC gratis, Furnis gratis, Creditos gratis, gratis, chat, jugar, jugar Habbo, habbez, habbez hotel, habbolatino, habbo.lu, <?php echo $config['sitename']; ?>, <?php echo $config['sitename']; ?>hotel, <?php echo $config['sitename']; ?>.es, <?php echo $config['sitename']; ?>hotel.es, habbo apk, habbo pvp, habbo hartico, habbolandia, habbo fantasy, haddoz, <?php echo $config['sitename']; ?>, <?php echo $config['sitename']; ?>">
    <meta name="google-site-verification" content="-Xv15WeorVk1nA2RHLG1Caun8CT7FUhnwDG0dEq_2zM">
    <meta name="build" content="">
   <link rel="icon" type="image/x-icon" href="<?php echo $config['site']; ?>/images/favicon.ico" />

    <meta property="og:image" content="<?php echo $config['site']; ?>/images/dominio.png">
    <meta property="og:site_name" content="<?php echo $config['sitename']; ?> Hotel:">
    <meta property="og:title" content="<?php echo $config['sitename']; ?> - ¡Créditos gratis, VIP y muchos eventos divertidos!">
    <meta property="og:description"
          content="Bienvenido a <?php echo $config['sitename']; ?>, aquí podrás hacer amigos, crear tus salas, participar en eventos, a que esperas?">


    <link rel="shortcut icon" href="<?php echo $config['site']; ?>/favicon.ico">

    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" type="text/css">
	<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <link href="<?php echo $config['site']; ?>/styles/css/fontawesome.min.css" rel="stylesheet" type="text/css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link href="<?php echo $config['site']; ?>/styles/css/app.css?adrffhddddafsdsd47920" rel="stylesheet" type="text/css">
	<link href="<?php echo $config['site']; ?>/styles/css/bootstrap-customv4.css?da" rel="stylesheet" type="text/css">


    <script type="text/javascript" src="<?php echo $config['site']; ?>/styles/js/jquery.js?51786"></script>
    <script type="text/javascript" src="<?php echo $config['site']; ?>/styles/js/bootstrap.js?98093"></script>
	    <script type="text/javascript" src="<?php echo $config['site']; ?>/styles/js/jquery-animatenum.js?35649"></script>
    <script type="text/javascript" src="<?php echo $config['site']; ?>/styles/js/global.js?32368"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    </head>

<body style="background:url(https://i.imgur.com/n9fNHMH.png);">
<style>
.header__register-caption:hover{transform: scale(1.1);
	transition:1s;}
.header__register-caption{transition:1s;}
</style>
    <!-- Header -->
     <header class="header">
        <div class="header__image" style="box-shadow: -2px 4px 0px 0px #00000024;background: url(https://i.imgur.com/UcmYXWG.png) -143em -135.5em;height:379px;background-color: #9c6c1b;">

            <div class="header__register">
                <div class="header__register-caption" id="crearcuenta" style="font-size:13px;padding: 17px 39px 8px 40px;right: 5em;top: 232px;height: 133px;background:url(/images/pergamino.png) no-repeat 0px 2px;color: #673908;box-shadow:none;">
                    <img style="top: 15.5px;left: 37.5px;" src="https://www.habbo.es/habbo-imaging/avatarimage?figure=ha-1013-91.lg-270-110.hd-3091-2.ch-250-1409.hr-28021715-34.fa-1208-1320.sh-990000055-92.wa-990000052-110&amp;headonly=1&amp;head_direction=2&amp;size=s&amp;gesture=sml">

                    <b style="color: #673908;font-size:18px;padding-left: 25px;">El Sheriff: ¿Qué es <?php echo $config['sitename']; ?>?</b><br>
					Nuestra comunidad es <b style="color:#673908;">plataforma virtual</b> donde podrás conocer <b style="color:#673908;">gente nueva, chatear, crear tu casa, besar, robar...</b>, 
					y una infinidad de cosas más que tú puedes descubrir. ¡Nos has pillado en una época de <b style="color:#673908;">vaqueros</b>, concretamente en el <b style="color:#673908;">Lejano Oeste</b>, 
					así que ponte tu mejor ropa de la época y prepara tu revólver, la cosa va a ser de tiros!
                </div>

                <a href="<?php echo $config['site']; ?>/register">
                    <button class="header__register-button" style="right: 12em;top:-211px;background: linear-gradient(#cca61d,#cca61d, #9a7e17) ;height: 107px;font-size: 20px;border: 1px solid #7b5513;color: white;">
                        Crea una nueva cuenta
						<h6>¡Somos <b style="color:white;"><?php $users = $conn->query("SELECT COUNT(*) AS total FROM users");$u = $users->fetch_array(); echo $u['total']; ?></b> registrados!</h6>
                    </button>
                </a>
            </div>

            <a href="<?php echo $config['site']; ?>/auth/redirect/facebook">
                <button class="header__register-button header__register-button--facebook" style="margin-top: 100px !important;padding: 0 33px;padding: 0 33px;border-radius: 0px 0px 9px 9px;font-size: 10px;right: 31em;height: 29px;">
                    Inicia sesión con Facebook
                </button>
            </a>
        
		
        <div class="header__strip" style="padding: 34px 20px 0px 20px;width: 31em;height: 100%;margin-left: 100px;background:url(https://i.imgur.com/FgT7LP5.jpg);">
            <div class="header__logo" style="margin: -10px -42px;">
                <img src="https://i.imgur.com/YWJyvsj.png" alt="<?php echo $config['sitename']; ?>" style="margin: -35px 32px;">
            </div>
			 <div class="header__online-counter" style="box-shadow:none;width: fit-content;position: initial;height: 31px;margin-left: 231px;margin-top: 41px;padding: 6px 20px;border-radius: 3px;background: #fff;">
          <b><?php echo online($conn); ?></b> conectados
            </div>
            <div class="header__form" style="margin-left:0;max-width:none;">
                <form method="post" action="<?php echo $config['site']; ?>/src/Ajax/login.php" id='page_login' class="login-form" style="width: 429px;display: block; autocomplete="off">
					<script>
					$("#page_login").submit(function(event){
							event.preventDefault(); //prevent default action 
							var post_url = $(this).attr("action"); //get form action url
							var request_method = $(this).attr("method"); //get form GET/POST method
							var form_data = $(this).serialize(); //Encode form elements for submission

							$.ajax( {
							  url: post_url,
							  type: request_method,
							  data: new FormData( this ),
							  processData: false,
							  contentType: false
							}).done(function(response){
								$("#server-results").html(response);
							});
						});
						</script>
					<input type="hidden" name="tz" id="tz" value="Europe/Madrid">
                    <input type="hidden" name="country" id="country" value="00">

                    <div class="login-form__input">
                        <input id="username" name="username" type="text" placeholder="Usuario..." required style=" padding: 5px 27px;background: url(/images/head.png) no-repeat 6px 12px , #fcfcfc;width: 363px;max-width:363px;;margin-bottom:15px;" autocomplete="off" required">
                    </div>

                    <div class="login-form__input">
                        <input id="password" name="password" type="password" placeholder="Contraseña..." required style=" padding: 5px 27px;background: url(/images/lock.png) no-repeat 8px 14px , #fcfcfc;width: 363px;max-width:363px;margin-bottom:15px;" autocomplete="off" required">
                    </div>

                    <button class="login-form__button" id="login-submit" style="margin:none;background-color: #cca61d;border-color: #8c7110;">Iniciar sesión</button>
                    <select class="login-form__button" id="login-submit" style="margin:none;background-color: #cca61d;border-color: #8c7110;margin-top: -46px;margin-left: 175px;">
						<option value="es" selected>Espa&ntilde;ol</option>
                        <option value="en" >English</option>
					</select>
                </form>
				<div id="open_forgot" style="margin-left: 1em;">
                   <a style="color: white;" href="#" id="recoverButton" class="forgot">
                        He olvidado mi contraseña.
                    </a>
                    
                </div>
            </div>
        </div>
		</div>
    </header>

    <!-- End header -->

    <!-- Content -->
	  
         <div class="content" style="padding-right:0;padding-left:0;height: -webkit-fill-available;max-height: 26em;background: url(/images/wildwest_background_left.png) left 51px no-repeat, #6f3d09;margin:0;margin-left:0;margin-right:0;width:100%;">
	<div class="box__title" style="width:100%;height: 3em;padding: 9px;border-radius: 0px;background: #673908;">
                   <img src="/images/icons/WWB37.gif" style="background:#583106;padding:3px;border-radius:4px;margin-right:5px;"> Últimas noticias
                </div>
		<div class="articles" style="width: 76%;margin-right:1em;margin-top: 7em;float: right;right: 0;column-count: 4;right:1px;column-gap: 1.25rem;">
                        						
				
                        						
						
							
                              <div class="article-card" style="border-radius: 9px 9px 0px 0px;border: 1px solid transparent;background:transparent;">
                                <div class="article-card__image" style="box-shadow: inset 0px -20px 13px #6f3d09;background-image:url( https://i.imgur.com/phwU8Z2.jpg);height: 73px;background-size: 100%;">
                                <div class="article-card__info" style="background: #6f3d09;width: 100px;color: white !important;margin-top: -1px;border-radius: 0px 0px 7px 7px;border: 1px solid #6b570e;padding: 4px;margin-left: 12em;">
                                       Hace 2 días
                                    </div>
                                </div>
                                    <div class="article-card__body" style="background:transparent;" >
                                    <div class="article-card__title" style="color:white;bottom:2px;">
                                        &iexcl;Concurso de Construcci&oacute;n! | LEJANO OESTE
                                    </div>
                                    <div class="article-card__short" style="font-size: 12px;color: #ffffffe0;">
                                         &iquest;Se te da bien construir, forastero? &iexcl;Esta es tu oportunidad!
                                    </div>						
                                    
                                </div>
                            </div>
							
                        						
						
							
                              <div class="article-card" style="border-radius: 9px 9px 0px 0px;border: 1px solid transparent;background:transparent;">
                                <div class="article-card__image" style="box-shadow: inset 0px -20px 13px #6f3d09;background-image:url( https://1.bp.blogspot.com/-TjigDf8wehY/XqcD8C3qMbI/AAAAAAAAEf0/kdmpxtI3MN8BlBMiuwkYnAyG2tEzLjBQACLcBGAsYHQ/s1600/portadalejanooestenoticia1.png);height: 73px;background-size: 100%;">
                                <div class="article-card__info" style="background: #6f3d09;width: 100px;color: white !important;margin-top: -1px;border-radius: 0px 0px 7px 7px;border: 1px solid #6b570e;padding: 4px;margin-left: 12em;">
                                       Hace 1 semana
                                    </div>
                                </div>
                                    <div class="article-card__body" style="background:transparent;" >
                                    <div class="article-card__title" style="color:white;bottom:2px;">
                                        &iexcl;Campa&ntilde;a del Lejano Oeste!
                                    </div>
                                    <div class="article-card__short" style="font-size: 12px;color: #ffffffe0;">
                                         Muchos eventos te est&aacute;n esperando, no te los pierdas, forastero.
                                    </div>						
                                    
                                </div>
                            </div>
							
                        						
						
							
                              <div class="article-card" style="border-radius: 9px 9px 0px 0px;border: 1px solid transparent;background:transparent;">
                                <div class="article-card__image" style="box-shadow: inset 0px -20px 13px #6f3d09;background-image:url( https://i.imgur.com/bm5H2JF.jpg);height: 73px;background-size: 100%;">
                                <div class="article-card__info" style="background: #6f3d09;width: 100px;color: white !important;margin-top: -1px;border-radius: 0px 0px 7px 7px;border: 1px solid #6b570e;padding: 4px;margin-left: 12em;">
                                       Hace 1 semana
                                    </div>
                                </div>
                                    <div class="article-card__body" style="background:transparent;" >
                                    <div class="article-card__title" style="color:white;bottom:2px;">
                                        &iexcl;Regresan las Oleadas P&uacute;blicas a <?php echo $config['sitename']; ?>!
                                    </div>
                                    <div class="article-card__short" style="font-size: 12px;color: #ffffffe0;">
                                         Nuestras oleadas, se realizar&aacute;n cada Martes a las 21:00 Horario Peninsular Espa&ntilde;ol ! Premios Incre&iacute;bles a todos los que participen, te esperamos!
                                    </div>						
                                    
                                </div>
                            </div>
							
                        						
						
							
                              <div class="article-card" style="border-radius: 9px 9px 0px 0px;border: 1px solid transparent;background:transparent;">
                                <div class="article-card__image" style="box-shadow: inset 0px -20px 13px #6f3d09;background-image:url( https://i.imgur.com/KHV8buF.png);height: 73px;background-size: 100%;">
                                <div class="article-card__info" style="background: #6f3d09;width: 100px;color: white !important;margin-top: -1px;border-radius: 0px 0px 7px 7px;border: 1px solid #6b570e;padding: 4px;margin-left: 12em;">
                                       Hace 2 semanas
                                    </div>
                                </div>
                                    <div class="article-card__body" style="background:transparent;" >
                                    <div class="article-card__title" style="color:white;bottom:2px;">
                                        &iexcl;NUEVA CONVOCATORIA DE ENTREVISTAS!
                                    </div>
                                    <div class="article-card__short" style="font-size: 12px;color: #ffffffe0;">
                                         9 de mayo a las 23:00 HPE...
                                    </div>						
                                    
                                </div>
                            </div>
							
                         
                    </div>
                </div>
            </div>
        </div>
       <div class="content" style="padding-right:0;border-bottom: 3px solid #422a0c;box-shadow: -2px 4px 0px 0px #00000024;padding-left:0;height:200px;background:url(/images/wildwest_background_right.png) right no-repeat,#cca61d;margin:0;margin-left:0;margin-right:0;width:100%;">
	<div class="box__title" style="width:100%;height: 3.3em;padding: 9px;border-top: 3px solid #00000038;border-radius: 0px;background: #bf9b1a;">
                              <img src="/images/icons/WWB08.gif" style="background:#00000026;padding:3px;border-radius:4px;margin-right:5px;"> Últimos registrados
                </div>
	<div class="last-users" style="width: 64%;margin-left:10px;">
                <?php
					$last = $conn->query("SELECT * FROM users ORDER BY id DESC LIMIT 4");
					while ($l = mysqli_fetch_assoc($last)) {
				?>        
                    <div class="last-user" style="max-width: 25%;">
                            <div class="last-user__box">
                                <div class="last-user__figure" style="background-color: #bf9b1a;width: 60px;float: left;border-radius:4px;">
                                    <img src="https://www.habbo.es/habbo-imaging/avatarimage?figure=<?php echo $l['look']; ?>&amp;direction=2&amp;head_direction=2&amp;gesture=spk&amp;img_format=gif&amp;headonly=1&amp;action=default">
                                </div>

                                <div class="last-user__username" style="color:white;">
                                    <?php echo $l['username']; ?>
                                </div>

                                <div class="last-user__date" style="color: #ffffff82 !important;">
                                    <?php echo LastUsedUser($user['account_created']); ?>
                                </div>
                            </div>
                        </div>
					<?php } ?>

                                            </div>
                </div>
            </div>

    <!-- End content -->


  

    <div class="modal fade" id="recover.Modal" tabindex="-1" role="dialog" aria-labelledby="basicModal"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="display:block;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-top:-12px;">
                        &times;
                    </button>
                    <h4 class="modal-title" style="color: black;">Recuperar contraseña</h4> 
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <p style="font-size: 85%; color: #464646">Escribe el correo electrónico que
                            asociaste a la cuenta que quieres recuperar
                            y pulsa en el botón de enviar, en unos pocos minutos recibirás un correo
                            electrónico con un enlace para resetear tu contraseña.</p>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <form action="https://hekos.es/api/player/reset-password/send" method="post">
                                    <input type="hidden" name="_token" value="acpSMzWz4gxdnfoT64jQomddm9OKCMKTSchtBtkl">
                                    <div class="input-group">
                                        <input type="email" name="email" class="form-control"
                                               placeholder="Correo electrónico de tu cuenta" required>
                                        <span class="input-group-btn">
                                            <button class="btn btn-default">Enviar</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <small style="color: #6f6f6f">Solo podrás recuperar tu cuenta si le asignaste un
                        correo
                        electrónico válido y del que tengas acceso.
                    </small>
                </div>
            </div>
        </div>
    </div>

    

    
    </body>

<footer class="footer" style="background:url(https://i.imgur.com/FgT7LP5.jpg);color:white;">
    <div class="footer__left">
        <div class="footer__extended-copy"  style="color:white !important;">
            Se prohíbe la copia total o parcial de cualquier contenido de este sitio.
        </div>

        <div class="footer__links"  style="color:white !important;">
            <div class="footer__link">
                <a href="<?php echo $config['site']; ?>/register">Crea tu cuenta</a>
            </div>

            <div class="footer__link">
                <!-- TODO: replace this -->
                <a href="<?php echo $config['site']; ?>/papers/terms-of-use">Terminos de uso</a>
            </div>

            <div class="footer__link">
                <!-- TODO: replace this -->
                <a href="<?php echo $config['site']; ?>/papers/privacy-policies">Política de privacidad</a>
            </div>
        </div>
    </div>

    <div class="footer__copy"  style="color:white !important;">
       <b style="color:#cba51d;"> <?php echo $config['sitename']; ?> Hotel</b> &copy; <?php echo date('Y'); ?>

        <div class="footer__credits" style="color:white !important;">
            Coded by Caalipo  <a style="color:red;">✏️</a><br>Thanks <b style="color:#cba51d;">Wekez</b>

        </div>
    </div>
</footer>

<script type="text/javascript" src="<?php echo $config['site']; ?>/styles/js/avatar-generate.js?24835"></script>
<script type="text/javascript" src="<?php echo $config['site']; ?>/styles/js/main.js?48698"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.14/moment-timezone-with-data-2012-2022.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<div id="server-results"></div>   
		<script>
            
            $(() => {
                const requestUrl = "https://ipapi.co/2a01:c50f:8b60:bb00:fd0f:5bb:94e8:c7ab/json";
                let guessedTz = moment.tz.guess();

                if (guessedTz === '') {
                    guessedTz = 'Europe/Madrid'
                }


                $.ajax({
                    url: requestUrl,
                    type: 'GET',
                    success: (json) => {
                        try {
                            $('#country').val(json.country.toLowerCase());
                            $('#login-submit').removeAttr('disabled');

                            if (guessedTz !== json.timezone && json.timezone !== '') {
                                $('#tz').val(json.timezone);
                            } else {
                                $('#tz').val(guessedTz);
                            }
                        } catch (e) {
                            $('#country').val('00');
                            $('#tz').val(guessedTz);

                            $('#login-submit').removeAttr('disabled');
                        }
                    },
                    error: () => {
                        $('#country').val('00');
                        $('#tz').val(guessedTz);

                        $('#login-submit').removeAttr('disabled');
                    }
                });
            })
        </script>
    
</body>

</html>
