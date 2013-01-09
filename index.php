<?
    if($_GET['delete_session'])
        session_destroy();
    session_start();
    $_SESSION['count'] += 1;
?>
<br /><br /><br /><br /><br />
host: <?=shell_exec('curl -s http://169.254.169.254/latest/meta-data/public-hostname')?>
<br />
count: <?=$_SESSION['count']?>
<br /><br /><br /><br /><br />
