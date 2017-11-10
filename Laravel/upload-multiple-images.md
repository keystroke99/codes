here is what worked best for me:

first do this in your form:
```
<form class="form-horizontal" enctype="multipart/form-data" method="post" action="/details">
```
and this for multiple selection:
```
<input required type="file" class="form-control" name="images[]" placeholder="address" multiple>
```
Now do this in your controller:
```
public function store(request $request) {

    $input=$request->all();
    $images=array();
    if($files=$request->file('images')){
        foreach($files as $file){
            $name=$file->getClientOriginalName();
            $file->move('image',$name);
            $images[]=$name;
        }
    }
    /*Insert your data*/

    Detail::insert( [
        'images'=>  implode("|",$images),
        'description' =>$input['description'],
        //you can put other insertion here
    ]);


    return redirect('redirecting page');
}
```
Hope this works
