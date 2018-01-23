Installation ::

1. Create a Directory in C drive.
md \data\db

2. Now attach this path to the working space.
"C:\Program Files\MongoDB\Server\3.6\bin\mongod.exe" --dbpath c:\data\db

-----------------------------------------------------
-----------------------------------------------------
*********** RUN MONGODB *****************************
-----------------------------------------------------
-----------------------------------------------------

1. Start MongoDB

"C:\Program Files\MongoDB\Server\3.6\bin\mongod.exe"

2. Connect to MongoDB

"C:\Program Files\MongoDB\Server\3.6\bin\mongo.exe"


# Update Command

```
db.users.update( {username:"keystroke99"},{$set: {email:"keystroke98@gmail.com"}})
```

# use Object Id

```
var ObjectId = require('mongodb').ObjectID;

```
# Update by Id

```
router.put('/editSchedule/:id', function(req, res) {

	
	console.log(req.body);

    var startTime = req.body.startTime;
    var endTime = req.body.endTime;
    var typeOfEvent = req.body.typeOfEvent;

    var reqbody = req.body;

    Calander.findByIdAndUpdate(req.params.id, reqbody, function (err, result) {
    if (err) return res.send(err);
    res.send('Schedule Updated Successfully');
  });



    
});
```
# Mongo error : restart the mongo db #
Failed to connect to 127.0.0.1:27017, in(checking socket for error after poll), reason: errno:111 Connection refused
```
delete this file and then launch sudo rm /var/lib/mongodb/mongod.lock
```
```
mongo service: delete the file rm -rf /tmp/mongodb-27017.sock

```

# Connect to Mongo Compass using SSH

```
1. Bind Ip Address in Location : "/etc/mongod.conf"
-- 0.0.0.0
```
```
2. In MongoDB Compass use SSH Tunnel \n
HostName : localhost \n
Port : 27017 \n
select Use Identity File -> SSH HostNAme (IP Address) -> Tunnel Port (22) -> SSH Username (ubuntu)
 --> SSH Identity File (select PPK file)
 
 ```
 
 # Checking with multiple fields
 
 ```
 module.exports.getUserByUsername = function(username, callback) { \n

  var query = { $or: [ { email: username }, { mobileNumber: username } ] }; \n
    User.findOne(query, callback); \n
}
 ```
 
 # Get data by specified field
 
 ```
 db.getCollection("users").find({'preferences':/Sports/}).pretty()
 ```
