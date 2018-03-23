# Update Array

```
appPromoCode.updateOne(
              { _id: findResult[0]._id },
              { $push: { promoCode: promoObject } },
              function(err, updateResult) {
                if (err) return res.send(err);
                if (updateResult.nModified == 1) {
                  res.json({
                    message: "New App Promocode Updated Successfully."
                  });
                } else {
                  res.json({ message: "Operation Failed!" });
                }
              }
            );
 ```

# Push Multiple Objects to Array
we will use $each to insert multiple objects from the given array
```
let newMedia = new memberMedia({
                  memberId: memberID,
                  imageFiles: imageFiles
                });

                // Push Images Objects to ImageArray

                memberMedia.updateOne(
                    { _id: profiledata._id },
                    { $push: {imageFiles: {$each: imageFiles // this is an array}} },
                    function(err, updateResult) {
                      if (err) return res.send(err);
                      if (updateResult.nModified == 1) {
                        res.json({
                            message: "Images uploaded successfully"
                        });
                      } else {
                        res.json({ message: "Operation Failed!" });
                      }
                    }
                  );
```
