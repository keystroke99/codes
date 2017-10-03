# show and hide an element

```
  function expandthree(){
          var x = document.getElementById('collapseThree');
              if (x.style.display === 'none') {
                  x.style.display = 'block';
              } else {
                  x.style.display = 'none';
              }
        }
```

# Form Submission calls Javascript function

```
<form onsubmit="return redirectMe();">
  <input placeholder="Search" type="text">
</form>

... more code here ...

function redirectMe() {
  window.location.replace("http://stackoverflow.com");
  return false;
}
```
# Disable Right Click, Text Selection and View Source

```
  document.oncontextmenu = function(){return false;};
        document.onselectstart= function() {return false;}; 
        document.onkeydown = function(e) {
                if (e.ctrlKey && 
                    (e.keyCode === 67 || 
                     e.keyCode === 86 || 
                     e.keyCode === 85 || 
                     e.keyCode === 117)) {
                    
                    return false;
                } else {
                    return true;
                }
        };
```

# jQuery get value of select onChange
url: https://stackoverflow.com/questions/11179406/jquery-get-value-of-select-onchange

```
This is helped for me.

For select:

$('select_tags').on('change', function() {
    alert( $(this).find(":selected").val() );
});

// text value
$('select').on('change', function() {
                    alert( $(this).find(":selected").text() );
                    
                });
For radio/checkbox:

$('radio_tags').on('change', function() {
    alert( $(this).find(":checked").val() );
});



```
