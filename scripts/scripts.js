$( document ).ready(function() {
    $(".game-button").click(function(){
        $(".game-button").off();
        let thisButton = $(this);
        let choice = $(this).attr("id");
        $(".game-button").each(function(){
            if( $(this).attr("id") != choice){
                $(this).addClass("hidden-element");
            }       
        });
        thisButton.addClass("btn-success").removeClass("btn-outline-success");

        $.ajax({
            url: "./app/Application.php",
            data: {
                choice: choice
            },
            type: "GET",
            error: function() {
            $('#info').html('<p>An error has occurred</p>');
            },
            success: function(data) {
                console.log(JSON.parse(data));
                let result = JSON.parse(data);
                console.log("winner " + result.final_result);
                console.log("choice B " + result.choiceB);
                $("#reset").removeClass("hidden-element").click(function() {
                    window.location.reload(true);
                });
                $(".ai-button").each(function(){
                    if( $(this).attr("id") == result.choiceB){
                        $(this).removeClass("hidden-element");
                    }
                });
                if(result.final_result == "tie"){
                    $("#winner-text").html("there is a tie!");
                }
                else{
                    $("#winner-text").html("the winner is player " + result.final_result);
                }

            },
        });
    });
});