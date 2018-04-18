# Get Date and Time Stamp

```
  function getTimeStamp() {
    var now = new Date();
    return (now.getFullYear().toString() + ("0" + now.getMonth()).slice(-2).toString()  + (now.getDate()).toString()  + now.getHours().toString()
    + ((now.getMinutes() < 10) ? ("0" + now.getMinutes().toString) : (now.getMinutes().toString()))  + ((now.getSeconds() < 10) ? ("0" + now
                  .getSeconds().toString()) : (now.getSeconds().toString())));
}
  let newOrderId = "C" + (memberId.substring(1, 4)).toUpperCase() + getTimeStamp();
```
