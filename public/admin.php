<?php

$content = file_get_contents('../data/last_message.json');
if ($content !== false) {
    print_r($content);
}