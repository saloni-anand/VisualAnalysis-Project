<script>
    function coo(name){
        document.cookie = "playlist="+name;
    }
</script>
<style>

@import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

body{
    font-family: 'Montserrat', sans-serif;
    background-image: url('5.jpg');
    */background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}

button{
    box-shadow:inset 0px -3px 7px 0px #29bbff;
    background:linear-gradient(to bottom, #2dabf9 5%, #0688fa 100%);
    background-color:#2dabf9;
    border-radius:25px;
    border:1px solid #0b0e07;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Arial;
    font-size:2vw;
    padding:9px 23px;
    text-decoration:none;
    text-shadow:0px 1px 0px #263666;
}

button:hover {
    opacity: 0.75;
}

button:active {
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

$sql="select playlist from playlist LIMIT 10";
$result = $conn->query($sql);
?>
<div id="container-list">
<?php
while($row = $result->fetch_assoc()) {
    ?><div id="list"><b>
    <button onClick='
        document.cookie = "song="+"<?php echo $row['playlist']?>";
        window.location = "playlist.php";
        '>
    <span style="color:white;">
    <?php echo $row["playlist"] ?>
</div>
    </a><br><br>

    <?php
}
?>
</div>