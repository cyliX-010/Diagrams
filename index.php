<!DOCTYPE html>
<html>
<head>
	
</head>
	<body>
		<div class = 'base' style = 'position:absolute; top:0px; left: 0px; height:100%; width:100%; background-color: gray;'>
			<div class = "header" style = 'position:absolute;top:0px; left:0px; height:70px; width: 100%; background-color: red;'>
				<label id = "text" style = "position: absolute;top: 20px; left:550px;text-align: center; font-size: 20px;">USE CASE DIAGRAM</label>
				<label id = "text1" style = "position: absolute;top: 20px; left:550px;text-align: center; font-size: 20px; display: none;">CLASS DIAGRAM</label>
			</div>
			<div class = "imageBase" style="position:absolute; top: 90px; left: 170px; height:550px; width: 1000px;">
				<img src="usecase.png" width="100%" height="100%">
			</div>
		<a id = "prev" href="" style="position:absolute; height:50px; left:30px; width: 150px; bottom: 20px; background-color: white; text-decoration:none; font-size:10px;color: black; text-indent:5%; ">Previous Photo</a>
		<a id = "next" href="" style="position:absolute; height:50px; right:30px; width: 150px; bottom: 20px; background-color: white; text-decoration:none; font-size:10px;color: black; text-indent:5%; ">Next Photo</a>
		</div>
	</body>
</html>
<script>
	$("#next").click(function(){
		document.getElementById(text).style.display="none";
		document.getElementById(text1).style.display="display";
		
	});
	
</script>
