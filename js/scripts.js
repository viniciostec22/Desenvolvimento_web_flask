$(document).ready(function(){
   
    //Progress bar 
    let containerA = document.getElementById("circleA");

    let circleA = new ProgressBar.Circle(containerA, {

        color:'#64DAF9',
        strokeWidth: 8,
        duration:1400,
        from:{color: '#AAA'},
        to: {color:'#65DAF9'},

        step: function(state, circle){
            circle.path.setAttribute('stroke',state.color)

            let value = Math.round(circle.value() * 60);

            circle.setText(value)
        }
    });

    circleA.animate(1.0);
});