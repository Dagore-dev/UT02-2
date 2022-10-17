<?php
function print_header (string $title) {

  echo <<<HEADER
  <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.fluid.classless.min.css">
      <title>$title</title>
    </head>
    <body>
    <div style="max-width: 60vw; margin: auto;">
      <h1>$title</h1>
  HEADER;
}
?>
