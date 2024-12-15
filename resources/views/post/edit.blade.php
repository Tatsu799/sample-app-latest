<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編集画面</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-lg">
        <h1 class="text-2xl font-bold mb-4">編集画面</h1>
        <!-- <p class="text-gray-600 mb-6">ここに投稿フォームを作成できます。</p> -->
        <form method="POST" method="{{ route('posts.update', $post->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="text" class="block text-sm font-medium text-gray-700">投稿編集</label>
                <textarea id="text" name="text" rows="4"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('text', $post->text) }}</textarea>
            </div>
            <button id="update-btn" type="submit"
                class="w-full bg-indigo-900 text-white py-2 rounded-md hover:bg-indigo-800 focus:ring-4 focus:ring-indigo-800 focus:ring-opacity-50">
                編集
            </button>
        </form>
        <form method="POST" method="{{ route('posts.delete', $post->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="w-full bg-indigo-900 text-white py-2 mt-4 rounded-md hover:bg-indigo-800 focus:ring-4 focus:ring-indigo-800 focus:ring-opacity-50" onclick="return confirm('本当に削除しますか？')">
                削除
            </button>
        </form>
        {{-- <form method="GET" method="{{ route('posts.back') }}">
            @csrf
            @method('PATCH')
            <button type="submit"
                class="w-full bg-indigo-900 text-white py-2 mt-4 rounded-md hover:bg-indigo-800 focus:ring-4 focus:ring-indigo-800 focus:ring-opacity-50" onclick="return confirm('本当に削除しますか？')">
                削除
            </button>
        </form> --}}
    </div>
</body>

</html>
