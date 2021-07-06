rewrite the entire history
```
git filter-branch --tree-filter 'rm -f <path_to_file>' HEAD
```

Example:
```
git filter-branch --tree-filter 'rm -f .env' HEAD
```

```
git push origin --force --all
```
