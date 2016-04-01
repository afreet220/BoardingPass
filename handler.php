<?php
    $fname = (isset($_POST["fname"]))?$_POST["fname"]:null;
    $lname = (isset($_POST["lname"]))?$_POST["lname"]:null;
    /*$addr = "D:/Program Files/wamp/www/boardingpass_test/PsExec.exe";
    $addr = "PsExec.exe";
    exec($addr,$output,$return);*/

    //exec("c:/WINDOWS/system32/cmd.exe");

    //exec("D:/Program Files/wamp/www/boardingpass_test/PsExec.exe");

    /*this one works,but it's a system app*/
    exec("c:/WINDOWS/system32/cmd.exe PING");

    /*shell_exec('SCHTASKS /F /Create /TN _boardpass /TR "PsExec.exe" /SC DAILY /RU INTERACTIVE');
    shell_exec('SCHTASKS /RUN /TN "_boardpass"');
    shell_exec('SCHTASKS /DELETE /TN "_boardpass" /F');*/

    /*function _exec($cmd)
    {
      $WshShell = new COM("WScript.Shell");
      $oExec = $WshShell->Run($cmd, 0,false);
      echo $cmd;
      return $oExec == 0 ? true : false;
    }
    _exec("testbuild.exe");*/

    /*$WshShell = new COM("WScript.Shell");
    $oExec = $WshShell->Run("testbuild.exe", 7, false);*/


    //pclose(popen("start /B \"D:\\Program Files\\wamp\\www\\boardingpass_test\\PsExec.exe\"", "r"));

    //exec('start /B "PsExec.exe"',$output,$return);

    //system('start testbuild.exe');
    echo "Hello, $fname $lname!";
?>
