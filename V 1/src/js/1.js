document.querySelector("#file_select").addEventListener("change", (e) => {
  //for (let entry of e.target.files)
  // var name = extractFilename(entry.webkitRelativePath);
  //console.log(document.getElementById("attachmentFilePath").value);
  //entry.name,
});
$.ajax({
  url: "src/php/searchFolder.php",
  type: "get",
  data: "URL",
  success: function (data) {},
});
