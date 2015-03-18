<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
<title>Lin Photo, free website template, XHTML CSS layout</title>
<meta name="keywords" content="Lin Photo, free website template, XHTML CSS layout" />
<meta name="description" content="Lin Photo, free website template, free XHTML CSS layout provided by templatemo.com" />
<link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function clearText(field){

    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;

}
</script>
</head>
<body <?php body_class(); ?>>

<div id="templatemo_container">
	<div id="templatemo_banner">
        <div id="logged_as" style="float:right;">  
            <?php global $current_user;
                         $user = wp_get_current_user();

                if ( is_user_logged_in() ) {
                echo '<br />Logged as: <b> '. $user->user_login . '</b>';
                }else{
                    echo 'Nie jesteś zalogowany <a href="wp-admin">zaloguj się</a> ';
                }  

                echo $user_identity; 
            ?>
        </div>
    	<div id="logo"></div>
        <!--  Free CSS Templates @ www.TemplateMo.com  -->
        <?php get_search_form(); ?>

    </div> <!-- end of banner -->
    
    <div id="templatemo_menu">
        <!-- Dynamic Menu -->
        <?php get_template_part( 'navi', 'above'); ?>   
        <!-- end of menu -->
	</div> 