<!DOCTYPE html>
 <html>
 <head>
 <title>Search Results</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="preloader.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  div.polaroid {
  margin:10px;
  margin-top:10px;
  padding-top:15px;
  border:1px solid green;
  border-radius:10px;
  margin-bottom:20px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}
body{
	font-family:verdana;
}

img {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 150px;
}
  </style>
  </head>
  <body onload="load()">
  <div class="container-fluid"> 
 <h2 style="text-align:center;color:#ff0000;"><i class="fas fa-gamepad"></i> Games Arena <i class="fas fa-gamepad"></i></h2>
<div style="text-align:center;">
  <a  href='index.php'><button type='button' style='margin-top:10px;text-align:center;' class='btn btn-success'><span style='font-size:;'><i class='fas fa-search'></i></span> Search another game </button></a>
<br><br>
  </div>
  <!--Loader -->
  <div id="loader" style="">
  <?php include 'preloader.php'; ?>
  <h5 class="text-center"><i><b>fetching...</b></i></h5><br><br>
</div>
  <script>

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("demo").style.display = "block";
}
function load(){
	myVar = setTimeout(showPage, 3000);
	
}
</script>
  
  <div id="demo" style="display:none;">
  
<?php 

$page="http://starlord.hackerearth.com/gamesext";
$data = (file_get_contents($page));
$json = json_decode($data, true);
$count=0;
foreach($json as $game){
	if(($_GET['q']!="")){
	$a = $_GET['q'];

if (substr_count($game['title'], $a) > 0) {
    
$platform = $_GET['filter'];
if(strtolower($game['platform'])==$platform && $game['score']>=$_GET['min'] && $game['score']<=$_GET['max']){
//echo "Title: ".$game['title']."<br>";
echo "<div class='row text-center'>
  <div class='col-sm-4'></div>
  <div class='col-sm-4 polaroid'>";
echo "<b>Title:</b> ".$game['title']."<br>";
echo "<b>Platform:</b> ".$game['platform']."<br>";
echo "<b>Score:</b> ".$game['score']."<br>";
echo "<b>Genre:</b> ".$game['genre']."<br>";
echo "<b>Editors Choice:</b> ".$game['editors_choice']."<br>";
echo "<b>Release Year:</b> ".$game['release_year']."<br>";
$count++;



echo "
<br><br></div>
<div class='col-sm-4'></div>
</div>


";
}
}
	}
	
	else{
		$platform = $_GET['filter'];
if(strtolower($game['platform'])==$platform && $game['score']>=$_GET['min'] && $game['score']<=$_GET['max']){

		echo "<div class='row text-center'>
  <div class='col-sm-4'></div>
  <div class='col-sm-4 polaroid'>";
echo "<b>Title:</b> ".$game['title']."<br>";
echo "<b>Platform:</b> ".$game['platform']."<br>";
echo "<b>Score:</b> ".$game['score']."<br>";
echo "<b>Genre:</b> ".$game['genre']."<br>";
echo "<b>Editors Choice:</b> ".$game['editors_choice']."<br>";
echo "<b>Release Year:</b> ".$game['release_year']."<br>";

$count++;

echo "
<br><br></div>
<div class='col-sm-4'></div>
</div>


";
	}
	}	
}
?>
<?php 

if($count<1){
	echo "<center>No games found.. Search with different combinations</center>";
	
}
?>
</div>

</body>
</html>