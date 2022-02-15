<!DOCTYPE html>
<html lang="en">
<head>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Marso API</title>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <a class="navbar-brand" id="marsas" href="index.php">Marsas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" id = "nav"  href="http://localhost:8000/index.php">Pradinis</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id = "nav" href="http://localhost:8000/nuotraukos.php">Išsaugotos nuotraukos</a>
      </li>

    </ul>
  </div>
</nav>
<!-- navbar -->
</head>
<body>
    <div class = "rover">
    <h3 class = "header">"Spirit"</h3>
    <!-- button -->
<button type="button" id = "curiosity" class="btn btn-danger">Ieškoti nuotraukų</button>
<!-- button -->

<!-- datos laukas -->
    <label class = "label" for="start">Data:</label>

<input type="date" id="data" name="trip-start"
       value="2022-02-14"
       min="1800-01-01" max="2022-12-31">
<!-- datos laukas -->
</div>
<div class = "cards">
<div class = "root" id = "root"></div>

</div>
<script src="spirit.js"></script>
</body>


<footer class="bg-dark text-center text-lg-start fixed-bottom">

  <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  2022.02.15 Karolis Giedraitis

  </div>

</footer>

</html>
