<div class="col-span-2 shadow-inner h-full flex flex-col items-center pt-6 w-full">
    <div class="flex flex-col items-center mb-4">
        <img src=" {{asset('/img/profile.jpg')}}" class="rounded-full w-20 my-4" alt=""> <!-- Keknya harus dibuat kotak fotnya pakai intervention -->
        <p class="text-red"> {{Auth::user()->username}} </p>
    </div>
    <hr class="  w-full mb-4">
    <div class="w-full">
        <div class="flex flex-col items-center">
            <p>Actions</p>
            <nav class="flex flex-col md:block md:pb-0 md:overflow-y-auto">
                <a class="block text-center px-8 py-2 mt-2 text-sm font-semibold text-gray-800 hover:text-red" href="#">Bahan Baku</a>
                <a class="block text-center px-8 py-2 mt-2 text-sm font-semibold text-gray-800 hover:text-red" href="#">Resep</a>
                <a class="block text-center px-8 py-2 mt-2 text-sm font-semibold text-gray-800 hover:text-red" href="#">Tentang Kami</a>
                <a class="block text-center px-8 py-2 mt-2 text-sm font-semibold text-gray-800 hover:text-red" href="#">Keluar</a>
                <a class="block text-center px-8 py-2 mt-2 text-sm font-semibold text-gray-800 hover:text-red" href="#">Re-stock Sparepart</a>
                <a class="block text-center px-8 py-2 mt-2 text-sm font-semibold text-gray-800 hover:text-red" href="#">Kirim Sparepart</a>
                <a class="block text-center px-8 py-2 mt-2 text-sm font-semibold text-gray-800 hover:text-red" href="#">Stock Sparepart</a>
                <a class="block text-center px-8 py-2 mt-2 text-sm font-semibold text-gray-800 hover:text-red" href="#">Terima Sparepart</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="block text-center px-8 py-2 mt-2 text-sm font-semibold text-gray-800 hover:text-red">
                    Logout
                </a>    
                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                
            </nav>
        </div>
    </div>
</div>