# update an element in an Array

```
// Edit a Single Cart Item

router.put("/updateCartItem/:id", function(req, res) {
  let reqbody = req.body;
  let id = req.params.id;

  // reqbody.updatedBy = req.body.updatedBy;
  // reqbody.updatedAt = new Date();

  cart.findOneAndUpdate({ "cartItems._id":  id},
  { 
      "$set": {
          "cartItems.$.title": req.body.title,
          "cartItems.$.category": req.body.category,
          "cartItems.$.description": req.body.description,
          "cartItems.$.quantity": req.body.quantity,
          "cartItems.$.price": req.body.price,
          "cartItems.$.credits": req.body.credits,
          "cartItems.$.mediaType": req.body.mediaType,
          "cartItems.$.serviceType": req.body.serviceType,
          "cartItems.$.serviceDateTime": req.body.serviceDateTime,
          "cartItems.$.serviceStatus": req.body.serviceStatus
      }, 
  },
  { upsert: true }, function (err, newresult) {
    if (err) {
      res.json({ error: "InvalidID" });
    } else {
      res.json({ message: "cart item updated successfully" });
    }
  });

 
});
```
