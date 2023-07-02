<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>BFList</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="centered-content">
        <div class="task-manager-container">
            <form action="insert.php" method="POST">
                <div>
                    <div>
                        <h1 class = "maintitle">WPISZ ZADANIE</h1>
                    </div>
                    <div class="sidebar">
                        
                        <div class="input-container">
                            <input type="text" name="list" class="form-control" id="">
                        </div>
                        <button class="button is-primary-one" href="/list">
                            Dodaj zadanie
                        </button>
                    </div>
                </div>
        </div>
        </form>
        <?php
        include "config.php";
        $rawData = mysqli_query($con, "select * from tbltodo");
        ?>
        <div class="container">
            <h1 class="titleMainTs">ZADANIA</h1>

                <table class="table">
                    <tbody>
                        <?php while($row = mysqli_fetch_array($rawData)): ?>
                        <tr>
                            <td><?php $row['id']; ?></td>
                            <td><?php echo $row['list']; ?></td>
                            <td style="text-align: right;">
                                <a href="delete.php?ID=<?php echo $row['id']; ?>"
                                    class="btn btn-outline-danger">Usuń</a>
                            </td>
                            <td style="text-align: right;">
                                <a href="update.php?ID=<?php echo $row['id']; ?>"
                                    class="btn btn-outline-success">Zmodyfikuj</a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
        </div>

    </div>
</body>

</html>