# delete multiple files NODEJS

```
let filePaths = [];
                result.forEach(file => {
                    filePaths.push(file.file.path);
                });
                // Perform delete operation
                let removeFile = function (err) {
                    if (err) {
                        console.log("unlink failed", err);
                    } else {
                        console.log("file deleted");
                    }
                }
                //for multiple files...
                _.map(filePaths, (file) => {
                    fs.unlink(file, removeFile);
                });
                File.remove({ _id: { $in: fileIds } }).exec()
                ```
