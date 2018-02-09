# Show only certian fields after Lookup Results

```
db.categories.aggregate(
    [
   {
     $lookup:
       {
         from: "subcategories",
         localField: "_id",
         foreignField: "cat_id",
         as: "SubCategories"
       }
  },
  { 
        $project : { 
            "_id" : 1,
            "name" : 1,
           "SubCategories._id" : 1,
           "SubCategories.sub_cat_name" : 1
        } 
    }
])

```
