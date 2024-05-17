function updateContent() {
  var newContent = document.getElementById("newContent").value;
  $.ajax({
    type: "POST",
    url: "/update",
    data: { new_content: newContent },
    success: function () {
      getContent();
    }
  });
}

function getContent() {
  $.ajax({
    type: "GET",
    url: "/get_content",
    data: { last_content: document.getElementById("content").innerText },
    success: function (response) {
      document.getElementById("content").innerText = response.new_content;
      getContent();
    }
  });
}

$(document).ready(function () {
  getContent();
});
