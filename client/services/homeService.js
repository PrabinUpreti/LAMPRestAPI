const myRequest = () => {
  return new Promise((resolve, reject) => {
    console.log("inside promosi");
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        resolve(this.responseText);
      }
    };
    xmlhttp.open("GET", "https://api.quran.com/api/v4/chapters", true);
    xmlhttp.send();
  });
};

export default myRequest;
fetch;
