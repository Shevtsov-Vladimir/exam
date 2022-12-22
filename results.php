<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>results</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<?php
$host = 'localhost';
$db = 'survey';
$user = 'root';
$pass = '';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$conn = new PDO($dsn, $user, $pass);

if (isset($_POST["q1"], $_POST["q2"], $_POST["q3"], $_POST["explanation"])) {
  $q1 = $_POST["q1"];
  $q2 = $_POST["q2"];
  $q3 = $_POST["q3"];
  $explanation = $_POST["explanation"];
  $comment = null;

  if (isset($_POST["comment"])) {
    $comment = $_POST["comment"];
  }

  $request = "INSERT INTO answers(q1, q2, q3, comment, explanation) VALUES ('$q1', '$q2', '$q3', '$comment', '$explanation');";
  $conn->exec($request);

  header('location:?');
}

$res = $conn->query('SELECT FLOOR( AVG(q1) ) AS "q1", FLOOR( AVG(q2) ) AS "q2", FLOOR( AVG(q3) ) AS "q3" FROM answers;');
$data = $res->fetchAll();

$progress_bars = [
  '<div class="progress-bar bg-danger" role="progressbar" style="width: 20%;" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5">0/5</div>',
  '<div class="progress-bar bg-danger" role="progressbar" style="width: 20%;" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5">1/5</div>',
  '<div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5">2/5</div>',
  '<div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5">3/5</div>',
  '<div class="progress-bar bg-info" role="progressbar" style="width: 80%;" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5">4/5</div>',
  '<div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5">5/5</div>'
];

?>

<body class="bg-light py-3 py-lg-5">
  <div class="container">
    <div class="text-center">
      <h1 class="display-4">Survey Name</h1>
      <p class="lead">Subtitle for the Survey Name</p>
    </div>
    <div class="mb-5">
    <h2 class="h3 text-center mb-4">Results with percentages</h2>
      <div class="row">
        <div class="col-md-6">
          <h3 class="h5 mb-3">Question #1: Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h3>
        </div>
        <div class="col-md-6">
          <div class="progress">
            <?php echo ($progress_bars[$data[0]['q1']]) ?>
          </div>
        </div>
      </div>
      <hr class="my-4">
      <div class="row">
        <div class="col-md-6">
          <h3 class="h5 mb-3">Question #2: Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h3>
        </div>
        <div class="col-md-6">
          <div class="progress">
            <?php echo ($progress_bars[$data[0]['q2']]) ?>
          </div>
        </div>
      </div>
      <hr class="my-4">
      <div class="row">
        <div class="col-md-6">
          <h3 class="h5 mb-3">Question #3: Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h3>
        </div>
        <div class="col-md-6">
          <div class="progress">
            <?php echo ($progress_bars[$data[0]['q3']]) ?>
          </div>
        </div>
      </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
      var tooltipTriggerElements = document.querySelectorAll('[data-bs-toggle="tooltip"]');
      for (var i = 0; i < tooltipTriggerElements.length; i++) {
        new bootstrap.Tooltip(tooltipTriggerElements[i])
      }
    </script>
</body>

</html>