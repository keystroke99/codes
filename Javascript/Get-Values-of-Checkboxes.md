
# Get values of Checkbox group on click event

```
function checkboxclicked(){
             var IDs = $('input:checked').map(function(){
                         
                       return $(this).val();
                         console.log(IDs.get());
                     });
             var names = $('input:checked').map(function(){
                         
                       return $(this).attr("name");
                         console.log(names.get());
                     });
```
