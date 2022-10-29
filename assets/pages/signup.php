<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
 
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
 
  <title>EventsWave</title>
 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />

  <link rel="stylesheet" href="assets/rebuild/css/bootstrap-login-form.min.css" />

</head>

<body>
  <!-- Start your project here-->
  <section class="vh-100" style="background-image: url('assets/images/cover.png');">
    
    <div class="container py-5 h-100">

      <div class="row d-flex justify-content-center align-items-center h-100">

        <div class="col col-xl-10">

          <div class="card" style="border-radius: 1rem;">

            <div class="row g-0">

              <div class="col-md-6 col-lg-5 d-none d-md-block">
                
                <img src="assets/images/signup.jpg"alt="login form"class="img-fluid" style="border-radius: 1rem 0 0 1rem;"/>

              </div>

              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                
                <div class="card-body p-4 p-lg-5 text-black">

                  <form method="post" action="assets/php/actions.php?signup">

                <div class="d-flex justify-content-center">

                    <img class="mb-4" src="assets/images/small_logo.png" alt="" height="45">

                </div>

                <h6 style="text-transform: uppercase; color: grey;" class="mt-2 mb-1"><b>Join With Us</b></h5>

                <!--<h1 class="h5 mb-3 fw-normal">Create new account</h1>-->

                <div class="d-flex">

                    <div class="form-floating mt-1 col-6 text-muted h6" style="font-size:small;">

                        <input type="text" name="first_name" value="<?=showFormData('first_name')?>" class="form-control form-control-lg0" placeholder="username/email">

                        <label for="floatingInput">first name</label>

                    </div>

                    <div class="form-floating mt-1 col-6 text-muted h6" style="font-size:small;">

                        <input type="text" name="last_name" value="<?=showFormData('last_name')?>" class="form-control form-control-lg0" placeholder="username/email">

                        <label for="floatingInput">last name</label>

                    </div>

                </div>

                <?=showError('first_name')?>
                
                <?=showError('last_name')?>

                <div class="d-flex gap-3 my-3">

                    <div class="form-check text-muted h6" style="font-size:small;">

                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1"

                            value="1" <?=isset($_SESSION['formdata'])?'':'checked'?><?=showFormData('gender')==1?'checked':''?>>

                        <label class="form-check-label" for="exampleRadios1">

                            Male

                        </label>
                    </div>

                    <div class="form-check text-muted h6" style="font-size:small;">

                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios3"
                            value="2" <?=showFormData('gender')==2?'checked':''?>>

                        <label class="form-check-label" for="exampleRadios3">

                            Female

                        </label>

                    </div>

                    <div class="form-check text-muted h6" style="font-size:small;">

                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2"
                            value="0" <?=showFormData('gender')==0?'checked':''?>>

                        <label class="form-check-label" for="exampleRadios2">

                            Other
                        </label>

                    </div>

                </div>

                <div class="form-floating mt-2 text-muted h6" style="font-size:small;">

                    <input type="email" name="email" value="<?=showFormData('email')?>" class="form-control form-control-lg0" placeholder="username/email">
                    <label for="floatingInput">email</label>

                </div>

                <?=showError('email')?>

                <div class="form-floating mt-2 text-muted h6" style="font-size:small;">

                    <input type="text" name="username" value="<?=showFormData('username')?>" class="form-control form-control-lg0" placeholder="username/email">

                    <label for="floatingInput">username</label>

                </div>

                <?=showError('username')?>

                <div class="form-floating mt-2 text-muted h6" style="font-size:small;">

                    <input type="password" name="password" class="form-control form-control-lg0" id="floatingPassword" placeholder="Password">

                    <label for="floatingPassword">password</label>

                </div>

                <?=showError('password')?>

                <div class="pt-1 mb-4 mt-2">

                    <button class="btn btn-dark btn-lg btn-block" type="submit">SIGNUP</button>

                </div>

                <p class="mb-4 pb-lg-2" style="color: #19afd4;">Have an account? <a href="?login" style="color: #2696ca;">

                SignIn</a></p>

            </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script type="text/javascript" src="js/mdb.min.js"></script>

  <script type="text/javascript"></script>

</body>

</html>