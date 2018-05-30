# OR Condition mixed with AND Condition

```
{ $and: [{ $or: [ { serviceStatus: "celebdisconnected" }, { serviceStatus: "rejected" }, {serviceStatus : "blocked"}, {serviceStatus : "celebRejected"} ] }, { fcmnotification: "RNotification" }, { startTime: { $lt: jobendtime } }, { startTime: { $gt: currenttime } }] };
```
