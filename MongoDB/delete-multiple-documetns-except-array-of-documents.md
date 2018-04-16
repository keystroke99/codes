# Delete multiple objects except given array of fields

```
db.logins.remove({
    email:{ $not:{ $in:["walter@gustr.com", "john@gustr.com", "bruce@gustr.com", "jeevi@gustr.com", "clark@gustr.com","sravya@gustr.com", "arjun@gustr.com", "jane@gustr.com", "maya@gustr.com", "may@gustr.com", "terry@gustr.com", "tyson@gustr.com"]}},
})
```
