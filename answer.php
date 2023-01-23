<?php
include("class/users.php");
$ans=new users;
$answer=$ans->answer($_POST);
?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>answer</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
</head>
<body>
    <center>
	<?php
	$total_qus=$answer['right']+$answer['wrong']+$answer['no attempt'];
	$attempt_qus=$answer['right']+$answer['wrong'];
	?>
	<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
	<h2>Your QUIZ results</h2>                       
  <table class="table table-bordered">
      <tr>
        <td>Total no.of.questions</td>
        <td><?php echo $total_qus;?></td>
      </tr>
      <tr>
        <td>Attempted questions</td>
        <td><?php echo $attempt_qus;?></td>
      </tr>
      <tr>
        <td>Right answer</td>
        <td><?php echo $answer['right'];?></td>
      </tr>
      <tr>
        <td>Wrong answer</td>
        <td><?php echo $answer['wrong'];?></td>
      </tr>
	  <tr>
        <td>Not attempted questions</td>
        <td><?php echo $answer['no attempt']?></td>
      </tr>
	  <tr>
        <td>Total score</td>
        <td><?php 
		$per=($answer['right']*100)/$total_qus;
        echo $per."%";
		?></td>
      </tr>
    </tbody>
  </table>
</div>
<div class="col-sm-2">
</div>

	</center>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>