<?php
require_once "../dbFunctions/dbconnection.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $club_name = $_POST['club_name'];
    $coach_email = $_POST['coach_email'];
    $teamName = $_POST['teamName'];
    $selected_student = $_POST['teams'];
     
    $conn = dbConnection();
   
    foreach ($selected_student as $sic){
        //Fetch student name
        $qry = "SELECT name FROM club_member WHERE sic = ?";
        $stmt =  $conn->prepare($qry);
        $stmt->bind_param("s",$sic);
        $stmt->execute();
        $res = $stmt->get_result();
        $result = $res->fetch_assoc();

        $student_name = $result['name'];

        //insert into match_teams table
        $insertQuery = "INSERT INTO match_teams (club_name, coach_email, team_name, student_sic, student_name) VALUES (?, ?, ?, ?, ?)";
        $insertStmt = $conn->prepare($insertQuery);
        $insertStmt->bind_param("sssss", $club_name, $coach_email, $teamName, $sic, $student_name);
        $insertStmt->execute();

    }
    echo "Team '$teamName' Created Successfully!";

}else{
    echo "Invalid Request";
}
?>