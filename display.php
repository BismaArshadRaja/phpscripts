<?php
include 'connect.php';
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
    <div>
        <button class="bg-blue-500 p-2 px-4 mt-10 rounded-lg text-white ml-10 cursor-pointer hover:bg-blue-700"><a href="tabledata.php">Add user</a></button>
        <table class="mx-auto mt-10 w-4/5 border border-black">
            <thead>
                <tr>
                    <th class="border border-black p-2 px-4">ID</th>
                    <th class="border border-black p-2 px-4">Name</th>
                    <th class="border border-black p-2 px-4">Email</th>
                    <th class="border border-black p-2 px-4">Mobile</th>
                    <th class="border border-black p-2 px-4">Password</th>
                    <th class="border border-black p-2 px-4">Actions</th>
                </tr>
                </thead>
                <tbody>
                   <?php
                    $sql = "SELECT * FROM `curdoper`";
                    $result = mysqli_query($con, $sql);
                    if (!$result) {
                    die("Query Failed: " . mysqli_error($con));
                    }
                    while($row = mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $name=$row['name'];
                        $email=$row['email'];   
                        $mobile=$row['mobile'];
                        $password=$row['password'];
                       echo "<tr>
                         <th class='border border-black p-2'>{$row['id']}</th>
                         <td class='border border-black p-2'>{$row['name']}</td>
                         <td class='border border-black p-2'>{$row['email']}</td>
                         <td class='border border-black p-2'>{$row['mobile']}</td>
                         <td class='border border-black p-2'>{$row['password']}</td>
                         <td class='border p-2 gap-2 flex justify-center items-center'>
                         <button class='bg-blue-500 p-2 px-4 rounded-lg text-white cursor-pointer hover:bg-blue-600'>
                         <a href='update.php?updateid={$id}'>Update</a>
                         </button>
                         <button class='bg-blue-500 p-2 px-4 rounded-lg text-white cursor-pointer hover:bg-blue-600'>
                         <a href='delete.php?deleteid={$id}'>Delete</a>
                         </button>
                          </td>
                         </tr>";
                        }
                   ?>
                </tbody>
                
        </table>
    </div>    
</body>
</html>