# nginx-cf
Generator of CloudFlare Real IP-changer for nginx

## Automatic script

Set this command to your crontab (with root):
```
rm -rf /etc/nginx/conf.d/cloudflare.conf && wget -O /etc/nginx/conf.d/cloudflare.conf https://lib.theel0ja.info/nginx-cf/nginx-cf.php
```

You can select your own restarting/reloading system.
