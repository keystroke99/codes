Update Array

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
