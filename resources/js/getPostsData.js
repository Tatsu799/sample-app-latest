const getPostsData = () => {
    document.addEventListener("DOMContentLoaded", async (event) => {
        event.preventDefault();
        const text = document.getElementById("text");
        // text.value = "";

        try {
            const data = await fetch("/api/posts");
            // console.log(data);

            if (data.ok) {
                const res = await data.json();
                // console.log(res);

                if (res.length !== 0) {
                    res.forEach((post) => {
                        //日付を表示
                        const date =
                            "posted at " +
                            post.created_at.slice(0, 10) +
                            " " +
                            post.created_at.slice(11, 16);
                        const postList = document.getElementById("postList");
                        const div = document.createElement("div");
                        div.classList.add("max-w-lg", "mx-auto", "pb-6");
                        div.innerHTML += `
                                        <div class="flex bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition duration-200">
                                            <div>
                                                <p id="content" class="text-gray-600 mt-2">${post.text}</p>
                                                <span class="text-sm text-gray-500">${date}</span>

                                                <form method="GET" action="">
                                                    <div class="flex mt-2">
                                                        <p>いいね　</p>
                                                        <p type='submit'>10</p>
                                                    </div>
                                                </form>
                                            </div>


                                            <div class='ml-auto'>
                                                <form class="relative right-4" method="GET" action="${post.id}/edit">
                                                    <button type='submit' >編集</button>
                                                </form>
                                            </div>
                                        </div>
                                    `;
                        postList.appendChild(div);
                    });
                }
            } else {
                console.log("投稿がありません");
            }
        } catch (err) {
            console.error("エラーが発生しました", err);
        }
    });
};
getPostsData();
