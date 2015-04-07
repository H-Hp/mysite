document.addEventListener("DOMContentLoaded", () => {
  var button = document.getElementById("changeSizeBtn");
  var title = document.getElementById("title");

  button.addEventListener("click", () => {
    // 文字サイズを変更
    title.style.fontSize = "3em";
  });
});