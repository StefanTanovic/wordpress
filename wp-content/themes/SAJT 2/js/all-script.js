// JavaScript Document

$(document).ready(function(){

    var deg=0;

    /* Storing all the images into a variable */

    var images	= $('#stage img').removeClass('default').addClass('animationReady');
    var dim		= { width:images.width(),height:images.height()};

    var cnt = images.length;

    /* Finding the centers of the animation container: */
    var centerX = $('#stage').width()/2;
    var centerY = $('#stage').height()/2 - dim.height/2;

    function rotate(step,total){
        // This function will loop through all the phone images, and rotate them
        // with "step" degrees (10 in this implementation) till total > 0

        /* Increment the degrees: */
        deg+=step;

        var eSin,eCos,newWidth,newHeight,q;

        /* Loop through all the images: */
        for(var i=0;i<cnt;i++){

            /* Calculate the sine and cosine for the i-th image */

            q = ((360/cnt)*i+deg)*Math.PI/180;
            eSin		= Math.sin(q);
            eCos		= Math.cos(q);

            /*
            /	With the sine value, we can calculate the vertical movement,
            /	and the cosine will give us the horizontal movement.
            */

            q = (0.6+eSin*0.4);
            newWidth	= q*dim.width;
            newHeight	= q*dim.height;

            /*
            /	We are using the calculated sine value (which is in the range
            /	of -1 to 1) to calculate the opacity and z-index. The
 			/	frontmost image has a sine value of 1, while the backmost
            /	one has a sine value of -1.
            */

            // eq() extracts the image at the i-th position:

            images.eq(i).css({
                top			: centerY+15*eSin,
                left		: centerX+200*eCos,
                opacity		: 0.8+eSin*0.2,
                marginLeft	: -newWidth/2,
                zIndex		: Math.round(80+eSin*20)
            }).width(newWidth).height(newHeight);
        }

        total-=Math.abs(step);
        if(total<=0) return false;

        // Setting the function to be run again in 40 milliseconds (equals to 25 frames per second):
        setTimeout(function(){rotate(step,total)},40);

    }

    // Running the animation once at load time (and moving the iPhone into view):
    rotate(10,360/cnt);

    $('#carousel .levo').click(function(){
        // 360/cnt lets us distribute the phones evenly in a circle
        rotate(-10,360/cnt);
    });

    $('#carousel .desno').click(function(){
        rotate(10,360/cnt);
    });
});

$(document).ready(function() {
    //rotation speed and timer
    var speed = 6000;
    var run = setInterval('rotate()', speed);    
    
    //grab the width and calculate left value
    var item_width = $('#text-box li').outerWidth(); 
    var left_value = item_width * (-1); 
        
    //move the last item before first item, just in case user click prev button
    $('#text-box li:first').before($('#text-box li:last'));
    
    //set the default item to the correct position 
    $('#text-box ul').css({'left' : left_value});
    //if user clicked on prev button
    $('#carousel .levo').click(function() {
        //get the right position            
        var left_indent = parseInt($('#text-box ul').css('left')) + item_width;
        //slide the item            
        $('#text-box ul').animate({'left' : left_indent}, 200,function(){    
            //move the last item and put it as first item                
            $('#text-box li:first').before($('#text-box li:last'));           
            //set the default item to correct position
            $('#text-box ul').css({'left' : left_value});
        
        });
        //cancel the link behavior            
        return false;
            
    });
    //if user clicked on next button
    $('#carousel .desno').click(function() {
        
        //get the right position
        var left_indent = parseInt($('#text-box ul').css('left')) - item_width;
        
        //slide the item
        $('#text-box ul').animate({'left' : left_indent}, 200, function () {
            
            //move the first item and put it as last item
            $('#text-box li:last').after($('#text-box li:first'));                     
            
            //set the default item to correct position
            $('#text-box ul').css({'left' : left_value});
        
        });
                 
        //cancel the link behavior
        return false;
        
    });        
    

   
        
});
  $(function() {
        $(window).scroll(function() {
	if ($(this).scrollTop() > 650) {
						$('.bars').slideDown(2000);
						$('.bars p').fadeIn(3000);
            animate(".box-a", 'tada');
            return false;
	}
        });
    });
    
    function animate(element_ID, animation) {
        $(element_ID).addClass(animation);
        var wait = window.setTimeout( function(){
            $(element_ID).removeClass(animation)}, 1300
        );
    }

$(function () {
 
$('a[href^="#"]').click(function(event) {
var id = $(this).attr("href");
var offset = 20;
var target = $(id).offset().top - offset;
 
$('html, body').animate({scrollTop:target}, 1000);
event.preventDefault();
});
 
});

$(function () {
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('#up').fadeIn();
		} else {
			$('#up').fadeOut();
		}
	});
});
