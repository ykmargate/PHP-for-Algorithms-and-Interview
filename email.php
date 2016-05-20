<?php
$to = "ek@ekriv.com";
$subject = "AskAccount registration";
$txt = '
                <html>
                <body>
                <table>
                    <tr>
                        <td style="font-family:Arial,sans-serif">
                            Thanks for signing up at AskAccount!<br/>
                            Please click on the following link to verify your email address:<br/><br/>
                            <a href="http://askaccount.com/verify.php">
                            <b>Confirm your AskAccount registration</b></a><br/><br/>

                            Or copy and paste the following into your browser:<br/>
                            http://askaccount.com/verify.php?v=<br/><br/>
                            If you need further assistance, please <a href="http://askaccount.com/support.php">contact us</a>.<br/><br/>
                            <a href="http://www.askaccount.com"><font color="#2164f3"><b>AskAccount</b></font></a> - easy account rules management.<br/>
                        </td>
                    </tr>
                </table>
                </body>
                </html>
            ';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: no-reply@askaccount';

mail($to,$subject,$txt,$headers);
