<?php
include 'connect.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "INSERT INTO curdoper (name, email, mobile, password)
            VALUES ('$name', '$email', '$mobile', '$password')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Data inserted successfully";
    } else {
        die(mysqli_error($con));
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Curd Operations</title>
</head>
<body>

<div class="justify-center items-center flex flex-col h-screen bg-white">
    <form method="post" action="">

            <h4 class="font-bold text-2xl mb-12">Fill the Forms
            <div class="flex flex-col gap-2 mb-2">
                <label class="font-semibold text-blue-500" for="name">Name
                </label>
                <input class="border border-blue-500 hover:border-blue-600 text-black w-96 h-12 rounded-lg focus:border-blue-500 focus:outline-none p-2" type="text" placeholder="" name="name">
            </div>
            <div class="flex flex-col gap-2 mb-2"> 
                <label class="font-semibold text-blue-500" for="email">Email
                </label>
                <input class="border border-blue-500 hover:border-blue-600 text-black w-96 h-12 rounded-lg focus:border-blue-500 focus:outline-none p-2" type="email" placeholder="" name="email">
            </div>
            <div class="flex flex-col gap-2 mb-2">
                <label class="font-semibold text-blue-500" for="phone">Mobile
                </label>
                <input class="border border-blue-500 hover:border-blue-600 text-black w-96 h-12 rounded-lg focus:border-blue-500 focus:outline-none p-2" type="number" placeholder="" name="mobile">
            </div>
            <div class="flex flex-col gap-2 mb-2">
                <label class="font-semibold text-blue-500" for="password">Password
                </label>
                <input class="border border-blue-500 hover:border-blue-600 text-black w-96 h-12 rounded-lg focus:border-blue-500 focus:outline-none p-2" type="passwprd" placeholder="" name="password">
            </div>
            <div class="flex flex-col mt-6">
                <button class="border border-blue-400 bg-blue-600 text-white p-2 px-4 rounded-xl cursor-pointer hover:bg-blue-700" name="submit" >Submit</button>
            </div>
        </form>
    </div>
</body>
</html>