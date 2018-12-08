<?php require 'partials/header.view.php'; ?>
<p>This is page ASK NAME</p>
<br>
<form action="save-name" , method="POST">
    <input type="text" name="name" placeholder="Введіть своє ім'я">
    <button type="submit" value="SEND">SEND</button>
</form>
<?php require 'partials/footer.view.php'; ?>
