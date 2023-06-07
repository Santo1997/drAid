function showIt() { // after 1 sec
  document.getElementById("into").classList.remove("bgm");
  document.getElementById("into").classList.add("introbgm");
  document.getElementById("display").style.display = "block";
}
setTimeout(showIt, 1000);



let tblData = fetch('js/json/tblData.json')
  .then((response) => response.json())
  .then((data) => {
    return Promise.all(data.map(item => {
      return item;
    }));
  });

let tblUserData = fetch('js/json/tblUserData.json')
  .then((response) => response.json())
  .then((data) => {
    return Promise.all(data.map(item => {
      return item;
    }));
  });

let userMetData = fetch('js/json/userMetData.json')
  .then((response) => response.json())
  .then((data) => {
    return Promise.all(data.map(item => {
      return item;
    }));
  });

let checkUserMetData = fetch('js/json/checkUserMetData.json')
  .then((response) => response.json())
  .then((data) => {
    return Promise.all(data.map(item => {
      return item;
    }));
  });
/*
let checkUserMetClint = fetch('js/json/checkUserMetClint.json')
  .then((response) => response.json())
  .then((data) => {
    return Promise.all(data.map(item => {
      return item;
    }));
  });
*/
//console.log(checkUserMetClint);