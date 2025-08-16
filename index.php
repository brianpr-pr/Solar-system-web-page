<!DOCTYPE html>
<html lang="en">
	<head></head>
  
	<body id="body">
    <header id="header">
      <div id="heading">
        <h2 class="h2-heading"><a class="a-heading" href="">Home</a></h2>
        <h2 class="h2-heading"><a class="a-heading" href="">Articles</a></h2>
        <h2 class="h2-heading"><a class="a-heading" href="">Register</a></h2>
        <h2 class="h2-heading"><a class="a-heading" href="">Sign in</a></h2>
        <h2 class="h2-heading"><a class="a-heading" href="">Account</a></h2>
      </div>
      <div class="border"></div>
    </header>
    
    <div id="scene">
      <canvas id="canvas"></canvas>
    </div>

    <div id="progress-container">
      <div id="progress">Loading planet</div>
    </div>

    <div id="button">
      <img id="left" src="./public/media/rotate-left.png">
      <img id="right" src="./public/media/rotate-right.png">
    </div>
    
		<script type="module" src="./src/features/index/main.js"></script>
	</body>
</html>