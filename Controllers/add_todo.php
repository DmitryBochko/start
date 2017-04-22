<?php

$queryBuilder->table('todo')->insert([
    'title' => Request::get('title', '')
]);

Request::back();