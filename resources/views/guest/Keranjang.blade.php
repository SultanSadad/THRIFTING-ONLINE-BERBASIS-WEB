@extends('layout.main')
@section('main')

<div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow-md mt-28">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Column 1: Product Details -->
        <div class="lg:col-span-2">
            <h1 class="text-2xl font-bold mb-6">TAS BELANJA</h1>
            <div class="flex mb-8">
                <img src="/image/item/converse.png" alt="Product Image" class="w-44 h-44 object-cover rounded-lg shadow-md mr-4">
                <div class="flex flex-col justify-between">
                    <div>
                        <h2 class="text-lg font-bold">Converse All Star Low</h2>
                        <p class="text-gray-700">Rp 500.900</p>
                        <p class="text-gray-500">Ukuran: 40 </p>
                    </div>
                    <div class="flex mt-2 justify-end">
                        <button class="text-red-500 underline">Hapus</button>
                    </div>
                </div>
            </div>
            <div class="flex mb-8">
                <img src="/image/item/converse.png" alt="Product Image" class="w-44 h-44 object-cover rounded-lg shadow-md mr-4">
                <div class="flex flex-col justify-between">
                    <div>
                        <h2 class="text-lg font-bold">Converse All Star Low</h2>
                        <p class="text-gray-700">Rp 500.900</p>
                        <p class="text-gray-500">Ukuran: 40 </p>
                    </div>
                    <div class="flex mt-2 justify-end">
                        <button class="text-red-500 underline">Hapus</button>
                    </div>
                </div>
            </div>
            <div class="flex mb-8">
                <img src="/image/item/converse.png" alt="Product Image" class="w-44 h-44 object-cover rounded-lg shadow-md mr-4">
                <div class="flex flex-col justify-between">
                    <div>
                        <h2 class="text-lg font-bold">Converse All Star Low</h2>
                        <p class="text-gray-700">Rp 500.900</p>
                        <p class="text-gray-500">Ukuran: 40 </p>
                    </div>
                    <div class="flex mt-2 justify-end">
                    </div>
                </div>
            </div>

        </div>
        <!-- Column 2: Summary -->
        <div class="">
            <h2 class="text-xl font-bold mb-4 mt-10">RINGKASAN</h2>
            <div class="flex justify-between mb-2">
                <p class="text-gray-600">Converse All Star Low</p>
                <p class="text-gray-600">Rp 500,000</p>
            </div>
            <div class="flex justify-between mb-2">
                <p class="text-gray-600">Vans Sk8 Low</p>
                <p class="text-gray-600">Rp 500,000</p>
            </div>
            <div class="flex justify-between mb-2">
                <p class="text-gray-600">Nike Dunk Low</p>
                <p class="text-gray-600">Rp 700,000</p>
            </div>
            <div class="flex justify-between mb-6">
                <p class="text-lg font-bold">Total</p>
                <p class="text-lg font-bold">Rp 1.700.000</p>
            </div>
            <button class="w-full bg-black text-white py-3 rounded-lg shadow-md hover:bg-gray-800 transition duration-300" onclick="my_modal_4.showModal()">Pembayaran</button>
            <!-- You can open the modal using ID.showModal() method -->

            <dialog id="my_modal_4" class="modal">
                <div class="modal-box max-w-1xl">
                    <h3 class="font-bold text-lg text-center">Pembayaran</h3>
                    <input type="text" placeholder="" class="input input-bordered w-full max-w-full mt-3" />
                    <input type="text" placeholder="" class="input input-bordered w-full max-w-full mt-3" />
                    <input type="text" placeholder="" class="input input-bordered w-full max-w-full mt-3" />
                    <input type="text" placeholder="" class="input input-bordered w-full max-w-full mt-3" />
                    <select class="select select-bordered w-full max-w-full mt-3">
                        <option disabled selected>Pilih metode pembayaran</option>
                        <option>COD</option>
                        <option>Transfer</option>
                    </select>
                    <input type="file" class="file-input file-input-bordered file-input-md w-full max-w-full mt-3" />
                    <div class="modal-action">
                        <form method="dialog">
                            <!-- if there is a button, it will close the modal -->
                            <button class="btn">Close</button>
                        </form>
                    </div>
                </div>
            </dialog>
            <p class="text-gray-500 text-sm mt-4">
            Untuk melakukan transfer, Anda dapat menggunakan Bank BSI dengan nomor rekening <span class="underline">7201025978</>
            </p>
        </div>
    </div>
</div>

@endsection