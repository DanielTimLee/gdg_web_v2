<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 16. 1. 20
 * Time: 오전 1:00
 */
session_start();
require_once('models/db.php');
db_connect();
echo "hi im method";
if ($action == 'login') {
    $sql = mysqli_query($link, constant("login"));
    $result = mysqli_num_rows($sql);
    if ($result == 1) {
        $arr = mysqli_fetch_array($sql);
        $_SESSION['usrname'] = $arr['usrname'];
    }
}
//if($_SESSION['usrname']){
switch ($action) {
    case 'register':
        $result = mysqli_query($link, constant("add_member")) or die(mysqli_error($link));
        break;
    case 'write':
        $result = mysqli_query($link, constant("add_article")) or die(mysqli_error($link));
        break;
    case 'delete':
        $result = mysqli_query($link, constant("del_article")) or die(mysqli_error($link));
        break;
    case 'logout':
        $result = 1;
        session_destroy();
        break;
    default:
        # code...
        break;
}
if ($result == 1) {
    switch ($action) {
        case 'login':
            echo('<script type="text/javascript">
      alert("성공적으로 로그인 하였습니다.");
      location.href="index.php";
      </script>');
            break;
        case 'register':
            echo('<script type="text/javascript">
      alert("성공적으로 가입되었습니다.");
      location.href="index.php";
      </script>');
            break;
        case 'write':
            echo('<script type="text/javascript">
      alert("성공적으로 작성되었습니다.");
      </script>');
            header("Location: index.php?pages=" . $page); //how to add php variable with the js script location.href??
            break;
        case 'delete':
            echo('<script type="text/javascript">
      alert("성공적으로 삭제되었습니다.");
      </script>');
            header("Location: index.php?pages=" . $page); //how to add php variable with the js script location.href??
            break;
        case 'logout':
            echo('<script type="text/javascript">
      alert("성공적으로 로그아웃 하였습니다.");
      location.href="index.php";
      </script>');
            break;
        default:
            # code...
            break;
    }
} else {
    echo('<script type="text/javascript">
    alert("실패 하였습니다.");
    location.href="index.php";
    </script>');
}
//}
//echo $result;
//echo "hi";
//echo $_SESSION['usrname'];
//echo mysqli_affected_rows();
//exit();
?>
