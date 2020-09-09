<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="index.css">
  <title>Fractals</title>
</head>
<body>

  <div class="container">
    <div class="controls">
      <h3>Canvas properties:</h3>
      <p>Width:
      <input type="number" name="a" id="a" value="1000" onfocus="this.oldvalue = this.value;"></p>
      <p>Height:
      <input type="number" name="b" id="b" value="600" onfocus="this.oldvalue = this.value;"></p>
      <button onclick="setDimensions(document.getElementById('a').value,document.getElementById('b').value)">Resize</button><hr>
      <a id="download" download="image.png"><button type="button" onClick="saveImage()">Save Image</button></a><hr>

      <h3>Drawing properties:</h3>
      <p>Background Color:
      <input type="text" name="bg" id="bg" value="transparent" onfocus="this.oldvalue = this.value;"></p>
      <p>Starting Width:
      <input type="number" name="w" id="w" value="500" onfocus="this.oldvalue = this.value;"></p>
      <p>Starting Height:
      <input type="number" name="h" id="h" value="600" onfocus="this.oldvalue = this.value;"></p>
      <p>Root Length:
      <input type="number" name="l" id="l" value="120" onfocus="this.oldvalue = this.value;"></p>
      <p>Length Ratio:
      <input type="number" name="lr" id="lr" value="0.8" onfocus="this.oldvalue = this.value;"></p>
      <p>Branch Width:
      <input type="number" name="bw" id="bw" value="10" onfocus="this.oldvalue = this.value;"></p>
      <p>Branch Shrinking Ratio:
      <input type="number" name="bs" id="bs" value="0.8" onfocus="this.oldvalue = this.value;"></p>
      <p>Leaf branch size:
      <input type="number" name="bl" id="bl" value="10" onfocus="this.oldvalue = this.value;"></p>
      <p>Starting Angle:
      <input type="number" name="sa" id="sa" value="0" onfocus="this.oldvalue = this.value;"></p>
      <p>Branches Angle:
      <input type="number" name="ba" id="ba" value="25" onfocus="this.oldvalue = this.value;"></p>
      <p>Has Leaves:
      <input type="checkbox" name="hl" id="hl" onfocus="this.oldvalue = this.value;" checked></p>
      <p>Is random:
      <input type="checkbox" name="rt" id="rt" onfocus="this.oldvalue = this.value;"></p>
      <p>Random Chance:
      <input type="number" name="rc" id="rc" value="10" onfocus="this.oldvalue = this.value;"></p>
      <button onclick="redraw(document.getElementById('bg').value, document.getElementById('w').value, document.getElementById('h').value,
      document.getElementById('l').value, document.getElementById('lr').value, document.getElementById('bw').value, document.getElementById('bs').value,
       document.getElementById('bl').value, document.getElementById('sa').value, document.getElementById('ba').value,
       document.getElementById('hl').checked, document.getElementById('rt').checked, document.getElementById('rc').value)">Draw</button>
    </div>

    <div class="canvas-design">
      <canvas id="myCanvas" width="1000" height="600" style="border:1px solid #d3d3d3;">
        Your browser does not support the HTML canvas tag.
      </canvas>
    </div>
  </div>

<script src="scripts/fractals.js" charset="utf-8"></script>
<script src="scripts/canvasFunctions.js" charset="utf-8"></script>

</body>
</html>
