# Get Call
```
                await axios
                .get(`${this.twitchApiUrl}/users`, {
                    params: {},
                    headers: {
                        'Client-ID': this.TWITCH_CLIENT_ID,
                        Authorization: `Bearer ${accessToken}`
                    }
                })
                .then(result => {
                    resolve(result.data);
                })
                .catch(error => {
                    winston.error(
                        `Error while fetching TWITCH user profile  `,
                        error.response.data
                    );
                    reject({
                        httpStatusCode: 500,
                        error_description: `Error while fetching TWITCH user profile`
                    });
                });
```
