
<html>


<head>
    <title>view</title>
    <meta charset="utf-8">
</head>

<body>

<form action=""  method="POSt">
    <label>Name:</label>
<input type="text" name="form[name]"/>
    <br/><br/>
    <label>Email:</label>
    <input type="email" name="form[email]"/>
    <br/><br/>
    <label>Message:</label>
    <input type="message" name="form[message]"/>
    <lebel>Send message admin</lebel>
    <input type="checkbox" name="check"/>
    <br/><br/>
    <input type="submit" value="send"/>
</form>

<?php

foreach ($data['arr'] as  $value){
    echo $value['name']."<br/>";
    echo $value['email']."<br/>";
    echo $value['message']."<br/>";
}
?>

</body>


</html>


