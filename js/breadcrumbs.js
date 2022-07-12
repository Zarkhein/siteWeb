function breadcrumbs(page, page2 = null) {
  var text = document.getElementById(page);
  var text2 = document.getElementById(page2);

  if (text2 != null) {
    text2.setAttribute("style", "color:orange !important");
  }
  text.setAttribute("style", "color:orange !important");
}
