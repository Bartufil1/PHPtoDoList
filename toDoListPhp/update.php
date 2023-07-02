<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>BFList</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Update</title>
</head>

<?php
include "config.php";
$id = $_GET['ID'];
$Rdata = mysqli_query($con,"select * from tbltodo where Id = $id");
$data = mysqli_fetch_array($Rdata);
?>

<body>
    <div class="centered-content">
        <div class="task-manager-container">
            <form action="update1.php" method="POST">
                <div class="sidebar">
                    <div>
                        <h1 class="titleList">Zmodyfikuj</h1>
                    
                    <input type="text" name="list" value="<?php echo $data['list'] ?>" class="form-control" id="">
                    </div>
                    <div class="col-2">
                        <button class="buttonModify" href="/list">
                            Zmodyfikuj
                        </button>
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>