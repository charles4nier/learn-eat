function slideSupport(learn, reduce, supporting) {
    learn.click(function (e) {
        e.preventDefault();
        learn.animate({opacity:0},function(){
        learn.text("Reduce")
            .animate({opacity:1});  
        });
        var hash = this.hash;
        if ( supporting.is( ":hidden" ) ) {
            supporting.slideDown( "slow" );
            $('html, body').animate ({
            scrollTop: $(this.hash).offset().top
          }, 1000, function(){
            window.location.hash = hash;
          });
           
        } else {
          e.preventDefault();
          learn.animate({opacity:0},function(){
          learn.text("Learn more")
            .animate({opacity:1});  
            });
            var hash = this.hash;
            $('html, body').animate ({
            scrollTop: $(this.hash).offset().top
            }, 500, function(){
            window.location.hash = hash;
          });
            supporting.slideUp("slow" ); 
      }
    });
    
    reduce.click(function (e) {
        e.preventDefault();
        learn.animate({opacity:0},function(){
        learn.text("Learn more")
            .animate({opacity:1});  
        });
        var hash = this.hash;
        $('html, body').animate ({
            scrollTop: $(this.hash).offset().top
            }, 500, function(){
            window.location.hash = hash;
          });
        supporting.slideUp("slow" ); 
    });
}


/* ----------- */

function scrollMenu (scroll) {
    var width = screen.width;
    scroll.on('click', function(e) {
        e.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
            scrollTop: $(this.hash).offset().top
            }, 1000, function(){
            window.location.hash = hash;
            });
        if(window.matchMedia("(max-width:800px)").matches){
            $('.button-menu').removeClass("change");
            $('.list-menu').slideUp('slow');   
            }
    });
}

/* ----------- */


function menuSmallDevice() {
    
        $('.button-menu').on('click', function (){
            this.classList.toggle("change");
            if($('.list-menu').is(':hidden')){
                $('.list-menu').slideDown('slow');
            } else {
                $('.list-menu').slideUp('slow');    
            } 
        }); 
         
}

/* ----------- */

function redimensionnement() {
  if("matchMedia" in window) { 
    var width = screen.width;
    if(window.matchMedia("(min-width:801px)").matches) {
        $('.list-menu').css({display:"flex"});
        $('.button-menu').removeClass("change");
        
    } else {
        $('.list-menu').css({display:"none"});
        $('.button-menu').removeClass("change");
        $('.list-menu').slideUp('slow');
    }
  }
}


/* ----------- */
 
var learn1 = $('.learn-more1 a');
var reduce1 = $('.reduce-1');
var supporting1 = $('.supporting-1bis');

var learn2 = $('.learn-more2 a');
var reduce2 = $('.reduce-2');
var supporting2 = $('.supporting-2bis');

var learn3 = $('.learn-more3 a');
var reduce3 = $('.reduce-3');
var supporting3 = $('.supporting-3bis');

slideSupport(learn1, reduce1, supporting1);
slideSupport(learn2, reduce2, supporting2);
slideSupport(learn3, reduce3, supporting3);


/* ----------- */

var scroll = $('.spyScroll a');

scrollMenu(scroll);

/* ----------- */

 menuSmallDevice();

/* ----------- */

window.addEventListener('resize', redimensionnement, false);
