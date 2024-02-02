<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>poll</title>
        <link rel="stylesheet" href="assets/poll.css">
</head>
    <body>
        <div class="poll-section">
            <div class="poll-section-container">
                <h1> Select whom you want to vote for </h1>
                <form class="formpoll" action="#" method="post">
                    <label for="varun_vote">varun</label>
                    <input type="radio" name="vote" value="1" id="varun_vote">
                    <br><br>
                    <label for="thakur_vote">thakur</label><input type="radio"  name="vote" value="2" id="thakur_vote">
                    <br><br>
                    <input type="submit" value="vote" class="submit">
                    <p class="result"></p>
                </form>                
            </div>
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="assets/poll.js"></script>
    </body>

</html>