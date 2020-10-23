<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Update Task</title>
</head>
<body>
    <div class="container">
    <br><br><br><br>
    <form action="" method="post">
    <input type="text" class="form-control" name="task" value="{{$taskdata->task}}"/>
    <input type="submit" class="btn btn-warning" value="Update"/>
    &nbsp;&nbsp;<input type="button" class="btn btn-danger" value="Cancel"/>

    </form>
    
    </div>

</body>
</html>