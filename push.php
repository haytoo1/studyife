<?php
/**
 * Created by PhpStorm.
 * User: hello
 * Date: 16/3/21
 * Time: 00:22
 */
$shell = 'cd /home/www/studyife ; git pull pull https://github.com/haytoo1/studyife.git && echo `date` >> push.log';
$val = system($shell,$return);
file_put_contents('/log/e.log',$val.$return);