# Know file size and restrict

```
<script type="text/javascript">
	var uploadField = document.getElementById("userfile");

uploadField.onchange = function() {
	if(this.files[0].type == 'application/pdf' || this.files[0].type == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') {
		// console.log("Filename: " + this.files[0].name);
        // console.log("Type: " + this.files[0].type);
        // console.log("Size: " + this.files[0].size + " bytes");
		if(this.files[0].size > 2000000){
			alert("Please select file less than 2MB");
			this.value = "";
		}
	} else {
		alert("only WORD or PDF document allowed");
       this.value = "";
	}
    
};
</script>

```
