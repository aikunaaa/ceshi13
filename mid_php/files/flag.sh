#!/bin/sh
sed -i "s/FLAGFLAGFLAG/$GZCTF_FLAG/" /var/www/html/flag.php
export GZCTF_FLAG=""