<?php

/* Following */
$takip_edilen = "
dyfunn
tayfungulerorg
instagram
zuck
elonrmuskk
";

/* Followers  */
$takipci = "
dyfunn
elonrmuskk
";

/* String to Array */
$takip_edilen = preg_replace('/\s+/',',',str_replace(array("\r\n","\r","\n"),' ',trim($takip_edilen)));
$takip_edilen_ar = explode(",", $takip_edilen);

$takipci = preg_replace('/\s+/',',',str_replace(array("\r\n","\r","\n"),' ',trim($takipci)));
$takipci_ar = explode(",", $takipci);


/* Compare Two Array */
$takiplesmeyenler = array_diff($takip_edilen_ar, $takipci_ar);

print_r($takiplesmeyenler);
