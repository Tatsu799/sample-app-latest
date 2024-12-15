const postData = () => {
    const postText = document.getElementById("post-text");
    const postBtn = document.getElementById("post-btn");
    postBtn.addEventListener("click", async () => {
        if (!postText.value) {
            alert("内容を入力してください");
            return;
        }

        try {
            const response = await fetch("/api/posts", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    Accept: "application/json",
                    "X-CSRF-TOKEN": document.querySelector(
                        'meta[name="csrf-token"]'
                    ),
                    // .getAttribute("content"),
                },
                body: JSON.stringify({
                    text: postText.value,
                }),
                credentials: "include", ////必要かしらべる
            });

            if (response.ok) {
                const data = await response.json();
                window.location.href = data.redirect;
            }
        } catch (err) {
            console.error("エラーが発生しました", err);
        }
    });
};
postData();
