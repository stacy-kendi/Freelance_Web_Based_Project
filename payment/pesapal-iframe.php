<?php
include_once('OAuth.php');

error_reporting(0);

//pesapal params
$token = $params = NULL;


$consumer_key = 'lof8IEWH2MQM3NBQ2+w+Kv7ZxhCcX+V/';//pesapal merchant consumer key
$consumer_secret = 'hM+bKxqstEOEHqBAfVfjH6wDsYg=';//Secret Consumer Key
$signature_method = new OAuthSignatureMethod_HMAC_SHA1();
$iframelink = 'https://demo.pesapal.com/api/PostPesapalDirectOrderV4';

//get form details
$budget = $_POST['project_budget'];
$budget = number_format($budget, 2);

$desc = $_POST['project_description'];
$type = $_POST['type']; 
$reference = $_POST['reference'];//projectid
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['user_email'];


$callback_url = '../projectViewingSME.php'; //url redirection handling the pesapal response.

$post_xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?><PesapalDirectOrderInfo xmlns:xsi=\"https://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"https://www.w3.org/2001/XMLSchema\" Budget=\"".$budget."\" Description=\"".$desc."\" Type=\"".$type."\" Reference=\"".$reference."\" FirstName=\"".$first_name."\" LastName=\"".$last_name."\" Email=\"".$email."\" xmlns=\"https://www.pesapal.com\" />";
$post_xml = htmlentities($post_xml);

$consumer = new OAuthConsumer($consumer_key, $consumer_secret);

//post transaction to pesapal
$iframe_src = OAuthRequest::from_consumer_and_token($consumer, $token, "GET", $iframelink, $params);
$iframe_src->set_parameter("oauth_callback", $callback_url);
$iframe_src->set_parameter("pesapal_request_data", $post_xml);
$iframe_src->sign_request($signature_method, $consumer, $token);

//display pesapal - iframe and pass iframe_src
?>
<iframe src="<?php echo $iframe_src;?>" width="100%" height="700px"  scrolling="no" frameBorder="0">
	<p>Browser unable to load iFrame</p>
</iframe>