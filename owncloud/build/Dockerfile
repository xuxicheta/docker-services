FROM owncloud:9.0.4
RUN apt-get update && apt-get install -y php5-ldap libldap2-dev libldb-dev smbclient &&  ln -s /usr/lib/x86_64-linux-gnu/libldap*.so /usr/lib/
RUN docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu/ 
RUN docker-php-ext-install -j$(nproc) ldap 
#RUN docker-php-ext-install -j$(nproc)mysqli ftp

