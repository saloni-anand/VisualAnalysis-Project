<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

body{
    font-family: 'Montserrat', sans-serif;
    background-image: url('riviera.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}

button{
    box-shadow:inset 0px -3px 7px 0px #8aff2b;
    background:linear-gradient(to bottom, #88f078 5%, #2c9e52 100%);
    background-color:#88f078;
    border-radius:25px;
    border:1px solid #0b0e07;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Arial;
    font-size:2vw;
    padding:9px 23px;
    text-decoration:none;
    text-shadow:0px 1px 0px #562766;
}
Button:hover {
    opacity: 0.75;
}
Button:active {
    position:relative;
    top:1px;
}

#container-list{
    margin-left:10vw;
    margin-top:5vw;
    }
</style>

<?php

include('..\config.php');

$sql="select name from emotions";
$result = $conn->query($sql);
?>
<div id="container-list">
<?php
while($row = $result->fetch_assoc()) {
    ?><div id="list"><b>
    <button onClick='
        document.cookie = "analysis="+"<?php echo $row['name']?>";
        window.location = "al.php";
        '>
    <span style="color:white;">
    <?php echo $row["name"] ?>
</div>
    </a><br><br>

    <?php
}
?>
</div>