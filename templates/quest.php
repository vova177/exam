

<?php
echo"<br/>";
foreach ($data['arr'] as  $value){
    echo $value['name']."<br/>";
    echo $value['email']."<br/>";
    echo $value['message']."<br/>";
}
?>

<form action="" method="POSt" xmlns="http://www.w3.org/1999/html">
    <label>Name:</label>
<input type="text" name="name"/>
    <br/><br/>
    <label>Email:</label>
    <input type="email" name="email"/>
    <br/><br/>
    <label>Message:</label>
    <textarea name="message"/></textarea>
    <lebel>Send message admin</lebel>
    <input type="checkbox" name="check"/>
    <br/><br/>
    <input type="submit" value="send"/>
</form>




