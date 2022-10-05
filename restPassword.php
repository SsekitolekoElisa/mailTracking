<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password rest</title>
    <link url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap')>
    <!-- html bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- javaSCRIPT bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Boxiocns CND link -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <style type="style/css">
    </style>
</head>
<body style="background-color: #DE3163;">
    <div class="container bg-grey ">
        <div id="root">
            <div class="Toastify"></div>
            <div class="text-primary overflow-auto">
                <div class="container-fluid">
                    <div class="min-vh-100 justify-content-center py-4 g-0 row">
                        <div class="my-auto mx-center col-lg-3 col-md-4 col-sm-6">
                            <div class="mx-auto text-center">
                                <div draggable="false" class="anti-image">
                                    <img src="images/APlogosBig3.png" alt="" class="ant-image text-center" style="max-width: 200px">
                                </div>
                            </div>
                            <div class="align-center mt-1 font600 text-uppercase text-md mb-4 mt-3">
                                <p class="FS-4 text-center text-white">Posta Uganda System</p>
                            </div>
                            <div role="alert" class="fade text-md text-uppercase text-center p-3 font500 rounded shadow-sm alert-info show">
                                To reset your default or for gotten password,Enter your <strong> USERNAME</strong> and a password reset will be sent to your email.
                            </div>
                            <div class="bg-white rounded shadow-sm card">
                                <div class="py-3 border-dark text-black fw-bold d-block text-center  rounded-top card-header">RESET YOUR PASSWORD</div>
                                <div class="card-body">
                                    <form action="">
                                        <div class="form-group mb-2">
                                            <label class="font500 text-muted mb-1 form-lable" for="username">
                                                <span class="text-black">Enter Your username</span>
                                                <strong class="text-danger ms-1">*</strong>
                                            </label>
                                            <div>
                                                <input type="text" name="username" autocomplete="off" id="username" class="form-control-sm text-sm font500 w-100 rounded-0 null from-control" value>
                                            </div>
                                        </div>
                                        <button style="align-content :center" type="submit" class="text-uppercase text-white text-sm w100 fw-normal btn btn-danger btn3-sm">
                                            REQUEST TOKEN
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="mt-3 mb-0 text-center text-sm font600">
                                <span class="text-dark"> Have an account?</span>
                                <button type="button" class="text-sm fw-bold btn btn-link"> <a href="logIn.php" class="text-white">Sign in here</a> </button>
                            </div>
                            <div class="mt-3 mb-0 text-center text-sm font600">
                                <span class="text-dark"> Have an Adimn Token?</span>
                                <button type="button" class="text-sm fw-bold btn btn-link"><a href="token.php" class="text-white"> change password</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
