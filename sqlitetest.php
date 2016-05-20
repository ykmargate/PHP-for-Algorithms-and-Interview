<?php

$db = new SQLite3('school.sqlite3');


if(!$db){
    echo $db->lastErrorMsg();
} else {
    echo "Opened database successfully\n";
}
$db = new PDO('sqlite:school.sqlite3');
$sql = "
        SELECT s.last_name, s.first_name,(round(avg(g.percent),1)||'%') AS average
            FROM students s,grades g
            WHERE s.student_id=g.student_id AND g.grade BETWEEN 9 AND 12
            GROUP BY s.first_name, s.last_name
            ORDER BY s.last_name, s.first_name
    ";
$query = $db->query($sql);
$result = $query->fetchAll($db::FETCH_ASSOC);
print_r($result);



