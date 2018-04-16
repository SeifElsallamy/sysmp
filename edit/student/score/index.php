<!-- Rwan Al dagher -->
<!-- Edited By Seif Elsallamy -->
<!DOCTYPE html>
<html>
<head>
	
	<script src="../../../javascript/edit.js"></script>
    <script src="../../../javascript/options.js"></script>
	<link href="../bootstrap.min.css" rel="stylesheet">
	<style>
	
	
	
	.c{
	background-color:white;
	margin-top:25px;

	
	</style>
</head>
<body onload="op('courses','../../../json/courses.php','course_id','name');">
	<div class="container">
		<div class="row">
			
			
			<form action="javascript:getJson('../../../json/custom/scores.php'+'?year='+document.getElementById('year').value + '&course_id='+document.getElementById('course_id').value, 'score.php');" class="form-inline">
				<div class="col-md-4">
					<div class="form-group">
					<label for="exampleInputCourse">Course name </label>
					<select id="course_id" type="text" name="courses" class="form-control" id="exampleInputCourse" ></select>
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="form-group">
					<label for="exampleInputYear">Students starting Year </label>
					<input id="year" class="form-control" id="exampleInputYear" placeholder="Example : 2018">
					</div>
				</div>
				
				<div class="col-md-2">
				<button name="search" type="submit" class="btn btn-primary">Search Course</button>
				</div>
			
			</form>
			  
		</div>
				
				<div id="showData"></div>
				
				
			
		</div>
	</div>
</body>

</html>