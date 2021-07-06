```
find . -type f ! -path '*/.git/*' ! -path '*/.nyc_output/*' ! -path '*/node_modules/*' ! -path '*/coverage/*' -print0 | xargs -0 dos2unix
```
