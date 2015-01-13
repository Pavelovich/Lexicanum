<?php
/**
* Skin file for skin Lexicanum.
*
* @file
* @ingroup Skins
*/

require_once( dirname( __FILE__ ) . '/../Vector.php' );

/**
* SkinTemplate class for Lexicanum skin
* @ingroup Skins
*/
class SkinLexicanum extends SkinVector {

    var $skinname = 'lexicanum', $stylename = 'lexicanum';

    /**
    * @param $out OutputPage object
    */
    function setupSkinUserCss( OutputPage $out ){
        parent::setupSkinUserCss( $out );
        $out->addModuleStyles( "skins.lexicanum" );
    }

}
