// const addLike = () => {
//     const likeBtns = document.querySelectorAll("#like-btn");

//     likeBtns.forEach((likeBtn) => {
//         const postId = likeBtn.getAttribute("data-post-id");
//         likeBtn.addEventListener("click", async (e) => {
//             e.preventDefault();
//             try {
//                 const response = await fetch(`/api/posts/${postId}/like`, {
//                     method: "POST",
//                     headers: {
//                         "Content-Type": "application/json",
//                         Accept: "application/json",
//                         "X-CSRF-TOKEN": document
//                             .querySelector('meta[name="csrf-token"]')
//                             .getAttribute("content"),
//                     },
//                     credentials: "include", ////必要かしらべる
//                     // body: JSON.stringify({
//                     //     text: postText.value,
//                     // }),
//                 });
//                 console.log(response);

//                 if (!response.ok) {
//                     console.error(
//                         "HTTPエラー:",
//                         response.status,
//                         await response.text()
//                     );
//                     return;
//                     // const data = await response.json();
//                     // window.location.href = data.redirect;
//                 }
//             } catch (err) {
//                 console.error("エラーが発生しました", err);
//             }
//         });
//     });
// };
// addLike();
