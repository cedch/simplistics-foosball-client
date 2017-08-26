jQuery(document).ready(function($){
    var api_url = "http://localhost/simplistics-foosball/public/api/foosball/";

    function getRank() {
        var api_call = "players";
        $.ajax({
            url: api_url + api_call,
            success: function (data) {
               $('.list-players').find('tbody').html(buildRankTable(data));
            }
        });
    }

    function getListPlayers() {
        var api_call = "players";
        $.ajax({
            url: api_url + api_call,
            success: function (data) {
                $('.select-players').html(buildPlayersSelect(data));
            }
        });
    }

    function buildRankTable(list_players){
       var html = "";
       $(list_players).each(function(i){
          html+= "<tr>"+
                  "<td>"+(i+1)+"</td><td>"+this.name+"</td><td>"+this.points+"</td>"+
                  "</tr>";

       });
       return html;
    }

    function buildPlayersSelect(list_players){
        var html = "";
        $(list_players).each(function(i){
            html+= "<option value=\""+this.id+"\">"+
                    this.name
                "</option>";

        });
        return html;
    }


    getRank();
    getListPlayers();

    $('.submit-score').click(function(e){
        var api_call = "addScore";
        var data = {
           "score1": $('#inputScore1').val(),
            "score2":$('#inputScore2').val(),
            "player1":$('#inputPlayer1').val(),
            "player2":$('#inputPlayer2').val()
        }
        $.post( api_url + api_call, data, function( data ) {
            getRank();
        });

       e.preventDefault();
    });

});