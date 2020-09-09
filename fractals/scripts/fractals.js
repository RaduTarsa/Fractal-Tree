var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");

function redraw(color, startX, startY, len, lenRatio, branchWidth, branchWidthRatio, minBranchLength, angle, branchAngle, hasLeaves, random, randomChance) {
  ctx.clearRect(0, 0, c.width, c.height);

  // background color
  ctx.rect(0, 0, c.width, c.height);
  ctx.fillStyle = color;
  ctx.fill();

  draw(startX, startY, len, lenRatio, branchWidth, branchWidthRatio, minBranchLength, angle, branchAngle, hasLeaves, random, randomChance);
}

function draw(startX, startY, len, lenRatio, branchWidth, branchWidthRatio, minBranchLength, angle, branchAngle, hasLeaves, random, randomChance) {
  var randomValue = 1;

  if(random) {
    randomValue = Math.floor(Math.random() * randomChance);
  }

  if(randomValue > 0) {
    ctx.beginPath();
    ctx.save();

    ctx.shadowBlur = 10;
    ctx.shadowColor = "rgba(0,0,0,0.5)";

    ctx.strokeStyle = "saddlebrown";
    ctx.fillStyle = "saddlebrown";
    ctx.lineWidth = branchWidth;
    ctx.translate(startX, startY);
    ctx.rotate(angle * Math.PI/180);
    ctx.moveTo(0, 0);
    ctx.lineTo(0, -len);
    ctx.stroke();

    if(len < minBranchLength) {
      if(hasLeaves) {
        ctx.strokeStyle = "darkgreen";
        ctx.fillStyle = "green";
        ctx.beginPath();
        ctx.arc(0, -len, 10, 0, Math.PI/2);
        ctx.fill();
      }

      ctx.restore();
      return;
    }

    draw(0, -len, len*lenRatio, lenRatio, branchWidth*branchWidthRatio, branchWidthRatio, minBranchLength, -branchAngle, branchAngle, hasLeaves, random, randomChance);
    draw(0, -len, len*lenRatio, lenRatio, branchWidth*branchWidthRatio, branchWidthRatio, minBranchLength, branchAngle, branchAngle, hasLeaves, random, randomChance);

    ctx.restore();
  }
}
