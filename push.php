<?php
$shell = 'cd /home/www/studyife ; git pull pull https://github.com/haytoo1/studyife.git && echo `date` >> push.log';
$val = system($shell,$return);
file_put_contents('/log/e.log',$val.$return);
echo $val.$return;