<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Register new Superhero</title>
</head>
<body>
<h1>
    Register new Superhero
</h1>
<form action="createSuperhero.php" method="post">
    <label>Forename</label><input type="text" name="forename"/>
    <label>Surname</label><input type="text" name="surname"/>
    <label>Date of birth</label><input type="date" name="dob">
    <label>Gender</label>
    <select name="gender">
        <option value="">Gender</option>
        <option value="Female">Female</option>
        <option value="Male">Male</option>
    </select>
    <label>Superpowers</label>
    <input type="checkbox" name="fly" content="Fly">
    <input type="checkbox" name="lasers" content="Lasers">
    <input type="checkbox" name="superstrength" content="Super-strength">
    <input type="submit" value="Submit">
</form>
</body>
</html>
