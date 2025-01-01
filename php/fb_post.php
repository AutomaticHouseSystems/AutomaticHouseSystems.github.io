<?php
// Token-ul tău de acces
$accessToken = 'EAAHXAH2puEoBO3j09YlZCgltzztO87AZAIy983vE60Q489HOoJ5hKndJWpfo9ZCPZC3HaRDBoDfE7WOzFhwZBOf1KVyEflbJFrpYEr5SmD5vGmxd0ZCENDz43sggBURfKCTB1nKRA6MJl2PDgUZBppWRcXaEJMAibw5gPKM1lzPTQZBrrHmLyUlqkw53W7qreP55YiSx38N7vpcXDZBeXXw0SZBgxl1FP4J1ZC15CAHVJKOn9glHZAHVyf2ibW0JI1UZD';
$pageId = '517872084957258';

// Mesajul postării
$message = 'Salut! Aceasta este o postare automată de la aplicația AutomaticHouse 🚀.';

// Endpoint-ul API pentru postare
$url = "https://graph.facebook.com/$pageId/feed";

// Datele postării
$data = [
    'message' => $message,
    'access_token' => $accessToken
];

// Inițializează cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execută cererea
$response = curl_exec($ch);
curl_close($ch);

// Afișează răspunsul
echo $response;
?>
