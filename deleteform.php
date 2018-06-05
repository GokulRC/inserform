<!DOCTYPE html>
<html lang="en">
<head>
  <title>Test insert</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
<body>

<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
#head
{
text-align: center;
}
</style>
<body>
  <h1 id="head">Delete the data </h1>
<div class="container-fluid">
  <div class="row">
<div class="col-sm-4">
</div>    

<div class="col-sm-4">
    <form method="POST" action="deleteusr.php">
    <label for="id">Enter your ID</label>
    <input type="text" id="s" name="id" placeholder="Enter your id">
   <input type="submit" value="Submit">
    </form>
</div>
<div class="col-sm-4">
    </div>
</div>
</div>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</body>
</html>