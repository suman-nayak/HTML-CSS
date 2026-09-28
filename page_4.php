<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="page_5.php" method="post">
        <label>Name</label><br>
        <input type="text" name="name"><br>
        <label>Age</label><br>
        <input type="number" name="age"><br>
        <label>DOB</label><br>
        <input type="date" name="dob"><br>
        <label>Mobiel</label><br>
        <input type="tel" name="mobile"><br>
        <label>Email</label><br>
        <input type="email" name="email"><br>
        <label>Password</label><br>
        <input type="password" name="password"><br>
        <label>Gender</label><br>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other
        <br>
        <label>Address</label><br>
        <textarea rows="5" cols="22" name="address"></textarea>
        <br>
        <label>Country</label><br>
        <select name="country">
            <option value="">Select</option>
            <option value="India">India</option>
            <option value="US">US</option>
            <option value="UK">UK</option>
            <option value="Other">Other</option>
        </select>
        <br>
        <label>Language Known</label><br>
        <input type="checkbox" name="language[]" value="Odiya"> Odiya
        <input type="checkbox" name="language[]" value="Hindi"> Hindi
        <input type="checkbox" name="language[]" value="English"> English
        <input type="checkbox" name="language[]" value="Tamil"> Tamil
        <input type="checkbox" name="language[]" value="Telegu"> Telegu

        
        <br><br>
        <input type="Submit">
    </form>
</body>
</html>