
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
</head>
<body class="bg-purple-100">
    <h1><a href="/" class="text-white w-16 h-6 rounded bg-purple-700">home </a></h1>
    <main >
<div class=" mt-7 flex justify-center " >
<form action="{{route('storedata')}}" method="POST" class="bg-slate-100 w-475 h-800   p-5   ">
    @csrf
    <img src="images/registration.png" class="h-20 pl-14 pt-2 " alt="">
   <div class="mt-6">
    Register
   </div>
   <div class="mt-2">
    Create New RENTALFLO Account
   </div>
    <div class="sm:col-span-4 mt-4">
        <label for="firstname" class="block text-sm font-medium leading-6 text-gray-900 pl-2 after:content-['*'] after:text-red-500">First Name</label>
        <div class="mt-2">
          <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
            <input type="text" name="firstname" id="firstname" autocomplete="username" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Enter your first name">
          </div>
          {{-- error msg --}}
          @error('firstname')
              <span class="text-red-500">{{$message}}</span>
            @enderror
        </div>
      </div>
      <div class="sm:col-span-4 mt-6">
        <label for="lastname" class="block text-sm font-medium leading-6 text-gray-900 pl-2 after:content-['*'] after:text-red-500">Last Name</label>
        <div class="mt-2">
          <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
            <input type="text" name="lastname" id="lastname" autocomplete="username" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Enter your last name">
          </div>
                    {{-- error msg --}}
                    @error('lasttname')
                    <span class="text-red-500">{{$message}}</span>
                  @enderror
        </div>
      </div>
      <div class="sm:col-span-4 mt-6">
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900 pl-2 after:content-['*'] after:text-red-500">Email</label>
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
        <label for="password" class="block text-sm font-medium leading-6 text-gray-900 pl-2 after:content-['*'] after:text-red-500">Password</label>
        <div class="mt-2">
          <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
            <input type="password" name="password" id="username" autocomplete="username" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Enter your password">
          </div>
                    {{-- error msg --}}
                    @error('password')
                    <span class="text-red-500">{{$message}}</span>
                  @enderror
        </div>
      </div>


    <input id="terms" type="checkbox" value="" class=" mt-6 w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
    <label for="terms" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree to RENTALFLO <a href="#" class="text-blue-600 hover:underline dark:text-blue-500 after:content-['*'] after:text-red-500">Privacy Policy & Term</a></label>

    <div class="pl-5 mt-6 ">
    <input type="submit" value="Register" name="register" class="cursor-pointer bg-purple-700 text-white font-bold rounded-lg h-12 w-420 "> <br> <br>
    </div>

    <div class="mt-2 text-lg font-bold">

    <a href="{{route('login')}}" class="text-blue-600 hover:underline dark:text-blue-500 ">Already have an account? Sing in instead </a>

    </div>

    @if (session()->has('success'))
      <span class="text-green-500">
        {{session('success')}}
      </span>
    @endif
</form>

</div>
</main>


</body>
</html>

