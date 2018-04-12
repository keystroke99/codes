# GET Call Example

```
router.get("/getCall/:id", function(req, res) {
let id = req.params.id;

 User.findById(id, function(err, result) {
 if (err) { res.send(err); }
         // res.send(result.preferences);
         User.find({ "name": "damuluri" }, function(err, fresult) {
           res.send(fresult);
         });
       });

});
```
