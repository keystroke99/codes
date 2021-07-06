rewrite the entire history
# Step1
```
git filter-branch --tree-filter 'rm -f <path_to_file>' HEAD
```

Example:
```
git filter-branch --tree-filter 'rm -f .env' HEAD
```
# Step2
```
git push origin --force --all
```
