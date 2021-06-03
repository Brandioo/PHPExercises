<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form method="post" action="result.php">
        <div class="form-group">
            <label for="num1">Number 1</label>
            <input name="num1" class="form-control" id="num1"/>
        </div>
        <div class="form-group">
            <label for="num2">Number 2</label>
            <input name="num2" class="form-control" id="num2"/>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" name="submit">Submit</button>
        </div>
    </form>
</div>
</body>
</html>