<?php
$db = new SQLite3('school.sqlite3');
print_r($db->version());
$sql = "
        SELECT s.last_name, s.first_name,(round(avg(g.percent),1)||'%') AS average
            FROM students s,grades g
            WHERE s.student_id=g.student_id AND g.grade BETWEEN 9 AND 12
            GROUP BY s.first_name, s.last_name
            ORDER BY s.last_name, s.first_name
    ";
$query = $db->query($sql);
while($result = $query->fetchArray(SQLITE3_ASSOC)){
    print_r($result);
}
$db->close();
