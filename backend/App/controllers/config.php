<?php
//ProPayPal es vital para declarar si es demo o prueba las transacciones

//define('ProPayPal', 0); // El cero simboliza entorno de Prueba
//define('ProPayPal', 1); // El 1 simboliza entorno de producción

define('ProPayPal', 1);
if(ProPayPal){
define("PayPalClientId", "AVLl-na814z9tsD9pvL4O3ayLMT9LLeOOvsNFkQ3zQK3-wDj2mK-uJnwyzitdSzQLD1_Rssx5-ovOuno");
define("PayPalSecret", "EGmds17kePW9L3yYrEVTfMKtOOTE7TGQqaC_I4-ehr-gx2CAsThLSQYL2euwCfO8jfF92tvX2k1N9T_h");
define("PayPalBaseUrl", "https://happy-sanderson.3-137-40-198.plesk.page/");
define("PayPalENV", "production");
} else {
define("PayPalClientId", "AVACP5vOuQheKwTdBy_tlt2CY3g9CT4NAK3D8j3gEpMIpiO79WuRXaGi--I1ycXOhlaTfzXauydINNoS");
define("PayPalSecret", "EMA6lVCQBJ20WMKOj93Z-M3t9cB5_sq0lV3AZgB0eu8pX2PKuFAsHus87bz3N6EdVyVmfyX1B3QqsEHG");
define("PayPalBaseUrl", "https://happy-sanderson.3-137-40-198.plesk.page/");
define("PayPalENV", "sandbox");
}
?>
