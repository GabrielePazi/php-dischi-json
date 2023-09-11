<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="./style.css"> <!--  CSS Custom Link -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <title>Document</title>
</head>

<body>

  <div id="app">
    <div class="container-fluid p-0">
      <header>
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start bg-dark">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none p-3">
            <img src="./img/logo.svg" class="logo" alt="Logo">
          </a>
        </div>
      </header>

      <main class="bg-light">
        <div class="cards-container d-flex flex-wrap justify-content-between column-gap-3 row-gap-5">
          <div class="card text-center" style="width: 32%;" v-for="album in albums">
            <img :src="album.poster" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">{{ album.title }}</h5>
              <h6 class="card-text">{{ album.author }}</h6>
              <h6 class="card-text">{{ album.release_date }}</h6>
            </div>
          </div>
        </div>
      </main>
    </div>

    <script src="./main.js"></script><!--  JS Custom Link -->
</body>

</html>