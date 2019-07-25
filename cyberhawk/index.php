<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="app.css">
</head>
<body>
    <header>
        <h1>Cyberhawk Test App</h1>
    </header>
    <div class="content">
<?php
for($i = 1; $i <= 100; $i++){
    if($i % 3 == 0 && $i % 5 == 0){
        echo "<div class='info-box red'><p>" .$i. "</p> <p>Coating Damage and Lightning Strike</p></div>";
    }else if($i % 3 == 0){
        echo "<div class='info-box red'><p>" .$i. "</p> <p>Coating Damage</p></div>";
    }else if($i % 5 == 0){
        echo "<div class='info-box red'><p>" .$i. "</p> <p>Lightning Strike</p></div>";
    }else{
        echo "<div class='info-box'><p>" .$i. "</p><p>No Damage</p></div>";
    }
}
?>
    </div>

</body>
</html>