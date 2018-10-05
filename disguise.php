<?PHP
if(isset($_GET['invoice']) && isset($_GET['period'])) {
    // Usage:
    // localhost/?invoice=0.1000&period=1
    // Use this disguise for our API to create your own thirdparty API to use for creating contracts for users.

    // Explained here:
    // https://github.com/unixbadass/JS500SK-DEVELOPER-API/blob/master/README.md
    $a = $_GET['invoice'];
    $b = $_GET['period'];

    // Set your optional fee
    // /our BTC address is linked to your developer key.
    $c = "3%";

    // Developer Key
    // Identification issued by JSSK Mining Club.
    $d = "53442364325";

   if(empty($a) && empty($b)) {
     die();
   }

    $url = "http://your-ip.com/sdk/create_contracts/?developer_key={$d}&invoice={$a}&period={$b}&earner_fees={$c}";
    $options = array(
        'http'=>array(
            'method' => "GET"
        )
    );

    $context = stream_context_create($options);
    file_get_contents($url, false, $context);

} else {
  die();
}
