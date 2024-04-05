<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
    <title>Rentalflo</title>

</head>
<body class="font-aab">
    <nav class="bg-white-800 flex justify-between">
        <img src="images/login.png" class="h-14 pt-1 px-24 pl-60" alt="">
        <ul class="px-48 py-8 flex space-x-16 justify-end pr-80 font-bold">
            <li class="cursor-pointer text-green-600  font-weight-bold">Home</li>
            <li class="cursor-pointer text-purple-800">Feature</li>
            <li class="cursor-pointer text-purple-800">FAQ</li>
            <li class="cursor-pointer text-purple-800">Contact</li>
            <li class="cursor-pointer text-purple-800"><a href="{{route('login')}}">Login</a></li>
            {{-- <li class="cursor-pointer text-purple-800"><a href="{{route('loginpage')}}">Login</a></li> --}}
            <li class="cursor-pointer bg-purple-800 text-white  w-28   h-12 pt-3 pl-3 rounded-lg"> <a href="{{route('registration')}}">Free Signup </a> </li>

        </ul>
    </nav>

    <main class=" flex">

    <div class=" h-96 py-80 pl-60 ">
        <div>
            <p class="">Property Management System</p>
            <h1 class=" text-5xl text-purple-800 my-4 font-bold ">Manage Your Rental</h1>
            <h1 class=" text-5xl text-purple-800  my-4 font-bold ">Properties</h1>
            <p class=" my-2">Get free from hassle of managing your tenanats and <br>
               Properties.Maintain you property data efficiently.  <br>
            </p>
            <div class=" bg-purple-800 text-white w-36 h-12 pt-2 pl-2  my-5 font-bold rounded-lg">
             {{-- <a href="register"  >Free Signup -> </a></p> --}}
             <a href="{{route('registration')}}"  >Free Signup -> </a></p>
            </div>
        </div>
    </div>
        <div>
            <img src="images/home.png" class=" pt-12 pl-96" alt="">
        </div>



   </main>

</body>
</html>
