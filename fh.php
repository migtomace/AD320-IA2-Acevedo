<?php
/**
 * Created by IntelliJ IDEA.
 * User: Miguel.Acevedo
 * Date: 1/20/2019
 * Time: 5:44 PM
 */

//Name : <User entered data>
//Email: <User entered data>
//Phone : <User entered data, if no user entered data, do not show this line>
//State: <User entered data, if no user entered data, do not show this line>

$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$state = $_GET['state'];

echo "<ul>
        <li>Name: ".$name."</li>
        <li>Email: ".$email."</li>";

if ($phone != null || $phone != ""){
    echo "<li>Phone: ".$phone."</li>";
}
if ($state != null || $state != ""){
    echo "<li>State: ".$state."</li>
    </ul>";
}

