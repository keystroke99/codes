# uppercase the first letter of a string in JavaScript

```
const capitalize = (s) => {
  if (typeof s !== 'string') return ''
  return s.charAt(0).toUpperCase() + s.slice(1)
}

capitalize('flavio') //'Flavio'
capitalize('f')      //'F'
capitalize(0)        //''
capitalize({})       //''
```
