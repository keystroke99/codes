# GET / POST / PUT Call Example

```
var request = $.ajax({
  url: "script.php",
  method: "POST",
  data: { id : menuId },
  dataType: "html"
});
 
request.done(function( msg ) {
  $( "#log" ).html( msg );
});
 
request.fail(function( jqXHR, textStatus ) {
  alert( "Request failed: " + textStatus );
});
```
