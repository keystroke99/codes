# Update multiple documents

```
# Single Field
db.users.update({}, { '$set': {"referralCode" : "MUM-4567832562313"} } , {multi: true});

# Multiple Fields
db.users.update({}, { '$set': {'isEmailVerified' : 'ture', 'isMobileVerified' : 'true'} } , {multi: true});
```
