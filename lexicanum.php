<?php
/**
* My Skin skin
*
* @file
* @ingroup Skins
* @author Inquisitor S. Kamenev
* @license MIT
*/

if( !defined( 'MEDIAWIKI' ) ) die( "This is an extension to the MediaWiki package and cannot be run standalone." );

$wgExtensionCredits['skin'][] = array(
    'path' => __FILE__,
    'name' => 'Lexicanum',
    'url' => "https://github.com/KrasnayaSecurity",
    'author' => 'Inquisitor S. Kamenev',
    'descriptionmsg' => 'lexicanum-desc',
);

$wgValidSkinNames['lexicanum'] = 'Lexicanum';
$wgAutoloadClasses['SkinLexicanum'] = dirname(__FILE__).'/Lexicanum.skin.php';
$wgExtensionMessagesFiles['Lexicanum'] = dirname(__FILE__).'/Lexicanum.i18n.php';

$wgResourceModules['skins.lexicanum'] = array(
    'styles' => array(
        'lexicanum/screen.css' => array( 'media' => 'screen' ),
    ),
    'remoteBasePath' => &$GLOBALS['wgStylePath'],
    'localBasePath' => &$GLOBALS['wgStyleDirectory'],
//    'dependencies' => 'skin.vector'
);
