<?php
include 'database.php';
$sql = "select * from sp_data";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
session_start();
if (isset($_SESSION["login"])) {
    if ($_SESSION["login"] == 0) {
        header("location:index.php");
        exit();
    } else {
        header("location:index.php");
        exit();
    }
}
if (!isset($_SESSION["login"])) {
    header("location:index.php");
    exit();
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style1.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="assets/onclick.js"></script>
</head>

<body>
    <form>
        <label for="select_choice">choose image or logo</label>
        <select id="select_choice">
            <option value="choice">choice</option>
            <option value="image" selected>image</option>
            <option value="text">text</option>
        </select>
        <div class="logoimagediv">
            <label for="logoimagec">logoimagec</label>
            <input type="file" name="logoimagec" id="logoimagec" value="">
            <label for="logoimagec" id="label-for-imagename">
                <?php echo $row["logoimagec"]; ?>
            </label>
        </div>
        <div class="logotextdiv">
            <label for="logotextc">logotextc</label>
            <input type="text" name="logotextc" id="logotextc" value="<?php echo $row["logotextc"]; ?>">
        </div>
        <label for="homec">homec</label>
        <input type="text" name="homec" id="homec" value="<?php echo $row["homec"]; ?>">
        <label for="aboutusc">aboutusc</label>
        <input type="text" name="aboutusc" id="aboutusc" value="<?php echo $row["aboutusc"]; ?>">
        <label for="whyusc">whyusc</label>
        <input type="text" name="whyusc" id="whyusc" value="<?php echo $row["whyusc"]; ?>">
        <label for="freeebookc">freeebookc</label>
        <input type="text" name="freeebookc" id="freeebookc" value="<?php echo $row["freeebookc"]; ?>">
        <label for="onlinecoursec">onlinecoursec</label>
        <input type="text" name="onlinecoursec" id="onlinecoursec" value="<?php echo $row["onlinecoursec"]; ?>">
        <label for="bookacallc">bookacallc</label>
        <input type="text" name="bookacallc" id="bookacallc" value="<?php echo $row["bookacallc"]; ?>">
        <label for="bannerheadertopc">bannerheadertopc</label>
        <input type="text" name="bannerheadertopc" id="bannerheadertopc"
            value="<?php echo $row["bannerheadertopc"]; ?>">
        <label for="bannerheaderbottomc">bannerheaderbottomc</label>
        <input type="text" name="bannerheaderbottomc" id="bannerheaderbottomc"
            value="<?php echo $row["bannerheaderbottomc"]; ?>">
        <label for="bannerbuttonleftc">bannerbuttonleftc</label>
        <input type="text" name="bannerbuttonleftc" id="bannerbuttonleftc"
            value="<?php echo $row["bannerbuttonleftc"]; ?>">
        <label for="bannerbuttonrightc">bannerbuttonrightc</label>
        <input type="text" name="bannerbuttonrightc" id="bannerbuttonrightc"
            value="<?php echo $row["bannerbuttonrightc"]; ?>">
        <input type="submit" value="submit" id="admin-submit">
        <input type="reset" value="reset">
        <input type="submit" value="logout" id="admin-logout">
    </form>
</body>

</html>