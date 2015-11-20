// JavaScript Document
$(document).ready(function(e) {
 var _URL = window.URL || window.webkitURL;

$("#s1_img").change(function(e) {
   
    var image, file;

    if ((file = this.files[0])) {
       
        image = new Image();
        
        image.onload = function() {
            
            
            if(this.width>29 && this.height>29 )
            {
				 alert('FILE DIMENSION MUST BE WITHIN 29px*29px');
                $("#s1_img").val('');
            }
            else{
                //alert("The image width is " +this.width + " and image height is " + this.height);
            }
        };
    
        image.src = _URL.createObjectURL(file);


    }

});
$("#s2_img").change(function(e) {
   
    var image, file;

    if ((file = this.files[0])) {
       
        image = new Image();
        
        image.onload = function() {
            
            
            if(this.width>29 && this.height>29 )
            {
				 alert('FILE DIMENSION MUST BE WITHIN 29px*29px');
                $("#s2_img").val('');
            }
            else{
                //alert("The image width is " +this.width + " and image height is " + this.height);
            }
        };
    
        image.src = _URL.createObjectURL(file);


    }

});
$("#s3_img").change(function(e) {
   
    var image, file;

    if ((file = this.files[0])) {
       
        image = new Image();
        
        image.onload = function() {
            
            
            if(this.width>29 && this.height>29 )
            {
				 alert('FILE DIMENSION MUST BE WITHIN 29px*29px');
                $("#s3_img").val('');
            }
            else{
                //alert("The image width is " +this.width + " and image height is " + this.height);
            }
        };
    
        image.src = _URL.createObjectURL(file);


    }

});
$("#s4_img").change(function(e) {
   
    var image, file;

    if ((file = this.files[0])) {
       
        image = new Image();
        
        image.onload = function() {
            
            
            if(this.width>29 && this.height>29 )
            {
				 alert('FILE DIMENSION MUST BE WITHIN 29px*29px');
                $("#s4_img").val('');
            }
            else{
                //alert("The image width is " +this.width + " and image height is " + this.height);
            }
        };
    
        image.src = _URL.createObjectURL(file);


    }

});

//



$("#mem_pic1").change(function(e) {
   
    var image, file;

    if ((file = this.files[0])) {
       
        image = new Image();
        
        image.onload = function() {
            
            
            if(this.width>162 && this.height>162 )
            {
				 alert('FILE DIMENSION MUST BE WITHIN 162px*162px');
                $("#mem_pic1").val('');
            }
            else{
                //alert("The image width is " +this.width + " and image height is " + this.height);
            }
        };
    
        image.src = _URL.createObjectURL(file);


    }

});

//
$("#mem_img").change(function(e) {
   
    var image, file;

    if ((file = this.files[0])) {
       
        image = new Image();
        
        image.onload = function() {
            
            
            if(this.width>162 && this.height>162 )
            {
				 alert('FILE DIMENSION MUST BE WITHIN 162px*162px');
                $("#mem_img").val('');
            }
            else{
                //alert("The image width is " +this.width + " and image height is " + this.height);
            }
        };
    
        image.src = _URL.createObjectURL(file);


    }

});
//service picture//


//service picture//

   
	   
	   var _URL = window.URL || window.webkitURL;
	   
	   //service picture//

$("#serv_pic123").change(function(e) {
   //alert('dfd');
    var image, file;

    if ((file = this.files[0])) {
       
        image = new Image();
        
        image.onload = function() {
            
            
            if(this.width>162 && this.height>162 )
            {
				 alert('FILE DIMENSION MUST BE WITHIN 162px*162px');
                $("#serv_pic123").val('');
            }
            else{
                //alert("The image width is " +this.width + " and image height is " + this.height);
            }
        };
    
        image.src = _URL.createObjectURL(file);


    }

});

//service picture end//


//logo picture//

$("#logo_pic").change(function(e) {
   //alert('dfd');
    var image, file;

    if ((file = this.files[0])) {
       
        image = new Image();
        
        image.onload = function() {
            
            
            if(this.width>148 && this.height>55 )
            {
				 alert('FILE DIMENSION MUST BE WITHIN 148px*55px');
                $("#logo_pic").val('');
            }
            else{
                //alert("The image width is " +this.width + " and image height is " + this.height);
            }
        };
    
        image.src = _URL.createObjectURL(file);


    }

});


//logo picture//

//portfolio picture//
$("#port_img").change(function(e) {
   //alert('dfd');
    var image, file;

    if ((file = this.files[0])) {
       
        image = new Image();
        
        image.onload = function() {
            
            
            if(this.width>221 && this.height>221 )
            {
				 alert('FILE DIMENSION MUST BE WITHIN 221px*221px');
                $("#port_img").val('');
            }
            else{
                //alert("The image width is " +this.width + " and image height is " + this.height);
            }
        };
    
        image.src = _URL.createObjectURL(file);


    }

});

//portfolio picture end//

//event picture//
$("#event_pic").change(function(e) {
   //alert('dfd');
    var image, file;

    if ((file = this.files[0])) {
       
        image = new Image();
        
        image.onload = function() {
            
            
            if(this.width>162 && this.height>162 )
            {
				 alert('FILE DIMENSION MUST BE WITHIN 162 px * 162 px');
                $("#event_pic").val('');
            }
            else{
                //alert("The image width is " +this.width + " and image height is " + this.height);
            }
        };
    
        image.src = _URL.createObjectURL(file);


    }

});


//event picture end//


//gallery category image//

$("#propic").change(function(e) {
   //alert('dfd');
    var image, file;

    if ((file = this.files[0])) {
       
        image = new Image();
        
        image.onload = function() {
            
            
            if(this.width>162 && this.height>162 )
            {
				 alert('FILE DIMENSION MUST BE WITHIN 162 px * 162 px');
                $("#propic").val('');
            }
            else{
                //alert("The image width is " +this.width + " and image height is " + this.height);
            }
        };
    
        image.src = _URL.createObjectURL(file);


    }

});

//gallery category image end//

//gallery main image//
$("#gallery_img").change(function(e) {
   //alert('dfd');
    var image, file;

    if ((file = this.files[0])) {
       
        image = new Image();
        
        image.onload = function() {
            
            
            if(this.width>700 && this.height>700 )
            {
				 alert('FILE DIMENSION MUST BE WITHIN 700 px * 700 px');
                $("#gallery_img").val('');
            }
            else{
                //alert("The image width is " +this.width + " and image height is " + this.height);
            }
        };
    
        image.src = _URL.createObjectURL(file);


    }

});

//gallery main image//

//social link//
$("#social_icon1").change(function(e) {
   //alert('dfd');
    var image, file;

    if ((file = this.files[0])) {
       
        image = new Image();
        
        image.onload = function() {
            
            
            if(this.width>14 && this.height>14 )
            {
				 alert('FILE DIMENSION MUST BE WITHIN 14 px * 14 px');
                $("#social_icon1").val('');
            }
            else{
                //alert("The image width is " +this.width + " and image height is " + this.height);
            }
        };
    
        image.src = _URL.createObjectURL(file);


    }

});


//social link//
});
   
   