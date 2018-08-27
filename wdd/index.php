<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <title>Games Arena Search</title>
<style>
body{
	font-family:verdana;
}
</style>
<body>
<div class="container-fluid"> 
 <h2 style="text-align:center;color:#ff0000;"><i class="fas fa-gamepad"></i> Games Arena <i class="fas fa-gamepad"></i></h2>
</div><br><br>
<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="get-games.php" method="get" name="search-form">
          <fieldset>
            <legend class="text-center">Search Games</legend>
    
            <!-- Search input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="q">Search Text(optional)</label>
              <div class="col-md-9">
                <input id="q" name="q" type="text" placeholder="title" class="form-control">
              </div>
            </div>
			
			
            
			<!--filter-->
			
			<div class="form-group">
              <label class="col-md-3 control-label" for="filter">Platform</label>
              <div class="col-md-9">
			  <select class="form-control" id="filter" name="filter">
			 
<option value="playstation vita">Playstation Vita</option>
<option value="playstation">Playstation</option>   
   <option value="ipad">ipad</option>
    
    <option value="xbox 360">Xbox 360</option>
    <option value="playstation 3">Playstation 3</option>
	<option value="machintosh">Machintosh</option>
	<option value="pc">PC</option>
	<option value="iphone">iphone</option>
	<option value="nintendo ds">Nintendo DS</option>
	<option value="nintendo 3ds">Nintendo 3DS</option>
	<option value="nintendo 64">Nintendo 64</option>
	<option value="android">Android</option>
	<option value="wii">Wii</option>
	<option value="playstation 4">Playstation 4</option>
	<option value="wii u">Wii U</option>
	<option value="dreamcast">Dreamcast</option>
	<option value="game boy color">Game Boy Color</option>
	<option value="game boy">Game Boy</option>
  </select>
                 </div>
            </div>
			
			<!--score-->
			
			<div class="form-group">
              <label class="col-md-3 control-label" for="min">Score:minimum</label>
              <div class="col-md-9">
			  <select class="form-control" id="min" name="min">
			 
<option value="1">1</option>   
   <option value="2">2</option>
    
    <option value="3">3</option>
    <option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	  </select>
                 </div>
            </div>
			<div class="form-group">
              <label class="col-md-3 control-label" for="max">Score:maximum</label>
              <div class="col-md-9">
			  <select class="form-control" id="max" name="max">
<option value="10">10</option>   

			  <option value="9">9</option>
	<option value="8">8</option>
	<option value="7">7</option>
	<option value="6">6</option>
	<option value="5">5</option>
    <option value="4">4</option>
    <option value="3">3</option>
   <option value="2">2</option>
  
			 
    
	  </select>
                 </div>
            </div>
			
	
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary "><i class='fas fa-search'></i> Search</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>

<div class="container">
<h4 style="color:red;">Instructions to search:</h4>
<b>Search Text(optional):</b> Any word to search with game title.<br>
<b>Platform:</b> Select any platform to search game in tha category.<br>
<b>Score:Minimum:-</b> Minimum score of game.<br>
<b>Score:Maximum:-</b> Maximum score of game.<br>
</div>


</body>
</html>



















