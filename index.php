<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Survey - Questions</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body class="bg-light py-3 py-lg-5">
  <div class="container">
    <div class="text-center">
      <h1>Survey Name</h1>
      <p class="lead">Subtitle for the Survey Name</p>
    </div>
    <ul class="nav nav-tabs nav-justified" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="step-1-tab" data-bs-toggle="tab" data-bs-target="#step-1" type="button" role="tab"
          aria-controls="step-1" aria-selected="false">Часть 1</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#step-2" type="button" role="tab"
          aria-controls="step-2" aria-selected="false">Часть 2</button>
      </li>
      <li class="nav-item active" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#step-3" type="button" role="tab"
          aria-controls="step-3" aria-selected="true">Часть 3</button>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade my-3" id="step-1" role="tabpanel" aria-labelledby="step-1" tabindex="0">

      </div>

      <div class="tab-pane fade my-3" id="step-2" role="tabpanel" aria-labelledby="step-2" tabindex="0">

      </div>

      <div class="tab-pane fade show active" id="step-3" role="tabpanel" aria-labelledby="step-3" tabindex="0">
        <form action="results.php" method="post">
          <div class="row my-3">
            <div class="col-12 col-lg-6">
              <h2 class="h5">Question #5: Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h2>
              <p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada semper
                velit, id condimentum dui aliquet non.</p>
            </div>
            <div class="col-12 col-lg-6">
              <div class="d-flex justify-content-between mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="q1" id="radio1" value="1" required>
                  <label class="form-check-label" for="radio1">1</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="q1" id="radio2" value="2">
                  <label class="form-check-label" for="radio2">2</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="q1" id="radio3" value="3">
                  <label class="form-check-label" for="radio3">3</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="q1" id="radio4" value="4">
                  <label class="form-check-label" for="radio4">4</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="q1" id="radio5" value="5">
                  <label class="form-check-label" for="radio5">5</label>
                </div>
              </div>
              <label for="textarea1">Comment:</label>
              <textarea class="form-control" name="comment" placeholder="Write a comment here..."
                id="textarea1"></textarea>
            </div>
          </div>
          <hr class="my-4">
          <div class="row my-3">
            <div class="col-12 col-lg-6">
              <h2 class="h5">Question #7: Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h2>
              <p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada semper
                velit, id condimentum dui aliquet non.</p>
            </div>
            <div class="col-12 col-lg-6">
              <div class="btn-group btn-group-lg w-100 mb-3" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="q2" id="btnradio1" value="1" autocomplete="off" required>
                <label class="btn btn-outline-secondary" for="btnradio1">1</label>

                <input type="radio" class="btn-check" name="q2" id="btnradio2" value="2" autocomplete="off">
                <label class="btn btn-outline-secondary" for="btnradio2">2</label>

                <input type="radio" class="btn-check" name="q2" id="btnradio3" value="3" autocomplete="off">
                <label class="btn btn-outline-secondary" for="btnradio3">3</label>

                <input type="radio" class="btn-check" name="q2" id="btnradio4" value="4" autocomplete="off">
                <label class="btn btn-outline-secondary" for="btnradio4">4</label>

                <input type="radio" class="btn-check" name="q2" id="btnradio5" value="5" autocomplete="off">
                <label class="btn btn-outline-secondary" for="btnradio5">5</label>
              </div>
            </div>
          </div>
          <hr class="my-4">
          <div class="row my-3">
            <div class="col-12 col-lg-6">
            <h2 class="h5">Question #9: Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h2>
              <p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada semper velit, id condimentum dui aliquet non.</p>
            </div>
            <div class="col-12 col-lg-6">
              <div class="d-flex justifyl-content-between mb-3">
                <span class="me-3">1</span>
                <input type="range" name="q3" required class="form-range" min="0" max="5" step="1" id="customRange3">
                <span class="ms-3">5</span>
              </div>
              <label for="floatingTextarea">Comment:</label>
              <textarea class="form-control" name="explanation" required placeholder="Write a comment here..."
                id="floatingTextarea"></textarea>
            </div>
          </div>
          <button type="submit" value class="btn btn-secondary d-block ms-auto"
            id="go-to-step-3">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>