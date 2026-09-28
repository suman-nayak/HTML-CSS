<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $language = $_POST['language'];
    $language = implode(", ", $language);
?>
<p>Name: <?php echo $name; ?></p>
<p>age: <?php echo $age; ?></p>
<p>dob: <?php echo $dob; ?></p>
<p>mobile: <?php echo $mobile; ?></p>
<p>email: <?php echo $email; ?></p>
<p>password: <?php echo $password; ?></p>
<p>gender: <?php echo $gender; ?></p>
<p>address: <?php echo $address; ?></p>
<p>country: <?php echo $country; ?></p>
<p>language: <?php echo $language; ?></p>

<?php
}
?>