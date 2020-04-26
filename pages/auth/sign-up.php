<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="../../scripts/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>

<div class="container-fluid">
    <form action="" method="post" id="signUpForm">

        <label for="UserName">User Name</label>
        <input type="text" name="UserName" required autofocus />

        <label for="Email">Email</label>
        <input type="text" name="Email" required />

        <label for="Password">Password</label>
        <input type="text" name="Password" required />

        <label for="PhotoPath">Choose Image</label>
        <input type="file" name="PhotoPath" class="form-control" required>
        
        <input id="signUpBtn" name="submit" class="btn btn-primary" type="submit" value="Submit"/>
    </form>
</div>
    
</body>
</html>