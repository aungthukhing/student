<!doctype html>
<html>
<style>
body {
    background: green;
}
.form {
    margin: 50px auto;
    width: 300px;
    padding: 30px 25px;
    background: white;
}
</style>
    <body>
        <form action="" method="POST">
            <label>Name</label>
            <input type="text" name="name"><br><br>
            <label>Email</label>
            <input type="text" name="email"><br><br>
            <label>PhoneNo</label>
            <input type="text" name="phno"><br><br>
            <label>Township</label>
            <select id="Towm" name="towmship">
                <option value="yangon">Yangon</option>
                <option value="mandalay">mandalay</option>
                <option value="monywa">Monywa</option>
            </select><br><br>
            <label>Grade</label>
            <input type="radio" name="grade" value=Final Year>
            <label>Final Year</label>
            <input type="radio" name="grade" value=Fourth Year>
            <label>Fourth Year</label><br><br>
            <label>Subjects</label>
            <input type="checkbox" name="check[]" value=5o4>
            <label>5o4</label>
            <input type="checkbox" name="check[]" value=5o5>
            <label>5o5</label>
            <input type="checkbox" name="check[]" value=5o6>
            <label>5o6</label><br>
            <button name="button" value="submit">Submit</button>
        </form>
        
    </body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=($_POST['name']);
    $email=($_POST['email']);
    $phoneno=($_POST['phno']);
    $township=($_POST['towmship']);
    $gde=($_POST['grade']);
    $subject=($_POST['check']);
    echo "Name is </t>" .$name. "<br/>";
    echo "Email is </t>" .$email. "<br/>";
    echo "Phone No is </t>" .$phoneno. "<br/>";
    echo "Township is </t>" .$township. "<br/>";
    echo "Grade  is </t>" .$gde. "<br/>";
    if(empty($subject)){
        echo "Subject is Empty";
    }
    else{
          foreach($subject as $k){
            echo "Subject is </t>". $k ;
          }
        }
          
}
?>