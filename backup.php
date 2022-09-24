<?php
$user ="root";
$pass ="";
$host ="localhost";
$databases =['aptechurc_db'];

date_default_timezone_set( "Asia/Karachi");
if(!file_exists("E:/sqlbackup/Database")){
    mkdir("E:/sqlbackup/Database");
}
foreach($databases as $database) {
    if(!file_exists(("E:/sqlbackup/Database/$database"))){
        mkdir("E:/sqlbackup/Database/$database");
    }
        $filename = $database."_".date("d-m-Y,h-i");
        $folder = "E:/sqlbackup/Database/$database/".$filename.".sql";
    exec("C:/xampp/mysql/bin/mysqldump --user={$user} --password={$pass} --host={$host} {$database} --result-file={$folder}", $output);
 }

print_r($output);
