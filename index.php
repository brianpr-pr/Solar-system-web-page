<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>Solar System</title>

		<link rel="stylesheet" href="./public/style/index.css"/>

    <script async src="https://unpkg.com/es-module-shims@1.6.3/dist/es-module-shims.js"></script>
    <script type="importmap">
      {
        "imports": {
          "three": "https://unpkg.com/three@v0.163.0/build/three.module.js",
          "three/addons/": "https://unpkg.com/three@v0.163.0/examples/jsm/"
        }
      }
    </script>
	</head>
  
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
      <div id="progress">Loading</div>
    </div>

    <div id="button">
      <img id="left" src="./public/media/rotate-left.png">
      <img id="right" src="./public/media/rotate-right.png">
    </div>
    
		<script type="module" src="./src/features/index/main.js"></script>
	</body>
</html>