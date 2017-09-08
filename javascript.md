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
