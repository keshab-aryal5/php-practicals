<!-- Write a PHP script using nested for loop that creates a chess board
Code: -->
<!DOCTYPE html>
<html>
<head>
    <style>
        .chessboard {
            width: 400px;
            height: 400px;
            display: grid;
            grid-template-columns: repeat(8, 1fr);
            grid-template-rows: repeat(8, 1fr);
        }

        .square {
            width: 50px;
            height: 50px;
        }

        .white {
            background-color: white;
        }

        .black {
            background-color: black;
        }
    </style>
</head>
<body>
    <div class="chessboard">
        <?php
        for ($row = 1; $row <= 8; $row++) {
            for ($col = 1; $col <= 8; $col++) {
                $class = ($row + $col) % 2 == 0 ? 'white' : 'black';
                echo "<div class='square $class'></div>";
            }
        }
        ?>
    </div>
</body>
</html>
