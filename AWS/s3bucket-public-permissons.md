#Give S3 Bucket Public Access
```
Step 1: Select Policy Type \n
Select Type of Policy : S3 Bucket Policy \n
Step 2: Add Statement(s) \n
Effect : Allow \n
Principal : * \n
AWS Service : Amazon S3 \n
Actions : Check “GetObject” \n
Amazon Resource Name (ARN) : arn:aws:s3:::<bucket name>/*

Now click on Add Statement \n
Step 3: Generate Policy \n
Click on Generate Policy and Paste the JSON object in Byucket > Permissions > Bucket Policy > Bucket policy editor > click on SAVE

``
