// For postfix
cp -a /etc/postfix/. /var/www/mail.skyblue.co.in/backup/postfix/

// For dovecot
cp -a /etc/dovecot/. /var/www/mail.skyblue.co.in/backup/dovecot/

// For apache2
cp -a /etc/apache2/. /var/www/mail.skyblue.co.in/backup/apache2/

// For lets encrypt
cp -a /etc/letsencrypt/live/. /var/www/mail.skyblue.co.in/backup/letsencrypt/liv                      e/
