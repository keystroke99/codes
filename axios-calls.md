# GET Call
```
return new Promise(async (resolve, reject) => {
            await axios
                .get(URL, {
                    params: {},
                    headers: {
                        Authorization: `Bearer ${accessToken}`
                    }
                })
                .then(result => {
                    resolve(result.data);
                })
                .catch(error => {
                    reject({
                        httpStatusCode: 500,
                        error_description: `Error while performing the call`
                    });
                });
        });
```
# POST Call

```
return new Promise(async (resolve, reject) => {
            await axios({
                method: 'post',
                url: URL,
                data: {
                    client_id: xxxx,
                    client_secret: xxxxx,
                    code: code,
                    grant_type: 'authorization_code',
                    redirect_uri: xxxx
                }
            })
                .then(result => {
                    resolve(result);
                })
                .catch(error => {
                    reject({
                        httpStatusCode: 500,
                        error_description: `Error description`
                    });
                });
        });
```

# POST (x-www-form-urlencoded)

```
const qs = require('qs');

await axios({
                method: 'post',
                url: URL,
                headers: {
                    'Content-type': 'application/x-www-form-urlencoded'
                },
                data: qs.stringify({
                    client_id: xxxx,
                    client_secret: xxxx,
                    code: code,
                    grant_type: 'authorization_code',
                    redirect_uri: xxxx
                })
            })
                .then(result => {
                    resolve(result);
                })
                .catch(error => {
                    reject({
                        httpStatusCode: 500,
                        error_description: `Error Description`
                    });
                });
        });
```
