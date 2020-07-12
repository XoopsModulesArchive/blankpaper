<?php
// $Id: xoops_version.php,v 1.2 2007/06/08 20:35:40 ohwada Exp $

// 2007-05-20 K.OHWADA
// module dupulication

//================================================================
// Blank Paper module
// xoops_version.php
// 2005-01-10 K.OHWADA
//================================================================

$BLANKPAPER_DIRNAME   = basename( dirname( __FILE__ ) );
$BLANKPAPER_ROOT_PATH = XOOPS_ROOT_PATH.'/modules/'.$BLANKPAPER_DIRNAME;
$BLANKPAPER_URL       = XOOPS_URL.'/modules/'.$BLANKPAPER_DIRNAME;

if( ! preg_match( '/^(\D+)(\d*)$/' , $BLANKPAPER_DIRNAME , $regs ) )
{	echo ( 'invalid dirname: ' . htmlspecialchars( $BLANKPAPER_DIRNAME ) );	}
$BLANKPAPER_NUMBER = $regs[2] === '' ? '' : intval( $regs[2] ) ;

if ( $regs[1] == 'blankpaper' )
{
	$name_ext = ' '.$BLANKPAPER_NUMBER;
}
else
{
	$name_ext = ':'.$BLANKPAPER_DIRNAME;
}

$modversion['name'] = _MI_BLANKPAPER_NAME.$name_ext;
$modversion['version'] = 0.21;
$modversion['description'] = _MI_BLANKPAPER_DESC;
$modversion['credits'] = '';
$modversion['author']   = 'K.OHWADA';
$modversion['help'] = '';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 1;
$modversion['image']    = 'images/'.$BLANKPAPER_DIRNAME.'_slogo.png';
$modversion['dirname']  = $BLANKPAPER_DIRNAME;

//Admin things
$modversion['hasAdmin'] = 0;
$modversion['adminmenu'] = '';

// Menu
$modversion['hasMain'] = 1;

?>