<?php
    require("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProDocs | Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.1.2/tailwind.min.css"> 
</head>
<body class="font-mono bg-gray-400">
    <!-- Container -->
    <div class="container mx-auto">
        <div class="flex justify-center items-center h-screen px-6">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <!-- Col -->
                <div
                    class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
                    style="background-image: url('img/medicine-min.jpg')"
                ></div>
                <!-- Col -->
                <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <h3 class="pt-4 text-2xl text-center">Welcome to <span style="color: #001661;">Prodocs</span>!</h3>
                    <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" method="POST">
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="username">
                                Username
                            </label>
                            <input
                                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="username"
                                type="text"
                                placeholder="Enter Username"
                                name="username"
                                required
                            />
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                Password
                            </label>
                            <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Enter Password" required name="password"/>
                        </div>
                        <div class="mb-4">
                            <input class="mr-2 leading-tight" type="checkbox" id="checkbox_id" />
                            <label class="text-sm" for="checkbox_id">
                                Remember Me
                            </label>
                        </div>
                        <div class="mb-6 text-center">
                            <button class="w-full px-4 py-2 font-bold text-white rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="submit" name="signin" style="background: #001661;">
                                Login
                            </button>
                        </div>
                        <hr class="mb-6 border-t" />
                        <!-- <div class="text-center">
                            <a
                                class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                href="/forgot-password.php"
                            >
                                Forgot Password?
                            </a>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php
        if(isset($_POST['signin'])){
            $query = "SELECT * FROM `users` WHERE `name`='$_POST[username]' AND `password`='$_POST[password]'";
            $result = mysqli_query($con,$query);

            if(mysqli_num_rows($result) == 1){
                session_start();
                $_SESSION['adminLoginId']=$_POST['username'];
                header("location:dashboard.php");
            }else{
                echo "<script>alert('Incorrect Username or Password.');</script>";
            }
        }
    ?>
</body>
</html>