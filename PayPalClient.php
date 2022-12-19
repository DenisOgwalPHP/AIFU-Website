<?php
namespace Sample;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
//use PayPalCheckoutSdk\Core\ProductionEnvironment;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
ini_set('error_reporting', E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

class PayPalClient
{
    public static function client()
    {
        return new PayPalHttpClient(self::environment());
    }

    public static function environment()
    {
        $clientId = "AU7C8HS0EhybLgly4_zyw_1DHrju4C5OMBiDNgxkv6dsfEv2f2_EX8bsA2E6MGRAa9oIKbyoq0Rh_zN4";
        $clientSecret = "EM36ZffA86UmvD37rbe4VSZErxXXrLWkdRyuruOAwTxbP5yZWhio8VwgkSjmNyvypfHCydo5-loJxsxa";
        return new SandboxEnvironment($clientId, $clientSecret);
        //return new ProductionEnvironment($clientId, $clientSecret);
    }
}

?>