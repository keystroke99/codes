# Compare Dates

```
let oldStartTime = new Date(startTime);
        let newStartTime = new Date(result[0].startTime);
        let newEndTime = new Date(result[0].endTime);
         
  // Check if the timeline is in between two start dates picked from the result
          if ((Date.parse(oldStartTime) >= Date.parse(newStartTime)) && (Date.parse(oldStartTime) <= Date.parse(newEndTime))) {
            res.json({
              "error" : "Schedule already exits in given time line. please change the time and create new one"
            });
          }
```
