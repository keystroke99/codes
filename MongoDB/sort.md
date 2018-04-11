 # Sort
 
 ```
 Credits.find({memberId: id}, null, {sort: {createdAt: -1}}, function(err, result) {
    if (err) return res.send(err);
    if (result) {
      res.send(result[0]);
    } else {
      res.json({
        error: "Credits not exits / send a valid memberId"
      });
    }
  });
  
 ```
