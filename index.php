<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css" type="text/css" />
    <!-- <link rel="stylesheet" href="./css/a.css" type="text/css" /> -->
    <title>Proyecto de Batalla Naval</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row bg1">
            <div class="col-md">
                <h1 class="text-center l">BATALLA NAVAL</h1>
            </div>
            <br><br>
            <br><br>
        </div>
        <br><br>
        <span>Selecciona la posición de tus barcos</span>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div id="board">
                    </div>
                </div>
                <div class="col">
                    <div id="boardAttack">
                    </div>
                </div>
            </div>
            <br><br>
            <span>Tus barcos:</span>
            <br>
            <br>
            <div id="ships" class="row">
                <div class="col">
                    <div>
                        <span>Portaviones</span></br>
                        <span>Tamaño: 5</span>
                    </div>
                    <br>
                    <div class="position"></div>
                </div>
                <div class="col">
                    <div>
                        <span>Acorazado</span></br>
                        <span>Tamaño: 4</span>
                    </div>
                    <br>
                    <div class="position"></div>
                </div>
                <div class="col">
                    <div>
                        <span>Submarino</span></br>
                        <span>Tamaño: 3</span>
                    </div>
                    <br>
                    <div class="position"></div>
                </div>

                <div class="col">
                    <div>
                        <span>Destructor</span></br>
                        <span>Tamaño: 2</span>

                    </div>
                    <br>
                    <div class="position"></div>
                    <br>
                </div>
                <br><br>
            </div>
            <div class="row">
                <br>
                <br>
            </div>
            <div class="row text-center">
                <br>
                <br>
                <div class="col-md">
                <button id="button" class="btn" onclick="startGame()"><span class="btn-text">COMENZAR JUEGO</span></button>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="./js/funciones.js"></script>
    </div>
</body>

</html>