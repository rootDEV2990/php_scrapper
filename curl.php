
<?php 

// create cURL function
function curl($url) {
    $raw_scrape = curl_init($url); // Starts cURL session
    curl_setopt($raw_scrape, CURLOPT_RETURNTRANSFER, TRUE); // Config for cURL returns raw as string
    curl_setopt($raw_scrape, CURLOPT_SSL_VERIFYPEER, false); // Config protocol HTTPS
    $info = curl_exec($raw_scrape); // Establish a cURL session and store object to $info
    curl_close($raw_scrape); // Close cURL
    return $info; // method return
}

$web_data = curl("https://weather.com/es-US/tiempo/hoy/l/Sayulita+M%C3%A9xico+MXNT1276:1:MX");

// parse data
$dom = new DOMDocument;
$dom->loadHTML($web_data);
foreach($dom->getElementsByTagName('a') as $link){
    echo $link->getAttribute('href');
    echo '<br/>';
}
?>

