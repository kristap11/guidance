<?php
session_start();
if (!isset($_SESSION['email']) && !isset($_SESSION['ID'])) { ?>
  <!DOCTYPE html>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="stylesheet" href="assets/css/main.css" />

    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="assets/images/newLogin/logo.png">
  </head>

  <body>
    <div class="loginContainer">
      <div class="d-lg-flex position-relative">
        <div class="d-flex logoContainer">
          <div class="polygon1 position-relative">
            <img class="logo" src="assets/images/newLogin/logo.png" alt="bcp-logo" />
          </div>
          <div class="polygon2"></div>
        </div>
        <div class="form-container d-flex justify-content-center w-100 p-3 p-lg-5">
          <div class="m-auto">
            <div class="form-header1 ps-2 mb-5">
              <h1 class="header1 fw-bold fs-1 m-0">BCP</h1>
              <h1 class="header2 fw-bold fs-1 m-0">GUIDANCE AND COUNSELING SYSTEM</h1>
            </div>
            <form action="login_query/check-login.php" method="post">
              
              <div class="mb-3">
                <label htmlFor="exampleInputEmail1" class="form-label fw-semibold fs-6">
                  Username
                </label>
                <input type="text" class="inputField input-form form-control px-3 fs-6 fw-normal" id="exampleInputEmail1"
                  name="username" aria-describedby="username" />
              </div>
              <div class="mb-3">
                <label htmlFor="inputPassword" class="form-label fw-semibold fs-6">
                  Password
                </label>
                <div id="login">
                  <div class="passwordContainer">
                    <input type="password" class="inputField input-form form-control px-3 fs-6 fw-normal"
                      id="inputPassword" name="password" />
                    <i class="fa-solid fa-eye-slash" id="passwordIconId"></i>
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <?php if (isset($_GET['error'])) { ?>
                  <div class="alert alert-danger" role="alert">
                    <?= $_GET['error'] ?>
                  </div>
                <?php } ?>
                <?php if (isset($_GET['timeout'])) { ?>
                  <div class="alert alert-danger" role="alert">
                    <?= $_GET['timeout'] ?>
                  </div>
                <?php } ?>
                <?php if (isset($_GET['login'])) { ?>
                  <div class="alert alert-danger" role="alert">
                    <?= $_GET['login'] ?>
                  </div>
                <?php } ?>
              </div>
              <input type="submit" class="sumbit-button btn btn-primary rounded-2 w-100 py-2 mt-3 px-4 fs-6" value="Login"
                id="button">
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"></script>
    <script>
      let showPassword = document.querySelector("#passwordIconId");
      const passwordField = document.querySelector("#inputPassword");

      showPassword.addEventListener("click", function () {
        this.classList.toggle("fa-eye");

        const type =
          passwordField.getAttribute("type") === "password"
            ? "text"
            : "password";
        passwordField.setAttribute("type", type);
      });
    </script>
  </body>

  </html>

<?php } else {
  header("location:javascript://history.go(-1)");
}
?>  
