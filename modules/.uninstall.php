  
<?php
include("modules/system.php");
class un {
  public function uni() {
    global $system;
    // removing old files
    if ($system=="termux") {
      system("rm -rf /data/data/com.termux/files/usr/share/Dox-ip");
      system("rm -rf /data/data/com.termux/files/usr/bin/Dox-ip");
      system("rm -rf /data/data/com.termux/files/usr/bin/trace");
    } elseif ($system=="ubuntu") {
      system("sudo rm -rf /usr/bin/Dox-ip");
      system("sudo rm -rf /usr/bin/trace");
      system("sudo rm -rf /usr/share/Dox-ip");
    } else {
      system("rm -rf /usr/bin/Dox-ip");
      system("rm -rf /usr/bin/trace");
      system("rm -rf /usr/share/Dox-ip");
    }
  }
  function logo() {
    system("clear");
    echo <<<EOL
\033[01;33m
\033[01;31m      _\033[01;33m ____    _
     \033[01;31m(_)\033[01;33m  _ \  | |_ _ __ __ _  ___ ___ _ __
     | | |_) | | __| '__/ _` |/ __/ _ \ '__|
     | |  __/  | |_| | | (_| | (_|  __/ |
     |_|_|      \__|_|  \__,_|\___\___|_|
    \033[01;37m}\033[01;31m--------------------------------------\033[01;37m{
 }\033[01;31m------------- \033[01;32mTrack IPLocation\033[01;31m -------------\033[01;37m{
    }\033[01;31m--------------------------------------\033[01;37m{
\033[00m
EOL;

    if (file_exists("/usr/bin/Dox-ip")) {
      echo "\n\033[01;31m        Sorry Dox-ip is not removed !!!\033[00m\n";
    } else if(file_exists("/data/data/com.termux/files/usr/bin/Dox-ip")) {
      echo "\n\033[01;31m        Sorry Dox-ip is not removed !!!\033[00m\n";
    } else {
      echo "\n\033[01;32m        Dox-ip is uninstalled !!!\033[00m\n";
    }
  }
}
$a=new un;
$a->uni();
$a->logo();
?>
