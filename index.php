<?
    if($_GET['delete_session'])
        session_destroy();
    session_start();
    $_SESSION['count'] += 1;
?>
<br /><br /><br /><br /><br />
host: <?=$_ENV['HOSTNAME']?>
<br />
count: <?=$_SESSION['count']?>
<br /><br /><br /><br /><br />
