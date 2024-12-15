<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿一覧</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/getPostsData.js', 'resources/js/postData.js'])
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        {{-- 追加 --}}
        <div class="bg-white p-8 mb-10 rounded shadow-md w-full mx-auto max-w-lg">
            <p class="text-gray-600 mb-6">投稿してみよう！</p>
            <form id="post-form" method="POST" action={{ route('posts.store') }}>
                @csrf
                <div class="mb-4">
                    {{-- <label for="post" class="block text-sm font-medium text-gray-700">投稿内容</label> --}}
                    <textarea id="text" name="text" rows="4"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
                </div>
                <button id="post-btn" type="submit"
                    class="w-full bg-indigo-900 text-white py-2 rounded-md hover:bg-indigo-800 focus:ring-4 focus:ring-indigo-800 focus:ring-opacity-50">
                    投稿
                </button>
            </form>
        </div>

        {{-- 追加 --}}

        <h1 class="text-2xl font-semibold text-center mb-8">投稿一覧</h1>
        {{-- @foreach ($posts as $post) --}}
        <div id="postList"></div>
        {{-- <div class="max-w-lg mx-auto pb-6">
            <div class=" bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition duration-200"> --}}
                {{-- <h2 class="text-xl font-bold text-gray-800">title</h2> --}}
                {{-- <p id="content" class="text-gray-600 mt-2">{{ $post->text}}</p> --}}
                {{-- <p id="content" class="text-gray-600 mt-2"></p>
                <span class="text-sm text-gray-500">{{ $post->created_at->format('Y-m-d H:i') }}</span>
            </div>
        </div> --}}
        {{-- @endforeach --}}

    </div>
</body>

</html>


{{-- <x-app-layout>
    <div class='max-w-xl mx-auto p-4'>
        @if(session('message'))
            <div class="w-full bg-red-100 text-red-400 p-2 mb-6 rounded">
                {{ session('message') }}
            </div>
        @endif
        <form method="POST" action="{{ route('posts.store')}}">
            @csrf
            <div class='flex'>
                <x-text-input name="content" placeholder="What's Happening?" class="w-full"></x-text-input>
                <x-primary-button class='ml-px'>Post</x-primary-button>
            </div>
            <div>
                <x-input-error :messages="$errors->get('content')"></x-input-error>
            </div>
        </form>
        <div class='mt-6'>
            @foreach ($posts as $post)
            <div class='mt-2 p-6 bg-white border-2 border-b-gray-400 rounded-t flex justify-between'>
                <div>
                    <span class='text-gray-600'>{{ $post->user->name }}</span>
                    {{-- <div class='mt-l text-lg'>{{ $post->content }}</div> --}}
                    {{-- <div class='mt-l text-lg'>
                        {{ $post->content }}
                        @unless ($post->created_at->eq($post->updated_at))
                        <span class='text-sm text-grey-600 ml-auto'>(edited)</span>
                        @endunless
                    </div>

                    <div>
                        @if ($post->isLikedBy(auth()->user()))
                            <form action="{{ route('posts.unlike', $post)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">いいねを取り消す</button>
                            </form>
                        @else
                        <form action="{{ route('posts.like', $post)}}" method="POST">
                            @csrf
                            <button type="submit">いいね</button>
                        </form>
                        @endif
                        <p>いいね数: {{ $post->Likes->count() }}</p>
                    </div>
                </div>
                @if ($post->user->is(auth()->user()))
                <div class='ml-auto mt-auto'>
                    <form method="GET" action="{{ route('posts.edit', $post) }}">
                        <x-secondary-button type='submit'>Edit</x-secondary-button>
                    </form>
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout> --}}
 {{-- }} --}}
