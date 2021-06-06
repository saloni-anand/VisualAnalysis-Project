<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="playlist.css">
</head>

<?php
include('..\config.php');
session_start();


$playlist=$_COOKIE['song'];
echo $playlist;?><br><?php
$sql = "SELECT * FROM music where list='$playlist'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    ?><?php
    while($row = $result->fetch_assoc()) {
        ?><div id="list">
        <a href='#' onClick='loadDoc("<?php print_r($row['link'])?>")'>
        <img src = "played.png" width = "45px" height = "45px"></a>
        <a href='#' onClick='loadDoc1("<?php print_r($row['link'])?>")'>
        <img src="pause.png" width = "45px" height = "45px"></a>
        <?php echo $row["name"] ?>        
        </a>
        <br><br>

        <?php
    }
} else {
    echo "0 results";
}
?>
</div>

<!-- Code begins here -->
<body>
</audio>
</a>
<script>
var aud
function loadDoc(id) {
    aud = new Audio(id)
    aud.play();
    console.log(String(id));
    $('#audioid').attr('src', String(id));
    }

function loadDoc1(id) {
    aud.pause();
    console.log(String(id));
    $('#audioid').attr('src', String(id));
    }
</script>