<?php
session_start();
include '../connection.php';
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
                    secondary: '#E80505',
                    bodyUser: '#F2F5F9',
                    btnDark: '#EBF2FA',
                    listMenu: '#E1E8EF',
                    boxListMenu: '#F2F7FC'
                },
                keyframes: {
                    bounce: {
                        '0%, 100%': {
                            transform: 'translateY(0)',
                            animationTimingFunction: 'cubic-bezier(0.8, 0, 1, 1)'
                        },
                        '50%': {
                            transform: 'translateY(-10%)',
                            animationTimingFunction: 'cubic-bezier(0, 0, 0.2, 1)'
                        },
                    },
                    fadeIn: {
                        '0%': {
                            opacity: '0'
                        },
                        '100%': {
                            opacity: '1'
                        },
                    },
                    rotate: {
                        '0%': {
                            transform: 'rotate(0deg)'
                        },
                        '100%': {
                            transform: 'rotate(360deg)'
                        },
                    },
                    pulse: {
                        '0%, 100%': {
                            transform: 'scale(1)',
                            opacity: '1'
                        },
                        '50%': {
                            transform: 'scale(1.05)',
                            opacity: '0.8'
                        },
                    },
                    slideIn: {
                        '0%': {
                            transform: 'translateX(-100%)',
                            opacity: '0'
                        },
                        '100%': {
                            transform: 'translateX(0)',
                            opacity: '1'
                        },
                    },
                    shake: {
                        '0%, 100%': {
                            transform: 'translateX(0)'
                        },
                        '10%, 30%, 50%, 70%, 90%': {
                            transform: 'translateX(-5px)'
                        },
                        '20%, 40%, 60%, 80%': {
                            transform: 'translateX(5px)'
                        },
                    },
                    wiggle: {
                        '0%, 100%': {
                            transform: 'rotate(0deg)'
                        },
                        '25%': {
                            transform: 'rotate(5deg)'
                        },
                        '75%': {
                            transform: 'rotate(-5deg)'
                        },
                    }
                },
                animation: {
                    bounce: 'bounce 1s infinite',
                    fadeIn: 'fadeIn 1s ease-in-out',
                    rotate: 'rotate 2s linear infinite',
                    pulse: 'pulse 1.5s ease-in-out infinite',
                    slideIn: 'slideIn 0.5s ease-out forwards',
                    shake: 'shake 0.5s ease-in-out infinite',
                    wiggle: 'wiggle 1s ease-in-out infinite',
                }
            },

            container: {
                center: true,
                padding: '1rem'
            }
        }
    }
    </script>
</head>

<body class="bg-bodyUser">
    <div class="wrapper ">
        <?php include '../inc/navbar-user.php' ?>
        <div class="content">
            <?php
                if (isset($_GET['pg'])) {
                    if (file_exists('../content/' . $_GET['pg'] . '.php')) {
                        include '../content/' . $_GET['pg'] . '.php';
                    }
                } else {
                    include '../content/user.php';
                }
                ?>
        </div>
        <?php include '../inc/footer.php' ?>
    </div>
</body>

</html>