<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Bootstrap -->
    <link href="Content/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="Content/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="Content/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="Content/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="Content/build/css/custom.min.css" rel="stylesheet">
</head>
<body class="login">
    <div>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    @using (Html.BeginForm("Login", "Login", FormMethod.Post))
                    {
                        <h1>Login Form</h1>
                        <div>
                            @Html.TextBoxFor(model => model.UserName, new { @class = "form-control", @autofocus = "autofocus" })
                        </div>
                        <div>
                            @Html.PasswordFor(model => model.PassWord, new { @class = "form-control" })

                        </div>
                        <div>
                            <label>
                                @Html.CheckBoxFor(model => model.RememberMe) RememberMe
                            </label>
                        </div>
                        <button type="submit" class="btn-block">Login</button>
                        <div class="clearfix"></div>
                    }
                    <div>
                        @Html.ActionLink("Click to Signup", "Signup")
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>
</html>
