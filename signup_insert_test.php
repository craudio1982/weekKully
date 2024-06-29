<?

    $DB_SERVER = 'localhost';
    $DB_USER_NAME = 'saturn2846';
    $DB_USER_PW = 'zmffkdnem2846!';
    $DB_NAME = 'saturn2846';

    $conn = mysqli_connect($DB_SERVER, $DB_USER_NAME, $DB_USER_PW, $DB_NAME);
    mysqli_set_charset($conn, 'utf8');

    // 회원가입 데이터 입력(더미데이타)
    // 변수 = 값 
    $userId = "saturn2846";
    $userPw = "s123456789g";
    $userName = "이순신";
    $userEmail = "idid@naver.com";
    $userHp = "01012345678";
    $userPostcode = "05242";
    $userAddr1 = "서울시 서울구 서울동";
    $userAddr2 = "서울빌딩 111호";
    $userGender = "남자";
    $userYear = "2020";
    $userMonth = "10";
    $userDate = "05";
    $userChooga = "친구 추천인아이디";
    $userChamyeoEvent = "";
    $userChoochuninId = "smoeo";
    $userService = "이용약관 동의, 개인정보 수집∙이용 동의, 본인은 만 14세 이상입니다.";

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