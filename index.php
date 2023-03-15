<?php

$connection = (new DatabaseConnection())->getConnection();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h1>Dublin coding school</h1>
    <section>
        <div class="container">
            <label for="title-input">Title</label>
            <input id="title-input" type="text" placeholder="Title">

            <label for="author-input">Author</label>
            <input id="author-input" type="text" placeholder="Author">

            <label for="list-input">List Item</label>
            <input id="list-input" type="text" placeholder="list item" value="">

            <button onclick="fillParagraph()">submit</button>


        </div>
        <div>
            <ol>
                <li id="default-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid architecto cupiditate iusto nobis nostrum quam quidem quod ullam velit. Assumenda eligendi error quam reiciendis velit, voluptate? Et, incidunt, officiis.</li>
            </ol>
        </div>

        <div>
            <button id="save-list" disabled>save</button>
        </div>
    </section>

<script src="app.js"></script>
</body>
</html>