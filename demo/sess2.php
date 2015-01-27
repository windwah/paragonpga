<?php
echo '<?xml version="1.0" encoding="gb2312" ?>'."\n";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Session TestPage2</title>
        <meta http-equiv="Content-type" content="text/html; charset=gb2312" />
        <style type="text/css">
        <!--
            body, p {
                font-family: Tahoma, "Times New Roman", sans-serif;
                font-size: 12px;
            }
            h3 {
                font-size: 14px;
            }
            a {
                color: #00f;
                text-decoration: none;
            }
            a:hover {
                text-decoration: underline;
            }
            pre div.code {
                font-family: "Courier New", "Courier 10 Pitch", Courier, sans-serif;
                font-size: 12px;
                width: 320px;
                padding: 8px;
                border: 1px solid #666;
                background: #dedede;
            }
        -->
        </style>
    </head>
    <body>
        <h3>Session TestPage2</h3>
        <p><a href="session.zip" alt="Session TestCode">Download TestCode</a></p>
        <p>Session value setup for this page，below is the code：</p>
        <pre>
            <div class="code">
&lt;?php
    session_start();
    echo 'name: '.$_SESSION['name'].'&lt;br /&gt;';
    echo 'count: '.$_SESSION['vcnt'];
?&gt;
            </div>
        </pre>
        <p>Result：<br />
        <?php
            session_start();
            echo 'name: '.$_SESSION['name'].'<br />';
            echo 'count: '.$_SESSION['vcnt'];
        ?>
        </p>
        <p><a href="sess.php" alt="TestPage1">&laquo; Back to Session TestPage1</a></p>
    </body>
</html>