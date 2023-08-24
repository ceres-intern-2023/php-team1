<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
      <div class="flex">
        <div id="left status" class="w-2/12 h-screen bg-blue-200 text-gray-800">
          <!-- プロフィール -->
          <div class="flex flex-col justify-center pt-8 gap-1">
            <img src="/f_f_object_109_s128_f_object_109_1nbg.png" alt="" class="w-24 m-auto">
            <p class="text-2xl font-bold text-center">テスト<span class="text-sm font-normal">さん</span></p>
            <p class="text-lg text-center">58:おとこ</p>
            <p class="text-lg text-center">現在<span></span> 111ポイント</p>

          </div>

          <!-- 投稿一覧 -->
          <div>
            <ul class="text-center flex flex-col gap-1 pt-6">
              <li>投稿1</li>
              <li>投稿2</li>
              <li>投稿3</li>
            </ul>
            

          </div>
        </div>

        <div id="center main" class="w-8/12 h-screen bg-white">
            <h2 class="text-center pt-16 text-3xl font-bold">ものまね音声を登録する</h2>
            <div class="w-8/12 m-auto mt-6">
              <label for="">音声URLを登録してください</label>
                <x-input id="email" class="block mt-1 w-full border-2 border-black py-1" type="email" name="email" :value="old('email')" required autofocus />
                <x-button class="mt-4">
                    {{ __('投稿する') }}
                </x-button>
            </div>

        </div>

        <div id="right ranking" class="w-2/12 h-screen bg-blue-200 text-gray-800">
          <p class="text-2xl font-bold text-center pt-8">ランキング</p>

            

            

        </div>
        </div>
    </body>
</html>
