<?php
extract($_POST);
include "../class/users.php";
$quiz=new users;
$qus=htmlentities($qus);
$option1=htmlentities($op1);
$option2=htmlentities($op2);
$option3=htmlentities($op3);
$option4=htmlentities($op4);
$array=[$option1,$option2,$option3,$option4];
$answer=array_search($ans,$array);
$query="INSERT INTO `questions` (`id`, `questions`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `cat_id`) VALUES (NULL, '$qus', '$option1', '$option2', '$option3', '$option4', '$answer', '$cat');";
if($quiz->add_quiz($query))
{
	$quiz->url("index.php?msg=run");
	echo '<script>alert("Insertion of data successfull")</script>';
}
?>