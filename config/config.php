<?php

/**
 * Parametros para configuración
 * Autor: Marco Robles
 * Web: https://github.com/mroblesdev
 */

//Configuración del sistema
define("SITE_URL", "http://localhost/tienda_online");
define("KEY_TOKEN", "TU_TOKEN");
define("MONEDA", "$");

//Configuración para Paypal
define("CLIENT_ID", "AWwrFG7ZwmpQu7RXue1XEMwRuYHIAyY4Z_kg-iIvq3qjYy35KwAsGar3-9JGeFPWlMkUvfY8deDGnfif");
define("CURRENCY", "MXN");

//Configuración para Mercado Pago
define("TOKEN_MP", "TEST-6995460268814343-082416-737459f7df008806164feda14b084b18-1029256673");
define("PUBLIC_KEY_MP", "TEST-f1778253-bd43-4491-a563-db71127e57e5");
define("LOCALE_MP", "es-MX");


//Datos para envio de correo electronico
define("MAIL_HOST", "smtp.gmail.com");
define("MAIL_USER", "ismaelek14@gmail.com");
define("MAIL_PASS", "pptyitmzvwqwzcve");
define("MAIL_PORT", "465");

session_start();

$num_cart = 0;
if (isset($_SESSION['carrito']['productos'])) {
    $num_cart = count($_SESSION['carrito']['productos']);
}
