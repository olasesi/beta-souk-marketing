<?php
/**
 * 
 * * MySQL settings
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the */
define( 'DB_NAME', 'beta_souk_marketing');//betasouk_beta_souk_marketing

/** MySQL database username */
define( 'DB_USER', 'root' );//betasouk_beta_souk_marketing

/** MySQL database password */
define( 'DB_PASSWORD', '' );//eQD}TXM#kVEj

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );


define ('GEN_WEBSITE', 'http://localhost/beta-souk-marketing/referral-marketing');	//

define ('DOMAIN_NAME', 'betasouk.com');	//

date_default_timezone_set('UTC');
session_start();

//Packgage
define ('BASIC', 60000);
define ('PACKAGE1', 'Basic');


define ('ESSENTIAL', 150000);
define ('PACKAGE2', 'Essential');


define ('PREMIUM', 300000);
define ('PACKAGE3', 'Premium');
//$packages = array('basic'=>'60000', 'essential'=>'150000', 'premium'=>'300000');

$now = new DateTime();					

define('API_KEY', 'Bearer sk_live_79523fa9ec638728fd7980ab2957226ecc2eac15');





/*API keys*/








function genReference($qtd){
    //Under the string $Caracteres you write all the characters you want to be used to randomly generate the code.
        $Caracteres = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789';
        $QuantidadeCaracteres = strlen($Caracteres);
        $QuantidadeCaracteres--;
    
        $reference=NULL;
    
        for($x=1;$x<=$qtd;$x++){
            $Posicao = rand(0,$QuantidadeCaracteres);
            $reference .= substr($Caracteres,$Posicao,1);
        }
    
        return $reference;
    }











//Techcrunch or Medium.


/*This directory is that of a folder behind the root directory */
//if ( ! defined( 'ABSPATH' ) ) {
//	define( 'ABSPATH', __DIR__ );
//}

//define( 'ROOT', 'arahman');

//require_once ("../arahman/autoloader/autoloader.php");



/*Loading contents of the user folder*/


