<?php
include_once "scramblerfunction.php";
$task = "encode";
if (isset($_GET['task']) && $_GET['task'] != '') {
    $task = $_GET['task'];
}
$key  = 'abcdefghijklmnopqrstuvwxyz1234567890';
if ('key' == $task) {
    $key_original = str_split($key);
    shuffle($key_original);
    $key = join(" ", $key_original);
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Scrambler</title>
</head>

<body>
    <div class="row offset-3 mt-5">
        <h1>Data Scrambler</h1>
        <p class="mt-2">Use This Application Scramble Your data</p>
        <div class="col-md-8">
            <a href="/scramblerfunction.php?task=encode" class="btn btn-success">Encode</a>
            <a href="/scramblerfunction.php?task=decode" class="btn btn-success">Decode</a>
            <a href="/ostad_php_project/DataScramblerProject/scrambler.php?task=key" class="btn btn-success">Generate Key</a>
        </div>
        <form action="" method="POST">
            <div class="col-md-8 mt-3">
                <label for="">Key</label>
                <input class="form-control" type="text" name="key" id="key" <?php displayKey($key) ?>>
            </div>
            <div class="col-md-8 mt-3">
                <label for="">Data</label>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px"></textarea>
                    <label for="floatingTextarea2"></label>
                </div>
            </div>
            <div class="col-md-8 mt-2">
                <label for="">Result</label>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px"></textarea>
                    <label for="floatingTextarea2"></label>
                </div>
            </div>

            <div class="col-md-8 mt-2">
                <button type="button" class="btn btn-primary">Do It For Me</button>
            </div>
    </div>
    </form>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>