# BoardingPass

Note:This repo only contains testing site's web file, the .exe and related unity files are too large to upload to github, I may use gitbucket instead in the future if uploading the .exe and c# files are necessary

The .exe will read in strings as command line arguments, then it will run as with a window, when it is finished processing the desired image the .exe will close itself and produce the .png at .exe's directory(which is the same as the web server file)

The test site now will read user input and then send ajax request to handler.php, in which will try to execute the .exe from my local PC(as test server host for now).

The main issue for now is, all the methods I found online about executing external exe from php doesn't work, except system built-in app like cmd.exe(I commented all the methods I tried)

The testing site can be vist at:
http://71.95.156.208:8081/boardingpass_test/

Personally I don't think executing external exe with GUI from php is feasible at the moment, so I plan to try rewrite the Unity program into webplayer, which is a html file produced by Unity engine, I hope that way I can bypass the current issue.
