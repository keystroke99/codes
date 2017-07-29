# Codes
Code Blocks for Laravel

# Excel File Load to Database:

(https://github.com/Maatwebsite/Laravel-Excel)

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

   
