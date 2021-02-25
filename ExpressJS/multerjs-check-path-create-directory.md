# Check if Directory exists or not

const multer = require("multer");

```
// Multer settings
let storage = multer.diskStorage({
    destination: function (req, file, cb) {
        const uploadPath = "./uploads/reports";
        // CHECK IF PATH EXIST
        const isPathExist = fs.existsSync(uploadPath);
        if (!isPathExist) {
            // IF NOT EXIST THEN CREATE PATH RECURSIVELY
            fs.mkdirSync(uploadPath, { recursive: true });
        }
        cb(null, uploadPath);
    },
    filename: function (req, file, cb) {
        cb(null, file.fieldname + "-" + Date.now() + "-" + file.originalname);
    },
});
```
