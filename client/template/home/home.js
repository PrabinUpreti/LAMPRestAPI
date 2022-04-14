import myRequest from "../../services/homeService.js";

async function dowork() {
  const dat = await myRequest();
  console.log(dat);
  document.body.innerHTML = dat;
}
dowork();
