# Remove an Object from an Array

```
for(var i = 0; i < data.length; i++) {
    if(data[i].id == id) {
        data.splice(i, 1);
        break;
    }
}
```


# Filter Objects for matching field values

```
myArr = myArr.filter(function( obj ) {
        return obj.isCeleb !== false;
      });
```
