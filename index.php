<?php
include("config.php");
include("reactions.php");

$getReactions = Reactions::getReactions();
//uncomment de volgende regel om te kijken hoe de array van je reactions eruit ziet
// echo "<pre>".var_dump($getReactions)."</pre>";

if(!empty($_POST)){

    //dit is een voorbeeld array.  Deze waardes moeten erin staan.
    $postArray = [
        'name' => "",
        'email' => "",
        'message' => ""
    ];

    $setReaction = Reactions::setReaction($postArray);

    if(isset($setReaction['error']) && $setReaction['error'] != ''){
        prettyDump($setReaction['error']);
    }
    

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youtube remake</title>
</head>
<body>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/4rs8B3KG8eE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

    <h1>Hieronder komen reacties</h1>
    <h2>Commentaar toevoegen</h2>
        <div>
            naam: <input type="text" name="name-=" value="">
        </div>
        <div>
            email: <input type="text" name="email" value="">
        </div>
        <div>
            <textarea name="message" cost="30" rows="10"></textarea>
        </div>
        <input type="submit" value="Verzenden">
</body>
</html>

<?php
$con->close();
?>