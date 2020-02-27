<!DOCTYPE html>
<html>
<head>
<title>ForumTest</title>
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="listing.css">
</head>
<body>
<div id="container">
<header id="header">
<div id="pageTitle">ForumTest</div>
<div id="pageCaption">It's not unproductive if you're learning</div>
<nav id="navigation">
<ul>
<li>Item 1</li>
<li>Item 2</li>
<li>Item 3</li>
<li>Item 4</li>
</ul>
</nav>
</header>
<div class="clear"></div>
<main id="forumBody">
<div id="listings"><?php

require_once("include/database.php");

$listings = array(
    0 => array(
        "title" => "Listing",
        "desc" => "Our one and only Listing™",
        "forums" => array(
            0 => array(
                "title" => "Forum 1",
                "desc" => "OG",
                "postCount" => 41,
                "topicCount" => 12,
                "lastPost" => array(
                    "user" => "Admin",
                    "topic" => "This is a topic",
                    "timestamp" => time() - 5000
                )
            ),
            1 => array(
                "title" => "Forum 2",
                "desc" => "Electric Boogaloo",
                "postCount" => 256,
                "topicCount" => 50,
                "lastPost" => array(
                    "user" => "Foxite",
                    "topic" => "This is also topic",
                    "timestamp" => time() - 3000
                )
            ),
            2 => array(
                "title" => "Forum 3",
                "desc" => "The Third",
                "postCount" => 3,
                "topicCount" => 4,
                "lastPost" => array(
                    "user" => "User",
                    "topic" => "I am running out of topic ideas",
                    "timestamp" => time() - 2000
                )
            ),
        )
    )
);

for ($listingIndex = 0; $listingIndex < count($listings); $listingIndex++) {
    $listing = $listings[$listingIndex];
    ?>
    <table class="listing">
    <thead class="listingHeader"><tr>
    <td class="listingTitle"><?php echo($listing["title"]); ?></td>
    <td colspan="2" class="listingDescription"><?php echo($listing["desc"]); ?></td>
    </tr></thead><tbody>
    <?php
    for ($forumIndex = 0; $forumIndex < count($listing["forums"]); $forumIndex++) {
        $forum = $listing["forums"][$forumIndex];
        ?><tr class="forum">
        <td class="forumInfo">
        <div class="forumTitle"><a href="f/<?php echo($forumIndex); ?>"><?php echo($forum["title"]); ?></a></div>
        <div class="forumDesc"><?php echo($forum["desc"]); ?></div>
        </td>
        <td class="forumStats">
        <div class="forumPosts"><?php echo($forum["postCount"]); ?> posts</div>
        <div class="forumTopics"><?php echo($forum["topicCount"]); ?> topics</div>
        </td>
        <td class="forumLastPost">
        <div class="forumLastPostUser">Last post by <?php echo($forum["lastPost"]["user"]); ?></div>
        <div class="forumLastPostTopic">in <?php echo($forum["lastPost"]["topic"]); ?></div>
        <div class="forumLastPostDate">on <?php echo(date("D, d M Y H:i:s", $forum["lastPost"]["timestamp"])); ?></div>
        </td>
        </tr><?php
    }
    ?>
    </tbody></table>
<?php
}
?>
</div>
</main>
</div>
</body>
</html>
