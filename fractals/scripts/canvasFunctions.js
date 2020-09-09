function setDimensions(width, height) {
  var canvas = document.getElementById("myCanvas");
  canvas.width = width;
  canvas.height = height;
}

function saveImage(){
    var download = document.getElementById("download");
    var image = document.getElementById("myCanvas").toDataURL("image/png").replace("image/png", "image/octet-stream");
    download.setAttribute("href", image);
  }
