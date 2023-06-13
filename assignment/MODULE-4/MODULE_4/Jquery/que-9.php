<!-- How We Can Implement Animation Effects In Jquery? -->
<!-- The required params parameter defines the CSS properties to be animated.

The optional speed parameter specifies the duration of the effect. It can take the following values: "slow", "fast", or milliseconds.

The optional callback parameter is a function to be executed after the animation completes.

The following example demonstrates a simple use of the animate() method; it moves a <div> element to the right, until it has reached a left property of 250px -->


EX:

$("button").click(function(){
  $("div").animate({left: '250px'});
});