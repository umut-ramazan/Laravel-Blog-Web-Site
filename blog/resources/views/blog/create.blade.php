@extends('layouts.app')
@section('content')
 <div class="w-4/5 m-auto text-center">
    <div class="py-15 ">
        <h1 class=" text-6xl">
             Posts Oluşturma
        </h1>
    </div>
</div>
 @if($errors->any())

    <div class="w-4/5 m-auto">
        <ul>
            @foreach ( $errors->all() as $error )
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4 ">
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>

 @endif

<div class="w-4/5 m-auto pt-20">
    <form action="/blog" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="Başlık.." class=" bg-transparent block border-b-2 w-full h-20 text-6xl outline-none" required>
        <textarea name="description" placeholder="Açıklama" class="py-20  bg-transparent block border-b-2 w-full j-60 text-xl outline-none" required></textarea>
        <div class="bg-grey-lighter pt-15">
            <label for="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer" >
                <span class="mt-2 text-base leading-normal">
                    Resim Seç

                </span>
                <input type="file" name="image" >
            </label>

        </div>
        <button type="submit" class=" uppercase mt-15 bg-blue-500 text-gray-100  font-extrabold py-4 px-8 rounded-3xl " >
            Postu Oluştur
        </button>
    </form>
</div>


@endsection
