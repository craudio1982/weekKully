<?
    // CORS 보내는 주소 받는 주소가 다른 경우 오류
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");

    $DB_SERVER = 'localhost';
    $DB_USER_NAME = 'saturn2846';
    $DB_USER_PW = 'zmffkdnem2846!';
    $DB_NAME = 'saturn2846';

    $conn = mysqli_connect($DB_SERVER, $DB_USER_NAME, $DB_USER_PW, $DB_NAME);
    mysqli_set_charset($conn, 'utf8');

    // 회원가입폼 리액트 전송 받은 데이터 입력
    // 변수 = 값 
    $userId = $_POST['userId'];
    $userPw = $_POST['userPw'];
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userHp = $_POST['userHp'];
    $userPostcode = $_POST['userPostcode'];
    $userAddr1 = $_POST['userAddr1'];
    $userAddr2 = $_POST['userAddr2'];
    $userGender = $_POST['userGender'];
    $userYear = $_POST['userYear'];
    $userMonth = $_POST['userMonth'];
    $userDate = $_POST['userDate'];
    $userChooga = $_POST['userChooga'];
    $userChamyeoEvent = $_POST['userChamyeoEvent'];
    $userChoochuninId = $_POST['userChoochuninId'];
    $userService = $_POST['userService'];

    // SQL 
    $sql = "INSERT INTO week3_signUp_table(userId, userPw, userName, userEmail, userHp, userPostcode, userAddr1, userAddr2, userGender, userYear, userMonth, userDate, userChooga, userChamyeoEvent, userChoochuninId, userService)
                VALUES('$userId', '$userPw', '$userName', '$userEmail', '$userHp', '$userPostcode', '$userAddr1', '$userAddr2', '$userGender', '$userYear', '$userMonth', '$userDate', '$userChooga', '$userChamyeoEvent', '$userChoochuninId', '$userService')";
    $result = mysqli_query($conn, $sql);

    if($result == true)  {
        echo "데이터 베이스 테이블에 데이터 저장 되었습니다.";
    } else {
        echo "데이터 베이스 테이블에 데이터 저장이 실패 되었습니다. 데이터를 확인하고 다시 시도해 주세요.";
    }

?>