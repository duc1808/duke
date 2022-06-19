<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="web programming :: lab 8" />
    <meta name="keywords" content="web, programming" />
    <title>Web development - Lab 8</title>
</head>
<body>
    <h1>Add a member</h1>
    <form action="member_add.php" method="post">
        <label for="fname">First name: </label>
        <input type="text" name="fname" /><br />

        <label for="lname">Last name: </label>
        <input type="text" name="lname" /><br />

        <label for="gender">Gender: </label>
        <input type="text" name="gender" /><br />

        <label for="email">Email: </label>
        <input type="text" name="email" /><br />

        <label for="phone">Phonenumber: </label>
        <input type="text" name="phone" /><br />

        <input type="submit" value="submit" />
        <input type="reset" value="reset form" />
    </form>
</body>
</html>
