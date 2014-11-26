$(document).ready(function(){
    //contact form
    $('form').submit(function(e){
        var thisForm = $(this);
        //Prevent the default form action
        e.preventDefault();
        //Hide the form
        $(this).fadeOut(function(){
        //Display the "loading" message
        $("#loading").fadeIn(function(){
        //Post the form to the send script
        $.ajax({
          type: 'POST',
          url: thisForm.attr("action"),
          data: thisForm.serialize(),
          //Wait for a successful response
          success: function(data){
            //Hide the "loading" message
            $("#loading").fadeOut(function(){
              //Display the "success" message
              $("#success").text(data).fadeIn();
            });
          }
        });
      });
    });
  });

    
    //canvas
    // var context = canvas.getContext('2d');
    // var ctx = document.getCSSCanvasContent('2d', 'animation', 1244, 683);
    var ctx;

    if(!document.getCSSCanvasContext){
        if (navigator.appName === 'Microsoft Internet Explorer'){
            var imageUrl = '../img/bg.png';
            $('#container-header').css('background-image', 'url(' + imageUrl + ')');
        }else{
            var canvas = document.createElement("canvas");
            canvas.setAttribute("width", 1244);
            canvas.setAttribute("height", 712);
            ctx = canvas.getContext('2d');
        
            document.mozSetImageElement("bgcanvas", canvas);
        }
    }else{
        ctx = document.getCSSCanvasContext("2d", "animation", 1244, 712);
    }
    //console.log(document.getCSSCanvasContext("2d", "animation", 1244, 712));
    /****************
    interesting pairs:
    (229,0,229)-(0,14,255)
    (162,255,0)-(192,195,185)
    ****************/
    //parameters defining the circle effect
    var radius = 550, lnWidth=50, tr=0.4;
    var centerX = 450, centerY=530;
    var orR=229, 
    orG=0, 
    orB=229,
    desR=0, 
    desG=114, 
    desB=255;

    function Color(r, g, b){
    this.rd=r;
    this.gn=g;
    this.bl=b;
    this.getColor = function(){
    return {
        rd: this.rd,
        gn: this.gn,
        bl: this.bl
    };
    };
    this.setColor = function(r, g, b){
    this.rd = r;
    this.gn = g;
    this.bl = b;
    };          
    };

    //initiate the colors
    var colorRadius = new Color(orR,orG,orB);
    var colorSquare = new Color(orR,orG,orB);

    function toDegree(angle){
    return angle*Math.PI/180;
    }

    function isEven(x){
    return (0 === x%2);
    }

    function drawLine(originX, originY, desX, desY, trans, color){
    ctx.beginPath();
    ctx.moveTo(originX, originY);
    ctx.lineTo(desX, desY);
    ctx.strokeStyle = 'rgba('+(color.rd)+','+(color.gn)+','+(color.bl)+','+trans+')';
    ctx.lineWidth = lnWidth;
    ctx.stroke();
    }
    function drawRadius(){
    function drawHelper(px, py, count, color){
    setTimeout(function(){
        drawLine(centerX, centerY, px, py, 0.2, color);
    }, 60*(count+1));
    }
    var px, py, count;
    for(count=0;count<24;count++){
    px = centerX + radius * Math.cos(toDegree(15*count));
    py = centerY + radius * Math.sin(toDegree(15*count));
    colorRadius.setColor(parseInt(orR*(0.04*count)+desR*(1-0.04*count)),
                         parseInt(orG*(0.04*count)+desG*(1-0.04*count)),
                         parseInt(orB*(0.04*count)+desB*(1-0.04*count)));
    drawHelper(px, py, count, colorRadius.getColor());
    }
    }

    function drawSquare(){
    function drawHelper(oX, oY, dX, dY, count, color){
            setTimeout(function(){
            drawLine (oX, oY, dX, dY, tr, color);
        }, 80*(count+1));
    }
    var ang = 0, count, oX, oY, dX, dY;
    for(count=0; count<24; count++){
    ang = count*15;
    oX = centerX + radius * Math.cos(toDegree(ang));
    oY = centerY + radius * Math.sin(toDegree(ang));
    dX = centerX + radius * Math.cos(toDegree(ang+90));
    dY = centerY + radius * Math.sin(toDegree(ang+90));
    colorSquare.setColor(parseInt(orR*(0.05*count)+desR*(1-0.05*count)),
                         parseInt(orG*(0.05*count)+desG*(1-0.05*count)),
                         parseInt(orB*(0.05*count)+desB*(1-0.05*count)));
    drawHelper(oX, oY, dX, dY, count, colorSquare.getColor());
    // drawLine (oX1, oY1, dX1, dY1);
    // drawLine (oX2, oY2, dX2, dY2);
    }
    }
    drawRadius();
    drawSquare();  
    setTimeout(function(){
        $("#masthead span").show(); }, 900);
    //end of canvas



	$("#menu a").click(function(){
		$("#toggle-nav").attr("checked", false);
        // $("#menu .box").hide();    //or $("#menu").slideUp() if you want it to slide up instead of just disappearing.
    });
    $('.bxslider').bxSlider();

});
$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 200) {
        $("#vertical-menu").fadeIn();
    } else {
        $("#vertical-menu").fadeOut();
    }
});
