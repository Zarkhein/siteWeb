var tblMap = [
  "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2537.9537308553004!2d3.4439904163226926!3d50.49781889183067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2e65d9338a4d5%3A0x7ef71572b9da95b!2sDelquignies%20Logistique!5e0!3m2!1sfr!2sfr!4v1650981600979!5m2!1sfr!2sfr",
  "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2524.6233486602555!2d3.1376103163271765!3d50.745474373942876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c32eeb91a18469%3A0xf639b1b67abf4dbf!2sDelquignies%20Logistique!5e0!3m2!1sfr!2sfr!4v1651216102248!5m2!1sfr!2sfr",
  "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2547.053184369637!2d3.4442893000000003!3d50.328258999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2eb64dfcf0d6b%3A0x7369027a4d722b35!2sTransports%20Delquignies!5e0!3m2!1sfr!2sfr!4v1651218433809!5m2!1sfr!2sfr",
  "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2544.638729859871!2d3.6080033163204526!3d50.3732906008016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2f3d7b14b2b25%3A0x9053ba2ef4f42d79!2sDelquignies%20Logistique!5e0!3m2!1sfr!2sfr!4v1651218468974!5m2!1sfr!2sfr",
  "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2533.53408648862!2d3.1459375000000005!3d50.5800257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d71e9e3711c5%3A0xfa909d28c62143a!2s423%20Rue%20du%20Haut%20de%20Sainghin%2C%2059273%20Fretin!5e0!3m2!1sfr!2sfr!4v1653989230065!5m2!1sfr!2sfr",
];

function swapMap(nombreTbl) {
  let nameReplace = document.getElementById("map");
  nameReplace.src = tblMap[nombreTbl];
}
