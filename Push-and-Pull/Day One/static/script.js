function updateContent() {
  var newContent = document.getElementById("newContent").value;
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "/update", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      getContent();
    }
  };
  xhr.send("new_content=" + encodeURIComponent(newContent));
}

function getContent() {
  var xhr = new XMLHttpRequest();
  xhr.open(
    "GET",
    "/get_content?last_content=" +
      encodeURIComponent(document.getElementById("content").innerText),
    true
  );
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      var response = JSON.parse(xhr.responseText);
      document.getElementById("content").innerText = response.new_content;
      getContent();
    }
  };
  xhr.send();
}

window.onload = function () {
  getContent();
};
