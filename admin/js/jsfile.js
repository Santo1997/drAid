/*fetch('js/userData.json').then((responce) => {
  return responce.json();
}).then((data) => {
  let members = '';
  let placeholder = document.getElementById('empyMember');
  data.map((itm) => {
    members += `
      <li><a href="">${itm.User}</a></li>
      `;
  });
  placeholder.innerHTML = members;
});
*/


let userData = fetch('js/json/userData.json')
  .then((response) => response.json())
  .then((data) => {
    return Promise.all(data.map(item => {
      return item;
    }));
  });

let metdata = fetch('js/json/metdata.json')
  .then((response) => response.json())
  .then((data) => {
    return Promise.all(data.map(item => {
      return item;
    }));
  }); 

let shiftData = fetch('js/json/shiftData.json')
  .then((response) => response.json())
  .then((data) => {
    return Promise.all(data.map(item => {
      return item;
    }));
  });








/*




*/



/*


function psnActvty(psn) {
  fetch('js/metdata.json').then((responce) => {
    return responce.json();
  }).then((data) => {
    let psns = '';
    let placeholder = document.getElementById('shwActvty');
    data.map((itm) => {
      if (psn == itm.metPson) {
        let dtArr = [];
        let tmArr = [];
        let itmTime = itm.metTime;
        tmArr = itmTime.split("T");
        let itmDate = itm.metDate;
        dtArr = itmDate.split("-");
        itmDate = [dtArr[1], dtArr[0], dtArr[2]].join("-");
        itmDate = new Date(itmDate);
        itmDate = itmDate.toString().slice(0, 15);

        psns += `
        <li><a href="">${tmArr[1]} ${itmDate}</a></li>
        `;
      }
    });
    placeholder.innerHTML = psns;
  });
}








/*



if (psn == itm.Usercode) {
  document.getElementById("show_person").innerHTML = itm.User;
}

if (psn == itm.Usercode) {
  psns += `
  <li><a href="">${itm.metDate} ${itm.metTime}</a></li>
  `;
}







*/