# Using fs.writeFile

```
const fs = require('fs');

// FAQs template
router.get("/getfaqs", function(req, res) {

  let lyrics = 'But still I\'m having memories of high speeds when the cops crashed\n' +  
  'As I laugh, pushin the gas while my Glocks blast\n' + 
  'We was young and we was dumb but we had heart';

// write to a new file named 2pac.txt
fs.writeFile('views/demo.ejs', lyrics, (err) => {  
// throws an error, you could also catch it here
if (err) throw err;

// success case, the file was saved
res.send('Lyric saved!');
});
});
// End of FAQs template

```
