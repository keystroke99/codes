
Based upon an answer of a similar question here: https://stackoverflow.com/a/22695523/1412268

Take a look at Guzzle
```
$client = new GuzzleHttp\Client();
$res = $client->get('https://api.github.com/user', ['auth' =>  ['user', 'pass']]);
echo $res->getStatusCode(); // 200
echo $res->getBody();
```

Source :: https://stackoverflow.com/questions/22355828/doing-http-requests-from-laravel-to-an-external-api
