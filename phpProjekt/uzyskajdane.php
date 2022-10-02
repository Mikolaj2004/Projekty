<?php
$list;
    $sql = "SELECT * FROM users WHERE usersUid = '".$login."'";
    if ($list = mysqli_query($conn, $sql)) {
        while($row = mysqli_fetch_assoc($list)){
            $userName = $row['usersName'];
            $userSurname = $row['usersSurname'];
            $userBirthday = $row['birthday'];
            $userEmail = $row['usersEmail'];
            $numPatent = $row['numPatent'];
        
        }
        return $userName;
        return $userSurname;
        return $userBirthday;
        return $userEmail;
        return $numPatent;
    }
    else{
        header("location: dane.php?error=userdaneE");   ///ERROR HANDLER
    }
?>