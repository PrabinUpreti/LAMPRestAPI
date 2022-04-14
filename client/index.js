import myRequest from "./services/homeService.js";
window.onload = function () {
  document.getElementsByTagName("main").innerHTML = "";
  async function getData() {
    const a = await myRequest();
    return a;
  }
  getData().then((a) => console.log(a));
};
