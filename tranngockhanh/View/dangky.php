<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form</title>
    <!-- Font Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css" />
</head>

<style>
    body {
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        background: #f2f2f2;
    }

    .form_wrapper {
        background: #fff;
        max-width: 400px;
        margin: 8% auto 0;
        margin-top: 50px;
        margin-bottom: 50px;
        padding: 25px;
        position: relative;
        z-index: 1;
        border-top: 5px solid #ff0000;
        box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        text-align: center;
        animation: expand 0.8s 0.6s ease-out forwards;
        opacity: 0;
    }

    .form_wrapper h2 {
        font-size: 1.5em;
        line-height: 1.5em;
        margin: 0;
    }

    .title_container {
        text-align: center;
        padding-bottom: 15px;
    }

    .input_field {
        position: relative;
        margin-bottom: 20px;
    }

    .input_field input {
        width: calc(100% - 24px);
        /* Adjusted width to accommodate the icon */
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        outline: none;
        transition: all 0.30s ease-in-out;
    }

    .input_field span {
        position: absolute;
        left: 5px;
        top: 50%;
        transform: translateY(-50%);
        color: #333;
    }

    button {
        background: #ff0000;
        height: 35px;
        line-height: 35px;
        width: 100%;
        border: none;
        outline: none;
        cursor: pointer;
        color: #fff;
        font-size: 1.1em;
        margin-bottom: 10px;
        border-radius: 5px;
        transition: background 0.3s ease;
    }

    button:hover {
        background: darken(#ff0000, 7%);
    }

    button:focus {
        background: darken(#ff0000, 7%);
    }

    @keyframes expand {
        0% {
            transform: scale(1, 0);
            opacity: 0;
        }

        100% {
            transform: scale(1, 1);
            opacity: 1;
        }
    }
</style>

<body>
    <div class="form_wrapper">
        <div class="form_container">
            <div class="title_container">
                <h2>Registration Form</h2>
            </div>
            <div class="row clearfix">
                <div class="">
                    <form action="index.php?action=dangky&act=dangky_action" method="post" class="form" role="form">
                        <div class="row clearfix">
                            <div class="col_half">
                                <div class="input_field">
                                    <input class="form-control" type="text" id="name" name="name" placeholder="Name" required="" autofocus="" type="text" />
                                </div>
                            </div>
                            <div class="col_half">
                                <div class="input_field">
                                    <input class="form-control" type="text" id="username" name="username" placeholder="Username" required="" autofocus="" type="text" />
                                </div>
                            </div>
                        </div>
                        <div class="input_field">
                            <input class="form-control" id="address" name="address" placeholder="Address" required="" autofocus="" type="text" />
                        </div>
                        <div class="input_field">
                            <input class="form-control" id="phone" name="phone" placeholder="Phone Number" required="" autofocus="" type="text" />
                        </div>
                        <div class="input_field">
                            <input class="form-control" id="email" name="email" placeholder="Email" required="" type="email" />
                        </div>
                        <div class="input_field">
                            <input class="form-control" type="password" id="password" name="pass" placeholder="Password" required />
                        </div>
                        <div class="input_field">
                            <input class="form-control" type="password" id="confirm_password" name="confirm_pass" placeholder="Re-type Password" required />
                        </div>
                        <button type="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>