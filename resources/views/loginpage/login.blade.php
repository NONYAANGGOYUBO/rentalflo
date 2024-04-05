
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
    <title>Rentalflo SignUp</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-purple-100">
    <h1><a href="/" class="text-white w-16 h-6 rounded bg-purple-700">home </a></h1>
    <h1><a href="{{route('districtlist')}}" class="text-white w-16 h-6 rounded bg-purple-700">district </a></h1>
    <main >
<div class=" mt-7 flex justify-center " >
<form action="{{route('logedin')}}" method="POST" class="bg-slate-100 w-475 h-128   p-5   ">
    @csrf
    <img src="images/login.png" class="h-20 pl-14 pt-2 " alt="">
   <div class="mt-6 text-lg font-bold">
    sign-in
   </div>
   <div class="mt-2">
    Access the RENTALFLO portal using your email and <br>
     password.
   </div>

      <div class="sm:col-span-4 mt-6">
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900 pl-2 ">Email</label>
        <div class="mt-2">
          <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
            <input type="email" name="email" id="email" autocomplete="username" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Enter your email">
          </div>
                    {{-- error msg --}}
                    @error('email')
                    <span class="text-red-500">{{$message}}</span>
                  @enderror
        </div>
      </div>
      <div class="sm:col-span-4 mt-6">
        <label for="password" class="block text-sm font-medium leading-6 text-gray-900 pl-2 ">Password</label>
        <div class="mt-2">
          <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
            <input type="password" name="password" id="password" autocomplete="username" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Enter your password ">
            {{-- <i class="fa-solid fa-eye  mt-3 pr-3" id="showpassword"  ></i> --}}
          </div>
                    {{-- error msg --}}
                    @error('password')
                    <span class="text-red-500">{{$message}}</span>
                  @enderror
        </div>
      </div>

      <div class="pl-2 mt-6 ">
        <input type="submit" value="login" name="register" class="cursor-pointer bg-purple-700 text-white font-bold rounded-lg h-12 w-420 "> <br> <br>
      </div>




    <div class="flex justify-center">
        <h1>-OR-</h1>
    </div>

    <div class="pl-5 mt-2 ">
        <input type="text" value="Sign in with google" name="register" class="cursor-pointer bg-red-500 text-white font-bold rounded-lg h-12 w-370 pl-32 "> <br> <br>
        </div>
    <div class="mt-2 text-lg ">
        <a href="{{route('registration')}}" class="flex justify-center ">  New on our platform? Create an account</a>
    </div>

    @if (session()->has('success'))
      <span class="text-green-500">
        {{session('success')}}
      </span>
    @endif
    @if (session()->has('failed'))
      <span class="text-red-500">
        {{session('failed')}}
      </span>
    @endif
</form>

</div>
</main>

{{-- <script>

    const showpass = document.querySelector
    ("#showpassword");
    const passwordfield = document.querySelector
    ("#password");

    showpass.addEventListener("click",function(){
        this.classList.toggle("fa-eye-slash");
    })
    </script> --}}
</body>
</html>


