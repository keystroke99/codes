#[PDOException]
#SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 1000 bytes

Add the following code to boot() in AppServiceProvider.php
```
use  Illuminate\Support\Facades\Schema; 

Schema::defaultStringLength(191);

```
