This sms-wall is made for debian based os

Install php with `apt-get install php`

Run script `sudo ./scripts/setup.sh`

If you get [FAIL] run script `sudo ./scripts/start_gsm.sh` and rerun setup.sh

Run script `sudo ./scripts/scherm.sh` to disable screensaver

Go to the sms-wall directory and start a PHP server using the command

`php -S 127.0.0.1:80 -t .`

The interface can now be seen by browsing to localhost:80 in your favourite browser 

to get an example database, simply copy `db/db.sqlite`to `/var/spool/gammu`
