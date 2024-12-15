<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編集画面</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-lg">
        <h1 class="text-2xl font-bold mb-4">編集画面</h1>
        <!-- <p class="text-gray-600 mb-6">ここに投稿フォームを作成できます。</p> -->
        <form>
            <div class="mb-4">
                <label for="post" class="block text-sm font-medium text-gray-700">投稿編集</label>
                <textarea id="post" name="post" rows="4"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
            </div>
            <button type="submit"
                class="w-full bg-indigo-900 text-white py-2 rounded-md hover:bg-indigo-800 focus:ring-4 focus:ring-indigo-800 focus:ring-opacity-50">
                編集
            </button>
        </form>
    </div>
</body>

</html>
