# watch for files and build typescript
NOTE:: Install plugins
  - rimraf
  - 
```
"scripts": {
        "build": "rimraf dist && npm run build-ts",
        "build-ts": "tsc",
        "debug": "npm run build && npm run watch-debug",
        "serve": "npm run build && node dist/server.js",
        "serve-debug": "nodemon --inspect dist/server.js",
        "start": "npm run serve",
        "start:dev": "npm run format && nodemon --watch src --ext ts,js,json --exec npm run serve",
        "format": "prettier --config .prettierrc 'src/**/*.ts' --write"
    },
```

# Dev Dependencies
```
"devDependencies": {
        "@types/async": "^3.0.2",
        "@types/bluebird": "^3.5.27",
        "@types/body-parser": "^1.17.1",
        "@types/chai": "^4.2.3",
        "@types/compression": "^1.0.1",
        "@types/express": "^4.17.1",
        "@types/lodash": "^4.14.165",
        "@types/multer": "^1.4.4",
        "@types/node": "^12.7.8",
        "@types/request": "^2.48.3",
        "@types/request-promise": "^4.1.44",
        "nodemon": "^1.19.4",
        "prettier": "^2.2.0",
        "rimraf": "^3.0.2",
        "ts-node": "^8.4.1",
        "typescript": "^3.6.3"
    }
```

# tsconfig.json

```
{
    "compilerOptions": {
        "module": "commonjs",
        "esModuleInterop": true,
        "allowSyntheticDefaultImports": true,
        "target": "es6",
        "noImplicitAny": false,
        "moduleResolution": "node",
        "sourceMap": true,
        "resolveJsonModule": true,
        "pretty": true,
        "outDir": "dist",
        "baseUrl": ".",
        "paths": {
            "*": [
                "node_modules/*",
            ]
        },
        "types":["node"]
    },
    "include": [
        "src/**/*.ts"
    ]
}
```
