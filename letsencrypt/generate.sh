if [[ $1 = "action" ]] 
then /usr/local/bin/doc-down
fi
docker run -it --rm \
    -v /raid/docker/letsencrypt/:/etc/letsencrypt \
    -p 80:80 -p 443:443 xataz/letsencrypt \
        certonly --standalone \
        --agree-tos \
        -m master@cosmos-connect.ru \
        -d cosmos-connect.ru \
        -d owncloud.cosmos-connect.ru \
        -d git.cosmos-connect.ru \
        -d redmine.cosmos-connect.ru \
        -d wiki.cosmos-connect.ru \
        -d mail.cosmos-connect.ru \
        -d ldapadmin.cosmos-connect.ru \
        -d leanote.cosmos-connect.ru \
        -d bareos.cosmos-connect.ru \
        -d auc.cosmos-connect.ru \
	-d files.cosmos-connect.ru 
echo "Копирую ключи"
cp ./live/cosmos-connect.ru/fullchain.pem ../nginx/nginx/ssl/fullchain.pem
cp ./live/cosmos-connect.ru/privkey.pem ../nginx/nginx/ssl/privkey.pem

if [[ $1 = "action" ]] 
then /usr/local/bin/doc-up
fi

#        -d files.cosmos-connect.ru \