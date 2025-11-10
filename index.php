<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<style>
    .cella {
        height: 3vw;
        width: 3vw;
        background-repeat: no-repeat;
        background-size: cover;
        text-align: center;
        justify-content: center;
    }

    #customAlert {
        margin-left: 33.5%;
        top: 33.5%;
        position: fixed;
        z-index: 1000;
        display: none;
    }

    body {
        overflow: hidden;
    }

    .lbeventfield {
        overflow-y: scroll;
        max-height: 80vh;
    }
</style>

<body data-bs-theme="dark">
    <div class="container justify-content-center" id="startmenu">
                <legend>Game settings</legend>
                <div class="mb-3">
                    <label for="number" class="form-label">Map size</label>
                    <select id="NumberInput" class="form-select">
                        <option value="12" selected>Small</option>
                        <option value="15" >Medium</option>
                        <option value="20">BIG</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Select" class="form-label">Game mode</label>
                    <select id="Select" class="form-select">
                        <option value="0">Clean</option>
                        <option value="1" selected>Normal</option>
                        <option value="2">Chaos</option>
                    </select>
                </div>
                <button id="start" class="btn btn-primary">START</button>
    </div>
    <div id="gameboard" style="display: none">
        <h3 id="cturn" style="top: 0.5vh; position: fixed; color: greenyellow;" class="w-100 text-center"></h3>
        <div class="row" style="margin-top: 4vh;">
            <div class="col text-center" id="x">
                <h4>X Score: 0</h4>
            </div>
            <div class="col text-center" id="event">
                <h4>Current event:<br><span id="eventname">None</span></h4>
            </div>
            <div class="col text-center" id="o">
                <h4>O Score: 0</h4>
            </div>
        </div>
        <br>
        <div class="row d-flex">
            <div class="col text-center lbeventfield">
                <h5 id="lbx">X's Lucky block event history:<br></h5>
            </div>
            <div class="justify-content-center d-flex col">
                <table class="table-bordered" id="game_map">
                </table>
            </div>
            <div class="col text-center lbeventfield">
                <h5 id="lbo">O's Lucky block event history:<br></h5>
            </div>
        </div>
    </div>
    <div class="alert alert-success col-4" role="alert" id="customAlert">
        <h4 class="alert-heading text-center">GAME END!</h4>
        <h6 class="text-center">FINAL SCORE:</h6>
        <div class="row justify-content-between">
            <div class="col-3"></div>
            <div class="col"><a id="xfinalscore">X: 0</a></div>
            <div class="col"><a style="float:right;" id="ofinalscore">O: 0</a></div>
            <div class="col-3"></div>
        </div>
        <h6 class="text-center" id="winner">X WON!</h6>
        <hr>
        <div class="d-flex justify-content-center">
            <button class="btn btn-success" id="newGame" onclick="window.location.reload()">NEW GAME</button>
        </div>
    </div>
    <script src="./game.js" type="module"></script>
</body>

</html>