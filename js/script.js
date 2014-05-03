/*$(document).ready(function(){
	document.body.addEventListener('touchmove', function(e) {
      // This prevents native scrolling from happening.
      event.preventDefault()
    }, false);
	
});*/

window.addEventListener('load', function() {
    FastClick.attach(document.body);
}, false);


$(".film").click(function(){
  if (this.className == "film") {
    $(this).removeClass( "film" );
    $(this).addClass( "filmok" );
    console.log(this.className);

    $.ajax({ // ajax call starts
          url: 'php/functions.php', // JQuery loads serverside.php
          data: 'add=' + $(this).attr('id'), // Send value of the clicked button
          dataType: 'json', // Choosing a JSON datatype
          success: function(data) // Variable data contains the data we get from serverside
          {
              console.log(data);
          }
        });


  } else if (this.className == "filmok") {
    $(this).removeClass( "filmok" );
    $(this).addClass( "film" );
    console.log(this.className);
    $.ajax({ // ajax call starts
          url: 'php/functions.php', // JQuery loads serverside.php
          data: 'remove=' + $(this).attr('id'), // Send value of the clicked button
          dataType: 'json', // Choosing a JSON datatype
          success: function(data) // Variable data contains the data we get from serverside
          {
              console.log(data);
          }
        });
  } 
});

$(".filmok").click(function(){
  if (this.className == "film") {
    $(this).removeClass( "film" );
    $(this).addClass( "filmok" );
    console.log(this.className);

    $.ajax({ // ajax call starts
          url: 'php/functions.php', // JQuery loads serverside.php
          data: 'add=' + $(this).attr('id'), // Send value of the clicked button
          dataType: 'json', // Choosing a JSON datatype
          success: function(data) // Variable data contains the data we get from serverside
          {
              console.log(data);
          }
        });


  } else if (this.className == "filmok") {
    $(this).removeClass( "filmok" );
    $(this).addClass( "film" );
    console.log(this.className);
    $.ajax({ // ajax call starts
          url: 'php/functions.php', // JQuery loads serverside.php
          data: 'remove=' + $(this).attr('id'), // Send value of the clicked button
          dataType: 'json', // Choosing a JSON datatype
          success: function(data) // Variable data contains the data we get from serverside
          {
              console.log(data);
          }
        });
  } 
});