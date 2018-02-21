# Convert Array of elements to Array of Objects

```
let newArr = req.body.SelectedCategories;

  let convArr = newArr.map(function (id) {
    return ObjectId(id);
  });
  
```
