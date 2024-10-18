<?php
// include '../controller/login-controller.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    clifford: '#da373d',
                    primary: '#FF9C1A',
                    secondary: '#E80505'
                }
            },
            container: {
                center: true
            }
        }
    }
    </script>
</head>

<body>
    <div class="wrapper">
        <div class="container h-[100vh] flex justify-center items-center">
            <div
                class="card-login bg-gradient-to-r w-1/2 rounded-xl from-primary to-secondary shadow-lg shadow-primary">
                <div class="login p-5">
                    <div class="title text-center">
                        <h1 class="text-4xl mb-5 text-white">Register Page</h1>
                    </div>
                    <form action="../controller/register-controller.php" method="post">
                        <div class="email flex flex-col mb-3">
                            <label for="" class="text-lg mb-3 text-white">Username</label>
                            <input type="text" class="py-2 px-3 rounded-lg" name="name" placeholder="your Name">
                        </div>
                        <div class="email flex flex-col mb-3">
                            <label for="" class="text-lg mb-3 text-white">Email</label>
                            <input type="text" class="py-2 px-3 rounded-lg" name="email" placeholder="your email">
                        </div>
                        <div class="password flex flex-col mb-5">
                            <label for="" class="text-lg mb-3 text-white">Password</label>
                            <input type="password" class="py-2 px-3 rounded-lg" name="password" placeholder="Your Pass">
                            <a href="" class="text-sm flex justify-end text-white italic">Forget Pass?</a>
                        </div>
                        <div class="btn-cta flex justify-center flex-col mt-10">
                            <button type="submit" name="regis"
                                class="bg-primary text-center shadow-xl px-10 py-2 rounded-xl text-white text-xl">Register</button>
                            <span class="text-center text-sm text-white italic">Already have an account? <a
                                    href="login.php" class="text-sm text-white italic">Sign Up</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>