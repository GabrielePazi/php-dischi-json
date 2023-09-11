<?php

$posts = file_get_contents(__DIR__ . '/../db/albums.json');

echo $posts;
