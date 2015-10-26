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
    <label>Forename</label><input type="text" name="forename"/><br/>
    <label>Surname</label><input type="text" name="surname"/><br/>
    <label>Date of birth</label><input type="date" name="dob"><br/>
    <label>Gender</label>
    <select name="gender">
        <option value="">Gender</option>
        <option value="Female">Female</option>
        <option value="Male">Male</option>
    </select><br/><br/>
    <label>Superpowers</label><br/>
    <input type="checkbox" name="fly">Fly<br/>
    <input type="checkbox" name="lasers">Lasers<br/>
    <input type="checkbox" name="superstrength">Super-strength<br/>
    <input type="submit" value="Submit">
</form>
</body>
</html>
