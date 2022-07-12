function switchLanguage(pays) {
  var lang = pays;
  var url = window.location.href;

  var page = url.substring(url.lastIndexOf("/") + 1);

  var urlCurrent = window.location.href;
  var urlSplit = urlCurrent.split("/");
  var urlFinal = urlSplit[0] + "//" + urlSplit[2] + "/" + lang + "/" + page;

  window.location.href = urlFinal;
}
