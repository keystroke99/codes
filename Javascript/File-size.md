# Know file size and restrict

```
var uploadField = document.getElementById("file");

uploadField.onchange = function() {
    if(this.files[0].size > 2000000){
       alert("Please select file less than 2MB");
       this.value = "";
    };
};

```
