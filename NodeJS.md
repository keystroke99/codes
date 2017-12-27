# Start Sever in LAN

```
 node app.js --host 192.168.2.142

```

# Kill Process by Port Number

```
This fuser 8080/tcp will print you PID of process bound on that port.

And this fuser -k 8080/tcp will kill that process.

Works on Linux only. More universal is use of lsof -i4 (or 6 for IPv6).

```
