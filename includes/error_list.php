<?php

/**
 * Plugin Name: Zing Open Woo
 * Plugin URI: https://www.getfoundni.co.uk
 * Author: GFNI 
 * Description: WooCommerce Plugin for accepting payments through Zing OPEN Platform.
 * Version:     1
 *
 * @package Zing Open Woo
 */

$errorMessages = array(
	'800.150.100' => 'The account holder entered does not match your name. Please use an account that is registered on your name',
	'800.100.198' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'800.100.198' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'800.100.402' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'100.100.101' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'800.100.151' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'000.400.108' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'100.100.100' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'100.100.200' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'100.100.201' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'100.100.300' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'100.100.301' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'100.100.304' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'100.100.400' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'100.100.401' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'100.100.402' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'100.100.651' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'100.100.700' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'100.100.701' => 'Unfortunately, the credit card you entered can not be accepted. Please contact your bank',
	'100.200.100' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'100.200.103' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'100.200.104' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'100.400.000' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'100.400.001' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'100.400.086' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'100.400.087' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'100.400.316' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'100.400.317' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'100.100.600' => 'Unfortunately, the card/account data you entered was not correct. Please try again',
	'800.300.401' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'800.100.171' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'800.100.165' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'800.100.159' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'800.100.195' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'000.400.101' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'100.100.501' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'100.400.005' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'100.400.020' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'100.400.021' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'100.400.030' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'100.400.039' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'100.400.081' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'100.400.100' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'100.400.123' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'100.400.319' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'800.100.154' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'800.100.156' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'800.100.158' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment methodD',
	'800.100.160' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'800.100.161' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'800.100.163' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'800.100.164' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'800.100.166' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'800.100.167' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'800.100.169' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'800.100.170' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'800.100.173' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'800.100.174' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'800.100.175' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'800.100.176' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'800.100.177' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'800.100.190' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'800.100.191' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'800.100.196' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'800.100.197' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'800.100.168' => 'Unfortunately, the credit card you entered can not be accepted. Please choose a different card or payment method',
	'100.100.303' => 'Unfortunately, the credit card you entered is expired. Please choose a different card or payment method',
	'800.100.153' => 'Unfortunately, the CVV/CVC you entered is not correct. Please try again',
	'100.100.601' => 'Unfortunately, the CVV/CVC you entered is not correct. Please try again',
	'800.100.192' => 'Unfortunately, the CVV/CVC you entered is not correct. Please try again',
	'800.100.157' => 'Unfortunately, the expiration date you entered is not correct. Please try again',
	'100.500.301' => 'Unfortunately, the expiration date you entered is not correct. Please try again',
	'800.100.162' => 'Unfortunately, the limit of your credit card is exceeded. Please choose a different card or payment method',
	'100.400.040' => 'Unfortunately, your 3D security authentication failed. Please contact your bank before trying again',
	'100.400.060' => 'Unfortunately, your 3D security authentication failed. Please contact your bank before trying again',
	'100.400.080' => 'Unfortunately, your 3D security authentication failed. Please contact your bank before trying again',
	'100.400.120' => 'Unfortunately, your 3D security authentication failed. Please contact your bank before trying again',
	'100.400.260' => 'Unfortunately, your 3D security authentication failed. Please contact your bank before trying again',
	'800.900.300' => 'Unfortunately, your 3D security authentication failed. Please contact your bank before trying again',
	'800.900.301' => 'Unfortunately, your 3D security authentication failed. Please contact your bank before trying again',
	'800.900.302' => 'Unfortunately, your 3D security authentication failed. Please contact your bank before trying again',
	'100.380.401' => 'Unfortunately, your 3D security authentication failed. Please contact your bank before trying again',
	'100.390.105' => 'Unfortunately, there has been an error while processing your request. Please try later later or try with another card or use card that its not 3D Secure',
	'000.400.103' => 'Unfortunately, there has been an error while processing your request. Please try later later or try with another card or use card that its not 3D Secure',
	'000.400.104' => 'Unfortunately, there has been an error while processing your request. Please try later later or try with another card or use card that its not 3D Secure',
	'100.390.103' => 'Unfortunately, there has been an error while processing your request. Please try later later or try with another card or use card that its not 3D Secure',
	'100.390.106' => 'Unfortunately, there has been an error while processing your request. Please try later later or try with another card or use card that its not 3D Secure',
	'100.390.107' => 'Unfortunately, there has been an error while processing your request. Please try later later or try with another card or use card that its not 3D Secure',
	'100.390.108' => 'Unfortunately, there has been an error while processing your request. Please try later later or try with another card or use card that its not 3D Secure',
	'100.390.109' => 'Unfortunately, there has been an error while processing your request. Please try later later or try with another card or use card that its not 3D Secure',
	'100.390.111' => 'Unfortunately, there has been an error while processing your request. Please try later later or try with another card or use card that its not 3D Secure',
	'800.400.200' => 'Unfortunately, there has been an error while processing your request. Please try later later or try with another card or use card that its not 3D Secure',
	'100.390.112' => 'Unfortunately, there has been an error while processing your request. Please try later later or try with another card or use card that its not 3D Secure',
	'100.100.500' => 'Unfortunately, there has been an error while processing your request. Please try again',
	'800.100.155' => 'Unfortunately, your credit limit is exceeded. Please choose a different card or payment method',
	'100.400.002' => 'Unfortunately, your credit limit is exceeded. Please choose a different card or payment method',
	'000.100.203' => 'Unfortunately, your credit limit is exceeded. Please choose a different card or payment method',
	'100.550.310' => 'Unfortunately, your credit limit is exceeded. Please choose a different card or payment method',
	'100.550.311' => 'Unfortunately, your credit limit is exceeded. Please choose a different card or payment method',
	'800.120.101' => 'Limit of transaction is exceeded. Please try again in one hour or contact us',
	'800.120.100' => 'Limit of transaction is exceeded. Please try again in one hour or contact us',
	'800.120.102' => 'Limit of transaction is exceeded. Please try again in one hour or contact us',
	'800.120.103' => 'Limit of transaction is exceeded. Please try again in one hour or contact us',
	'800.120.200' => 'Limit of transaction is exceeded. Please try again in one hour or contact us',
	'800.120.201' => 'Limit of transaction is exceeded. Please try again in one hour or contact us',
	'800.120.202' => 'Limit of transaction is exceeded. Please try again in one hour or contact us',
	'800.120.203' => 'Limit of transaction is exceeded. Please try again in one hour or contact us',
	'800.100.152' => 'Unfortunately, your transaction has failed. Please choose a different card or payment method',
	'000.400.106' => 'Unfortunately, your transaction has failed. Please choose a different card or payment method',
	'000.400.105' => 'Unfortunately, your transaction has failed. Please choose a different card or payment method',
	'100.380.501' => 'Unfortunately, your transaction has failed. Please choose a different card or contact us',
	'800.400.151' => 'We are sorry. We could no accept your card as its origin does not match your address',
	'800.400.150' => 'We are sorry. We could no accept your card as its origin does not match your address',
	'100.400.300' => 'You cancelled the payment prior to its execution. Please try again later',
	'100.396.101' => 'You cancelled the payment prior to its execution. Please try again later',
	'900.300.600' => 'Session timeout. Please try again later',
	'800.100.501' => 'Recurring transactions have been deactivated for this credit card. Please register another card',
	'800.100.500' => 'Recurring transactions have been deactivated for this credit card. Please register another card',
	'800.100.178' => 'Unfortunately, your transaction has been declined due to invalid data. Please choose a different card',
	'800.700.101' => 'Unfortunately, your transaction has failed. Please check the personal data you entered',
	'800.700.201' => 'Unfortunately, your transaction has failed. Please check the personal data you entered',
	'800.700.500' => 'Unfortunately, your transaction has failed. Please check the personal data you entered',
	'800.800.102' => 'Unfortunately, your transaction has failed. Please check the personal data you entered',
	'800.800.202' => 'Unfortunately, your transaction has failed. Please check the personal data you entered',
	'800.800.302' => 'Unfortunately, your transaction has failed. Please check the personal data you entered',
	'800.900.101' => 'Unfortunately, your transaction has failed. Please check the personal data you entered',
	'800.100.198' => 'Unfortunately, your transaction has failed. Please check the personal data you entered',
	'000.400.201' => 'Unfortunately, your transaction has failed. Please check the personal data you entered',
	'000.100.200' => 'Unfortunately, your transaction has failed. Please try again',
	'000.100.202' => 'Unfortunately, your transaction has failed. Please try again',
	'000.100.206' => 'Unfortunately, your transaction has failed. Please try again',
	'000.100.207' => 'Unfortunately, your transaction has failed. Please try again',
	'000.100.208' => 'Unfortunately, your transaction has failed. Please try again',
	'000.100.209' => 'Unfortunately, your transaction has failed. Please try again',
	'000.100.210' => 'Unfortunately, your transaction has failed. Please try again',
	'000.100.220' => 'Unfortunately, your transaction has failed. Please try again',
	'000.100.221' => 'Unfortunately, your transaction has failed. Please try again',
	'000.100.222' => 'Unfortunately, your transaction has failed. Please try again',
	'000.100.223' => 'Unfortunately, your transaction has failed. Please try again',
	'000.100.224' => 'Unfortunately, your transaction has failed. Please try again',
	'000.100.225' => 'Unfortunately, your transaction has failed. Please try again',
	'000.100.226' => 'Unfortunately, your transaction has failed. Please try again',
	'000.100.227' => 'Unfortunately, your transaction has failed. Please try again',
	'000.100.228' => 'Unfortunately, your transaction has failed. Please try again',
	'000.100.229' => 'Unfortunately, your transaction has failed. Please try again',
	'000.100.230' => 'Unfortunately, your transaction has failed. Please try again',
	'000.100.299' => 'Unfortunately, your transaction has failed. Please try again',
	'000.400.102' => 'Unfortunately, your transaction has failed. Please try again',
	'000.400.200' => 'Unfortunately, your transaction has failed. Please try again',
	'100.211.105' => 'Unfortunately, your transaction has failed. Please try again',
	'100.211.106' => 'Unfortunately, your transaction has failed. Please try again',
	'100.212.101' => 'Unfortunately, your transaction has failed. Please try again',
	'100.212.102' => 'Unfortunately, your transaction has failed. Please try again',
	'100.212.102' => 'Unfortunately, your transaction has failed. Please try again',
	'100.250.100' => 'Unfortunately, your transaction has failed. Please try again',
	'100.370.100' => 'Unfortunately, your transaction has failed. Please try again',
	'100.380.100' => 'Unfortunately, your transaction has failed. Please try again',
	'100.390.110' => 'Unfortunately, your transaction has failed. Please try again',
	'100.390.113' => 'Unfortunately, your transaction has failed. Please try again',
	'100.395.501' => 'Unfortunately, your transaction has failed. Please try again',
	'100.396.102' => 'Unfortunately, your transaction has failed. Please try again',
	'100.396.103' => 'Unfortunately, your transaction has failed. Please try again',
	'100.396.104' => 'Unfortunately, your transaction has failed. Please try again',
	'100.396.106' => 'Unfortunately, your transaction has failed. Please try again',
	'100.396.201' => 'Unfortunately, your transaction has failed. Please try again',
	'100.397.101' => 'Unfortunately, your transaction has failed. Please try again',
	'100.397.102' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.007' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.041' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.042' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.043' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.044' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.045' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.051' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.061' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.063' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.064' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.065' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.071' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.083' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.084' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.085' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.091' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.122' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.130' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.139' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.140' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.243' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.301' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.303' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.304' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.305' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.306' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.307' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.308' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.309' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.310' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.311' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.312' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.313' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.314' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.315' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.318' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.320' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.324' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.325' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.326' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.327' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.328' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.500' => 'Unfortunately, your transaction has failed. Please try again',
	'100.500.101' => 'Unfortunately, your transaction has failed. Please try again',
	'100.500.201' => 'Unfortunately, your transaction has failed. Please try again',
	'100.500.302' => 'Unfortunately, your transaction has failed. Please try again',
	'100.550.300' => 'Unfortunately, your transaction has failed. Please try again',
	'100.550.301' => 'Unfortunately, your transaction has failed. Please try again',
	'100.550.303' => 'Unfortunately, your transaction has failed. Please try again',
	'100.550.312' => 'Unfortunately, your transaction has failed. Please try again',
	'100.550.401' => 'Unfortunately, your transaction has failed. Please try again',
	'100.550.601' => 'Unfortunately, your transaction has failed. Please try again',
	'100.550.603' => 'Unfortunately, your transaction has failed. Please try again',
	'100.550.605' => 'Unfortunately, your transaction has failed. Please try again',
	'100.600.500' => 'Unfortunately, your transaction has failed. Please try again',
	'100.700.100' => 'Unfortunately, your transaction has failed. Please try again',
	'100.700.101' => 'Unfortunately, your transaction has failed. Please try again',
	'100.700.200' => 'Unfortunately, your transaction has failed. Please try again',
	'100.700.201' => 'Unfortunately, your transaction has failed. Please try again',
	'100.700.300' => 'Unfortunately, your transaction has failed. Please try again',
	'100.700.400' => 'Unfortunately, your transaction has failed. Please try again',
	'100.700.500' => 'Unfortunately, your transaction has failed. Please try again',
	'100.700.800' => 'Unfortunately, your transaction has failed. Please try again',
	'100.700.801' => 'Unfortunately, your transaction has failed. Please try again',
	'100.700.802' => 'Unfortunately, your transaction has failed. Please try again',
	'100.700.810' => 'Unfortunately, your transaction has failed. Please try again',
	'100.800.100' => 'Unfortunately, your transaction has failed. Please try again',
	'100.800.101' => 'Unfortunately, your transaction has failed. Please try again',
	'100.800.102' => 'Unfortunately, your transaction has failed. Please try again',
	'100.800.200' => 'Unfortunately, your transaction has failed. Please try again',
	'100.800.201' => 'Unfortunately, your transaction has failed. Please try again',
	'100.800.202' => 'Unfortunately, your transaction has failed. Please try again',
	'100.800.300' => 'Unfortunately, your transaction has failed. Please try again',
	'100.800.301' => 'Unfortunately, your transaction has failed. Please try again',
	'100.800.302' => 'Unfortunately, your transaction has failed. Please try again',
	'100.800.400' => 'Unfortunately, your transaction has failed. Please try again',
	'100.800.401' => 'Unfortunately, your transaction has failed. Please try again',
	'100.800.500' => 'Unfortunately, your transaction has failed. Please try again',
	'100.800.501' => 'Unfortunately, your transaction has failed. Please try again',
	'100.900.100' => 'Unfortunately, your transaction has failed. Please try again',
	'100.900.101' => 'Unfortunately, your transaction has failed. Please try again',
	'100.900.105' => 'Unfortunately, your transaction has failed. Please try again',
	'100.900.200' => 'Unfortunately, your transaction has failed. Please try again',
	'100.900.300' => 'Unfortunately, your transaction has failed. Please try again',
	'100.900.301' => 'Unfortunately, your transaction has failed. Please try again',
	'100.900.400' => 'Unfortunately, your transaction has failed. Please try again',
	'100.900.401' => 'Unfortunately, your transaction has failed. Please try again',
	'100.900.450' => 'Unfortunately, your transaction has failed. Please try again',
	'100.900.500' => 'Unfortunately, your transaction has failed. Please try again',
	'200.100.150' => 'Unfortunately, your transaction has failed. Please try again',
	'200.100.151' => 'Unfortunately, your transaction has failed. Please try again',
	'200.100.199' => 'Unfortunately, your transaction has failed. Please try again',
	'200.100.201' => 'Unfortunately, your transaction has failed. Please try again',
	'200.100.300' => 'Unfortunately, your transaction has failed. Please try again',
	'200.100.301' => 'Unfortunately, your transaction has failed. Please try again',
	'200.100.302' => 'Unfortunately, your transaction has failed. Please try again',
	'200.100.401' => 'Unfortunately, your transaction has failed. Please try again',
	'200.100.402' => 'Unfortunately, your transaction has failed. Please try again',
	'200.100.403' => 'Unfortunately, your transaction has failed. Please try again',
	'200.100.404' => 'Unfortunately, your transaction has failed. Please try again',
	'200.100.501' => 'Unfortunately, your transaction has failed. Please try again',
	'200.100.502' => 'Unfortunately, your transaction has failed. Please try again',
	'200.100.503' => 'Unfortunately, your transaction has failed. Please try again',
	'200.100.504' => 'Unfortunately, your transaction has failed. Please try again',
	'200.200.106' => 'Unfortunately, your transaction has failed. Please try again',
	'700.100.300' => 'Unfortunately, your transaction has failed. Please try again',
	'700.400.562' => 'Unfortunately, your transaction has failed. Please try again',
	'700.400.570' => 'Unfortunately, your transaction has failed. Please try again',
	'600.100.100' => 'Unfortunately, your transaction has failed. Please try again',
	'700.400.402' => 'Unfortunately, your transaction has failed. Please try again',
	'700.450.001' => 'Unfortunately, your transaction has failed. Please try again',
	'800.100.100' => 'Unfortunately, your transaction has failed. Please try again',
	'800.100.150' => 'Unfortunately, your transaction has failed. Please try again',
	'800.100.179' => 'Unfortunately, your transaction has failed. Please try again',
	'800.110.100' => 'Unfortunately, your transaction has failed. Please try again',
	'800.120.300' => 'Unfortunately, your transaction has failed. Please try again',
	'800.120.401' => 'Unfortunately, your transaction has failed. Please try again',
	'800.130.100' => 'Unfortunately, your transaction has failed. Please try again',
	'800.140.100' => 'Unfortunately, your transaction has failed. Please try again',
	'800.140.101' => 'Unfortunately, your transaction has failed. Please try again',
	'800.140.110' => 'Unfortunately, your transaction has failed. Please try again',
	'800.140.111' => 'Unfortunately, your transaction has failed. Please try again',
	'800.140.112' => 'Unfortunately, your transaction has failed. Please try again',
	'800.140.113' => 'Unfortunately, your transaction has failed. Please try again',
	'800.160.130' => 'Unfortunately, your transaction has failed. Please try again',
	'800.400.100' => 'Unfortunately, your transaction has failed. Please try again',
	'800.400.101' => 'Unfortunately, your transaction has failed. Please try again',
	'800.400.102' => 'Unfortunately, your transaction has failed. Please try again',
	'800.400.103' => 'Unfortunately, your transaction has failed. Please try again',
	'800.400.104' => 'Unfortunately, your transaction has failed. Please try again',
	'800.400.105' => 'Unfortunately, your transaction has failed. Please try again',
	'800.400.110' => 'Unfortunately, your transaction has failed. Please try again',
	'800.400.500' => 'Unfortunately, your transaction has failed. Please try again',
	'800.500.100' => 'Unfortunately, your transaction has failed. Please try again',
	'800.600.100' => 'Unfortunately, your transaction has failed. Please try again',
	'800.700.100' => 'Unfortunately, your transaction has failed. Please try again',
	'800.800.800' => 'Unfortunately, your transaction has failed. Please try again',
	'800.900.100' => 'Unfortunately, your transaction has failed. Please try again',
	'800.900.303' => 'Unfortunately, your transaction has failed. Please try again',
	'800.900.401' => 'Unfortunately, your transaction has failed. Please try again',
	'900.100.100' => 'Transaction has failed due to communication reasons. Please try again after some time',
	'900.100.200' => 'Transaction has failed due to communication reasons. Please try again after some time',
	'900.100.201' => 'Transaction has failed due to communication reasons. Please try again after some time',
	'900.100.202' => 'Unfortunately, your transaction has failed. Please check your tansaction',
	'900.100.203' => 'Transaction has failed due to communication reasons. Please try again after some time',
	'900.100.300' => 'Transaction has failed due to communication reasons. Please try again after some time',
	'900.100.400' => 'Transaction has failed due to communication reasons. Please try again after some time',
	'900.100.500' => 'Transaction has failed due to communication reasons. Please try again after some time',
	'900.100.600' => 'Transaction has failed due to communication reasons. Please try again after some time',
	'900.200.100' => 'Transaction has failed due to communication reasons. Please try again after some time',
	'900.400.100' => 'Transaction has failed due to communication reasons. Please try again after some time',
	'999.999.999' => 'Unfortunately, your transaction has failed. Please try again',
	'100.400.121' => 'Transaction declined. Contact us for more details',
	'100.550.400' => 'Transaction declined. Contact us for more details',
	'100.400.321' => 'Transaction declined. Contact us for more details',
	'100.400.322' => 'Transaction declined. Contact us for more details',
	'100.400.323' => 'Transaction declined. Contact us for more details',
	'100.100.701' => 'Transaction declined. Contact us for more details',
	'200.100.101' => 'Transaction declined. Contact us for more details',
	'200.100.102' => 'Transaction declined. Contact us for more details',
	'200.100.103' => 'Transaction declined. Contact us for more details',
	'200.300.403' => 'Transaction declined. Contact us for more details',
	'200.300.404' => 'Transaction declined. Contact us for more details',
	'200.300.405' => 'Transaction declined. Contact us for more details',
	'200.300.406' => 'Transaction declined. Contact us for more details',
	'200.300.407' => 'Transaction declined. Contact us for more details',
	'500.100.201' => 'Transaction declined. Contact us for more details',
	'500.100.202' => 'Transaction declined. Contact us for more details',
	'500.100.203' => 'Transaction declined. Contact us for more details',
	'500.100.301' => 'Transaction declined. Contact us for more details',
	'500.100.302' => 'Transaction declined. Contact us for more details',
	'500.100.303' => 'Transaction declined. Contact us for more details',
	'500.100.304' => 'Transaction declined. Contact us for more details',
	'500.100.401' => 'Transaction declined. Contact us for more details',
	'500.100.402' => 'Transaction declined. Contact us for more details',
	'500.100.403' => 'Transaction declined. Contact us for more details',
	'500.200.101' => 'Transaction declined. Contact us for more details',
	'800.200.160' => 'Transaction declined. Contact us for more details',
	'800.200.165' => 'Transaction declined. Contact us for more details',
	'800.200.202' => 'Transaction declined. Contact us for more details',
	'800.200.208' => 'Transaction declined. Contact us for more details',
	'800.200.220' => 'Transaction declined. Contact us for more details',
	'800.300.101' => 'Transaction declined. Contact us for more details',
	'800.300.102' => 'Transaction declined. Contact us for more details',
	'800.300.200' => 'Transaction declined. Contact us for more details',
	'800.300.301' => 'Transaction declined. Contact us for more details',
	'800.300.302' => 'Transaction declined. Contact us for more details',
	'800.300.401' => 'Transaction declined. Contact us for more details',
	'800.300.500' => 'Transaction declined. Contact us for more details',
	'800.300.501' => 'Transaction declined. Contact us for more details',
	'800.310.200' => 'Transaction declined. Contact us for more details',
	'800.310.210' => 'Transaction declined. Contact us for more details',
	'800.310.211' => 'Transaction declined. Contact us for more details',
	'600.200.100' => 'Transaction declined. Contact us for more details',
	'600.200.200' => 'Transaction declined. Contact us for more details',
	'600.200.201' => 'Transaction declined. Contact us for more details',
	'600.200.202' => 'Transaction declined. Contact us for more details',
	'600.200.300' => 'Transaction declined. Contact us for more details',
	'600.200.310' => 'Transaction declined. Contact us for more details',
	'600.200.400' => 'Transaction declined. Contact us for more details',
	'600.200.500' => 'Transaction declined. Contact us for more details',
	'600.200.600' => 'Transaction declined. Contact us for more details',
	'600.200.700' => 'Transaction declined. Contact us for more details',
	'600.200.800' => 'Transaction declined. Contact us for more details',
	'600.200.810' => 'Transaction declined. Contact us for more details',
	'700.100.100' => 'Transaction declined. Contact us for more details',
	'700.100.200' => 'Transaction declined. Contact us for more details',
	'700.100.400' => 'Transaction declined. Contact us for more details',
	'700.100.500' => 'Transaction declined. Contact us for more details',
	'700.100.600' => 'Transaction declined. Contact us for more details',
	'700.100.700' => 'Transaction declined. Contact us for more details',
	'700.100.701' => 'Transaction declined. Contact us for more details',
	'700.100.710' => 'Transaction declined. Contact us for more details',
	'700.300.500' => 'Transaction declined. Contact us for more details',
	'700.400.000' => 'Transaction declined. Contact us for more details',
	'700.400.400' => 'Transaction declined. Contact us for more details',
	'800.200.159' => 'Transaction declined. Contact us for more details',
	'700.400.410' => 'Transaction declined. Contact us for more details',
	'700.400.420' => 'Transaction declined. Contact us for more details',
	'700.400.700' => 'Transaction declined. Contact us for more details',
	'800.121.100' => 'Transaction declined. Contact us for more details',
	'800.160.100' => 'Transaction declined. Contact us for more details',
	'800.160.110' => 'Transaction declined. Contact us for more details',
	'800.160.120' => 'Transaction declined. Contact us for more details',
	'800.500.110' => 'Transaction declined. Contact us for more details',
	'800.800.801' => 'Transaction declined. Contact us for more details',
	'800.900.201' => 'Transaction declined. Contact us for more details',
	'800.100.172' => 'Transaction declined. Contact us for more details',
	'000.400.107' => 'Unfortunately, your transaction has failed. Please try again later or choose a different card',
	'100.395.502' => 'Unfortunately, your transaction has failed. Please try again later or choose a different card',
	'100.395.101' => 'Giropay is not supported for this transaction. Please choose a different payment method',
	'100.395.102' => 'Giropay is not supported for this transaction. Please choose a different payment method',
	'700.400.100' => 'Transaction can not be captured',
	'700.400.101' => 'Transaction can not be captured',
	'700.400.510' => 'Transaction can not be captured',
	'800.100.500' => 'Card holder has advised his bank to stop this recurring payment',
	'800.100.501' => 'Card holder has advised his bank to stop this recurring payment',
	'700.300.300' => 'Transaction can not be refunded or reversed',
	'700.300.400' => 'Transaction can not be refunded or reversed',
	'700.300.600' => 'Transaction can not be refunded or reversed',
	'700.300.700' => 'Transaction can not be refunded or reversed',
	'700.400.200' => 'Transaction can not be refunded or reversed',
	'700.400.300' => 'Transaction can not be refunded or reversed',
	'700.400.520' => 'Transaction can not be refunded or reversed',
	'700.400.530' => 'Transaction can not be refunded or reversed',
	'700.300.100' => 'Transaction can not be refunded or reversed',
	'700.400.560' => 'Receipt can not be performed',
	'700.400.561' => 'Receipt can not be performed',
	'800.900.200' => 'Unfortunately, your transaction has failed. Please enter a valid telephone number'
);
