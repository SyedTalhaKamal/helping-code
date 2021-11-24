var dropdown = document.getElementsByClassName("custom-side-drop-down");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("open");
  });
}

$(".show-hide-icon1").click(function () {
  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $(".password1");
  if (input.attr("type") === "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

$(".show-hide-icon2").click(function () {
  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $(".password2");
  if (input.attr("type") === "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

$(".show-hide-icon3").click(function () {
  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $(".password3");
  if (input.attr("type") === "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

$("#menu-toggle").click(function (e) {
  e.preventDefault();
  $("#wrapper").toggleClass("active");
});

$(document).ready(function () {
  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function (e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i];
        var fileReader = new FileReader();
        fileReader.onload = function (e) {
          var file = e.target;
          $(
            '<span class="pip">' +
              '<img class="imageThumb" src="' +
              e.target.result +
              '" title="' +
              file.name +
              '"/>' +
              '<br/><span class="remove"><i class="fa fa-times" aria-hidden="true"></i></span>' +
              "</span>"
          ).insertAfter("#files");
          $(".remove").click(function () {
            $(this).parent(".pip").remove();
          });
        };
        fileReader.readAsDataURL(f);
      }
      console.log(files);
    });
  } else {
    alert("Your browser doesn't support to File API");
  }
});
