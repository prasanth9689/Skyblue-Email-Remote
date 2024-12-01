#!/bin/bash

echo "backup started"

current_date=$(date +%d-%m-%Y)

##############################################
#           backup folder validation         #
##############################################
echo "Checking backup folder exists or not"

 if [ -d "/var/www/mail.skyblue.co.in/backup" ]; then
  echo "Folder exists"
else
  echo "Folder does not exist"
  echo "Creating 'backup' folder"

  cd  "/var/www/mail.skyblue.co.in/"
  mkdir "backup"

if [ -d "backup" ]; then
    echo "Directory 'backup' created successfully."
else
    echo "Failed to create the directory."
 fi
fi

##############################################
#           postfix folder validation        #
##############################################
echo "Checking postfix folder"
 if [ -d "/var/www/mail.skyblue.co.in/backup/postfix" ]; then
  echo "Folder exists"
else
  echo "Folder does not exist"
  echo "Creating 'postfix' folder"

  cd  "/var/www/mail.skyblue.co.in/backup/"
  mkdir "postfix"

if [ -d "postfix" ]; then
    echo "Directory 'postfix' created successfully."
else
    echo "Failed to create the directory."
 fi
fi

#           postfix saving config files      

cd  "/var/www/mail.skyblue.co.in/backup/postfix"

echo "Postfix backup started"

mkdir "$current_date" 

cp  -a "/etc/postfix/"* "/var/www/mail.skyblue.co.in/backup/postfix/$current_date/"


##############################################
#           apache2 folder validation        #
##############################################
echo "Checking apache2 folder"
 if [ -d "/var/www/mail.skyblue.co.in/backup/apache2" ]; then
  echo "Folder exists"
else
  echo "Folder does not exist"
  echo "Creating 'apache2' folder"

  cd  "/var/www/mail.skyblue.co.in/backup/"
  mkdir "apache2"

if [ -d "apache2" ]; then
    echo "Directory 'apache2' created successfully."
else
    echo "Failed to create the directory."
 fi
fi

#           apache2 saving config files      

cd  "/var/www/mail.skyblue.co.in/backup/apache2"

echo "Apache2 backup started"


mkdir "$current_date" 

cp  -a "/etc/apache2/"* "/var/www/mail.skyblue.co.in/backup/apache2/$current_date/"

##############################################
#           letsencrypt folder validation        #
##############################################
echo "Checking letsencrypt folder"
 if [ -d "/var/www/mail.skyblue.co.in/backup/letsencrypt" ]; then
  echo "Folder exists"
else
  echo "Folder does not exist"
  echo "Creating 'letsencrypt' folder"

  cd  "/var/www/mail.skyblue.co.in/backup/"
  mkdir "letsencrypt"

if [ -d "letsencrypt" ]; then
    echo "Directory 'letsencrypt' created successfully."
else
    echo "Failed to create the directory."
 fi
fi

#           letsencrypt saving config files      

cd  "/var/www/mail.skyblue.co.in/backup/letsencrypt"

echo "letsencrypt backup started"


mkdir "$current_date" 

cp  -a "/etc/letsencrypt/live/"* "/var/www/mail.skyblue.co.in/backup/letsencrypt/$current_date/"

##############################################
#           dovecot folder validation        #
##############################################
echo "Checking dovecot folder"
 if [ -d "/var/www/mail.skyblue.co.in/backup/dovecot" ]; then
  echo "Folder exists"
else
  echo "Folder does not exist"
  echo "Creating 'dovecot' folder"

  cd  "/var/www/mail.skyblue.co.in/backup/"
  mkdir "dovecot"

if [ -d "dovecot" ]; then
    echo "Directory 'dovecot' created successfully."
else
    echo "Failed to create the directory."
 fi
fi

#           dovecot saving config files      

cd  "/var/www/mail.skyblue.co.in/backup/dovecot"

echo "dovecot backup started"


mkdir "$current_date" 

cp  -a "/etc/dovecot/"* "/var/www/mail.skyblue.co.in/backup/dovecot/$current_date/"

##############################################
#           service folder validation        #
##############################################
echo "Checking service folder"
 if [ -d "/var/www/mail.skyblue.co.in/backup/service" ]; then
  echo "Folder exists"
else
  echo "Folder does not exist"
  echo "Creating 'service' folder"

  cd  "/var/www/mail.skyblue.co.in/backup/"
  mkdir "service"

if [ -d "service" ]; then
    echo "Directory 'service' created successfully."
else
    echo "Failed to create the directory."
 fi
fi

#           service saving config files      

cd  "/var/www/mail.skyblue.co.in/backup/service"

echo "service backup started"


mkdir "$current_date" 

cp  -a "/lib/systemd/system/postfix@.service" "/var/www/mail.skyblue.co.in/backup/service/$current_date/"
cp  -a "/lib/systemd/system/apache2@.service" "/var/www/mail.skyblue.co.in/backup/service/$current_date/"
cp  -a "/lib/systemd/system/code-server@.service" "/var/www/mail.skyblue.co.in/backup/service/$current_date/"

# Compress

# Directory to compress
DIRECTORY_TO_COMPRESS="/var/www"

# Destination file path for the single compressed file
DESTINATION_FILE="/var/www/mail.skyblue.co.in/cp/backup_file_$current_date.tar.gz"

# Create the destination directory if it doesn't exist
mkdir -p "$(dirname "$DESTINATION_FILE")"

# Compress all folders inside the specified directory into a single tar.gz file
tar --exclude=".git" tar -czvf "$DESTINATION_FILE" -C "$DIRECTORY_TO_COMPRESS" .

echo "Compressed all folders in $DIRECTORY_TO_COMPRESS to $DESTINATION_FILE"




echo "Full backup completed"

 
