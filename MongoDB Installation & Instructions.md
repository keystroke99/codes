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
