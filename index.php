<?php

$json = file_get_contents('https://ipapi.co/json');
$obj = json_decode($json);

echo 'Country Code: '.$obj->country.'<br>';
echo 'Country: '.$obj->country_name.'<br>';
echo 'Currency: '.$obj->currency.'<br>';
echo 'IP: '.$obj->ip.'<br>';
echo 'Address: '.$obj->city.', '.$obj->region.', '.$obj->country_name.' '.$obj->postal.'<br>';
echo 'City: '.$obj->city.'<br>';
echo 'ZIP: '.$obj->postal.'<br>';
echo 'Dial Code: '.$obj->country_calling_code.'<br>';

echo "<hr>";

echo "<img src='https://ipapi.co/static/images/flags/24/".strtolower($obj->country).".png'><br>";
echo 'Region Code: '.$obj->region_code.'<br>';
echo 'Continent Code: '.$obj->continent_code.'<br>';
echo 'Latitude: '.$obj->latitude.'<br>';
echo 'Longitude: '.$obj->longitude.'<br>';
echo 'Timezone: '.$obj->timezone.'<br>';
echo 'UTC Offset: '.$obj->utc_offset.'<br>';
echo 'Languages: '.$obj->languages.'<br>';
echo 'ASN: '.$obj->asn.'<br>';
echo 'Internet Provider: '.$obj->org.'<br>';

echo "<hr>";

$countryArray = array('dialCode' => array('1', '7', '32', '33', '47', '53', '61', '63', '64', '66', '86', '91', '92', '93', '95', '98', '211', '212', '213', '218', '220', '221', '222', '223', '224', '225', '226', '227', '228', '229', '231', '233', '234', '241', '242', '243', '244', '245', '246', '249', '250', '251', '252', '253', '255', '260', '262', '263', '264', '265', '266', '267', '268', '269', '290', '291', '297', '298', '376', '382', '383', '500', '502', '503', '504', '505', '508', '509', '590', '591', '593', '595', '598', '599', '670', '672', '673', '674', '675', '678', '680', '681', '683', '686', '687', '688', '689', '692', '850', '962', '963', '964', '967', '968', '970', '972', '975', '976', '977', '992', '993', '996', '998', '1246', '1268', '1284', '1340', '1441', '1473', '1649', '1664', '1670', '1671', '1784', '1809', '1829', '1849', '1876', '441481', '441534'));

$objcnty = json_encode($countryArray);
echo $objcnty;

echo "<hr>";

$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($objcnty, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);

foreach ($jsonIterator as $key => $val) {
    if(is_array($val)) {
        echo "$key:\n";
    } else {
        echo "$key => $val\n";
    }
}

echo "<hr>";

foreach ($jsonIterator as $key => $val) {
	if($val == '63') {
		echo "True";
	}
}