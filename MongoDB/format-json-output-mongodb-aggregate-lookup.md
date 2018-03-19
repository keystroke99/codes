#Actual Output
```
[
    {
        "celebProfile": [
            {
                "_id": "5a8d30f17cef4136340481c3",
                "name": "Pavan",
                "email": "test1@gmail.com",
                "username": "test1",
                "password": "$2a$10$RvH/NLaDyOQgLRPCx79OW.7WvhchLyGknDQnzHlB.a9qkw6sjrNfi",
                "mobileNumber": "7893552468",
                "loginType": "app",
                "location": "hyderabad",
                "gender": "male",
                "prefix": "Mr",
                "dateOfBirth": "2018-03-08",
                "address": "Hyderabad",
                "availableCredits": "3000",
                "IsDeleted": false,
                "updated_at": "2018-02-21T08:42:25.761Z",
                "created_at": "2018-02-21T08:42:25.761Z",
                "celebToManager": [],
                "isCeleb": false,
                "status": false,
                "preferences": [],
                "role": "member",
                "__v": 0,
                "country": "IN",
                "aboutMe": "Hi all",
                "lastName": "S",
                "avtar_imgPath": "avtars/pavan-anna.jpg",
                "avtar_originalname": "pavan-anna.jpg",
                "isEditorChoice": false,
                "isOnline": false,
                "isPromoted": false,
                "isTrending": false
            }
        ]
    },
    {
        "celebProfile": [
            {
                "_id": "5a8f97f5cdb58161c2fb98fe",
                "name": "srihari",
                "email": "srihari@gmail.com",
                "username": "srihari",
                "password": "$2a$10$NZaNJuyGptGvrUtFc3S76.MmQQyeTgghz7kK19reZAyIKOTShb36S",
                "mobileNumber": "8297152834",
                "loginType": "app",
                "location": "india",
                "dateOfBirth": "2017-12-14",
                "IsDeleted": false,
                "updated_at": "2018-02-23T04:26:29.738Z",
                "created_at": "2018-02-23T04:26:29.738Z",
                "celebToManager": [],
                "isCeleb": false,
                "status": false,
                "avtar_imgPath": "avtars/puli.jpg",
                "avtar_originalname": "puli.jpg",
                "preferences": [],
                "role": "member",
                "__v": 0,
                "address": "Near Nandhini Hotel, Road Number 36, Jawahar Colony, Jubilee Hills, Jubilee Hills, Hyderabad, Telangana 500033, India",
                "availableCredits": "0.25",
                "gender": "male",
                "aboutMe": "hi",
                "lastName": "s",
                "prefix": "",
                "isEditorChoice": true,
                "isOnline": false,
                "isPromoted": false,
                "isTrending": false,
                "profession": "Architect"
            }
        ]
    },
    {
        "celebProfile": [
            {
                "_id": "5a9381ac2ee1c00304768947",
                "name": "Harish",
                "email": "harish@gmail.com",
                "username": "harish",
                "password": "$2a$10$DgBis64I07a42GGuUcnZIuiWTFHu3Vln5SbCci6FHaI6W1xioHhUW",
                "mobileNumber": "888586",
                "loginType": "app",
                "location": "hyderabad",
                "gender": "male",
                "dateOfBirth": "16-07-1993",
                "address": "Hyderabad",
                "availableCredits": "23",
                "IsDeleted": false,
                "updated_at": "2018-02-26T03:40:28.790Z",
                "created_at": "2018-02-26T03:40:28.790Z",
                "celebToManager": [],
                "isCeleb": false,
                "status": false,
                "preferences": [],
                "role": "member",
                "__v": 0
            }
        ]
    }
]
```
# Code
```
        let dudes = [];
        for(var i = 0; i < data.length; i++) {
          console.log(i);
          console.log(data[i].celebProfile[0]);
          dudes.push(data[i].celebProfile[0]);
        }
```
# Output
```


```
