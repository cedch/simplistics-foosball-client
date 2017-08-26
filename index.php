<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Enter a new game</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form>
                                <div class="form-group">
                                    <label for="inputPlayer1">Player 1</label>
                                    <select class="form-control select-players" id="inputPlayer1">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputScore1">Score Player 1</label>
                                    <select class="form-control" id="inputScore1">
                                        <?php for($i=0;$i<11;$i++){ ?>
                                            <option value="<?=$i?>"><?=$i?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputPlayer2">Player 2</label>
                                    <select class="form-control select-players" id="inputPlayer2">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputScore2">Score Player 2</label>
                                    <select class="form-control" id="inputScore2">
                                        <?php for($i=0;$i<11;$i++){ ?>
                                            <option value="<?=$i?>"><?=$i?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-default submit-score">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Ranking</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table list-players">
                                <thead>
                                <tr>
                                    <th>Rank</th><th>Name</th><th>Points</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </footer>
</html>