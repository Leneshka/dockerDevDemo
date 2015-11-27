# dockerDevDemo
Docker image for php development demos


Build image:
```docker build -t <image name> .```


Run container from project root:
```docker run -d -p 80:80 -p 9000:9000 -v /$(pwd)/www:/var/www/site <image name>```
To have mapped folders working on Windows, do not forget to add them in VirtualBox mapped
constantly with autostart with same path on machine. The best thing is to use subdirecory of ```C:/Users``` as it's
mapped by default.

For php debug troubleshooting, see [forum](https://devnet.jetbrains.com/message/5533800).
