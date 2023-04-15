<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="dog-solid.svg" type="image/x-icon">
    <link rel="stylesheet" href="../style.css" />
    <script
      src="https://kit.fontawesome.com/0af1d80857.js"
      crossorigin="anonymous"
    ></script>
    <script src="login.js"></script>
    <title>With Your Pups!</title>
  </head>
  <body>
    <!--............ Nav Bar ............-->
    <?php include('../component/navigation.php'); ?>

    <div id="signup-container" class="container">
      <center>
        <h1> Log-In 🐕‍🦺</h1>

      </center>
      <br>
      <div class="container">
      <form id="form">
        <div class="form-group">
          <label for="id">ID</label>
          <input type="id" class="form-control" id="id" aria-describedby="id" required>
        </div>
        <div class="form-group">
          <label for="InputPassword1">Password</label>
          <input type="password" class="form-control" id="InputPassword1" required>
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="Check1">
          <label class="form-check-label" for="Check1">Save this Computer</label>
        </div>
        <button type="submit" class="btn btn-success btn-lg btn-block mb-3" href="../index.php">Submit</button>
      </form>
    </div>
</form>
  </div>

  <!--............ Footer ............-->
  <?php include('../component/footer.php'); ?>
</body>
</html>