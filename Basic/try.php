<?php

                require_once 'RESTful.php';

                $url = 'http://api.serri.codefactory.live/random/';
                $result = curl_get($url);
                $parsing = json_decode($result);
                

               
                    



                ?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title></title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    </head>

    <body>
    <div class="container">
        <div class="row">

            <div class="col-sm-12">
                <h3>Serri Joke </h3>
              <marquee>
              <?php
              echo $parsing->joke;
              ?>
              </marquee>
                </p>
            </div>
        </div>
    </div>
                
    </body>

</html>