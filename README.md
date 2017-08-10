# Codes
Code Blocks for Laravel

# Excel File Load to Database:

https://github.com/Maatwebsite/Laravel-Excel

```
 public function excelupload(Request $request)
    {

        if($request->hasFile('excelfile')){
            $path = $request->file('excelfile')->getRealPath();
            $data = Excel::load($path, function($reader) {})->get();
            
            if(!empty($data) && $data->count()){

                foreach ($data->toArray() as $key => $value) {
                    if(!empty($value)){
                        foreach ($value as $v) {
                            $insert[] = ['title' => $v['title'], 'description' => $v['description']];
                        }
                    }
                }
                if(!empty($insert)){
                    Item::insert($insert);
                    return back()->with('success','Insert Record successfully.');
                }
            }
        }
        return back()->with('error','Please Check your file, Something is wrong there.');
    }
```

# Enter only number in Text Field using Javascript
```
<input type="text" value="" name="mobileNo" onkeypress="return isNumber(event)" />
```
```
<script>
    function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>
```
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
# Ajax Call in Laravel 5.4
```
$('#enrolcol3').on('click', function() {
                    
                    $.ajax({
                        // headers: {
                        //               'X-CSRF-Token': $('input[name="_token"]').val()
                        //           },
                        url: "/submituserdetails",
                        type: "POST",
                        data: {firstname: $("#firstname").val(), lastname: $("#lastname").val(), email: $("#email").val(), mobileNo: $("#phone").val(), country: $("#country").val(), city: $("#city").val(), address: $("#address").val(), courselanguage: $("#courselanguage").val(), genpwd: $("#pwd").val(), flag: $("#enrolflag").val(), _token:'{{ csrf_token() }}'  },
                        success: function (response) {
                          // you will get response from your php page (what you echo or print) 
                          // rohini = "you are attending the event";
                          // u = document.getElementById('msg');
                          // u.innerHTML = rohini;
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                           console.log(textStatus, errorThrown);
                        }
                    });
                
                }); 
```
