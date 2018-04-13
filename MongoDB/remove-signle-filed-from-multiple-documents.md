# Delete signle field from multiple documents

```
db.users.update({}, {$unset: {cumulativeCreditValue:1}}, {multi: true});
```
