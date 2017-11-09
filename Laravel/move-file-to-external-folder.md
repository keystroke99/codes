
get ur path name from base_path(); function, then from the string add your desired folder location. suppose ur

base_path() = '/home/user/user-folder/your-laravel-project-folder/'

So ur desired path should be like this

$path = '/home/user/user-folder/your-target-folder/'.$imageName;
make sure u have the writing and reading permission
