<div class="h-full right-0 left-0 m-auto grid grid-cols-12 items-center">
    <div class="col-span-2 ">
        <a href=" {{route('home')}} " class="flex items-center justify-center"> 
        <img src=" {{asset('/public/img/grobaklogo.png')}}" class="w-12 mr-6" alt=""> 
        <p class="text-red text-xl">grobak</p></a> 
         
    </div>
    <div class="col-span-10 flex items-center justify-end mr-12">
         <div class="flex items-center mr-6">
             @if (Auth::user())
                 <img src=" {{asset('/img/profile.jpg')}} " class="rounded-full w-8 mr-3" alt="">
                 <p class="mr-6"> {{Auth::user()->username}} </p>    
                 <img src=" {{asset('img/bell-solid.svg')}} " class="w-3" alt="">
             @else
                 <a href=" {{route('login')}} " class="mr-3">Login</a>
                 <a href=" {{route('register')}} " class="mr-3">Register</a>
             @endif
         </div>
    </div>
 </div>
 <hr class="w-full">