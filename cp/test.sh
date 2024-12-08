#!/bin/bash

echo "backup started"

current_date=$(date +%d-%m-%Y)
yesterday=$(date -d "yesterday" '+%d-%m-%Y')

##############################################
#           Delete yesterday bc file         #
##############################################

echo "Checking yesterday backup file exists or not"
# backup_file_06-12-2024.tar.gz
file="/var/www/mail.skyblue.co.in/cp/backup_file_"$yesterday".tar.gz"

 if [  -e "$file" ]; then
  echo "File exists"
  echo "removing yester'bc file"
  rm "$file"
else
  echo "File does not exist"
  echo "$file"
fi