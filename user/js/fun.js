/*function date() {
  let date = new Date().toLocaleDateString("en-GB", {
    day: "2-digit",
    month: "2-digit",
    year: "numeric"
  }).split('/');
  date = [date[0], date[1], date[2]].join("-");
  return date;
}*/

function getURLValue(value) {
  let url = window.location;
  let params = new URLSearchParams(url.search);
  let getVal = params.get(value);
  return getVal;
}


function selectTbl(path) {
  let results = ' ';
  let placeholder = document.getElementById('tblName');
  path.then(data => data.map((itm) => {
    results += `
    <option value="${itm.BCode}">${itm.BName}</option>
    `;
    placeholder.innerHTML = results;
  }));

}
selectTbl(tblData);

function selectMembers(path) {
  let results = '';
  let placeholder = document.getElementById('person');
  path.then(data => data.map((itm) => {
    results += `
    <option value="${itm.Usercode}">${itm.User}</option>
    `;
    placeholder.innerHTML = results;
  }));
}
selectMembers(tblUserData);

function changePsn() {
  var slctPsn = document.getElementById("person");
  var slctValue = slctPsn.options[slctPsn.selectedIndex].value;
  setPsn(tblUserData, slctValue);
  psnActvty(userMetData, slctValue);
}

function setPsn(path, psn) {
  let results = '';
  path.then(data => data.map((itm) => {
    if (psn == itm.Usercode) {
      document.getElementById("show_person").innerHTML = itm.User;
    }
  }));
}

function setTime(time, date) {
  let dtArr = [];
  dtArr = date.split("-");
  let itmDate = [dtArr[1], dtArr[0], dtArr[2]].join("-");
  itmDate = new Date(itmDate);
  itmDate = new Intl.DateTimeFormat('en-US', {
    dateStyle: 'long',
    timeStyle: 'medium'
  }).format(itmDate).slice(0, 20);
  let fulldate = itmDate + ' ' + time;
  return fulldate;
}

function psnActvty(path, psn) {
  let results = '';
  let placeholder = document.getElementById('shwActvty');
  path.then(data => data.map((itm) => {
    if (psn == itm.metPson) {

      let time = itm.metTime;
      let date = itm.metDate;
      let useTime = setTime(time, date);
      results += `
        <li>${useTime}</li>
      `;
    }
    placeholder.innerHTML = results;
  }));
}


function conDetails(path) {
  let results = '';
  let placeholder = document.getElementById('conDetails');
  path.then(data => {
    let bName = data[2][0].BName;
    let upper = bName.charAt(0).toUpperCase() + bName.slice(1);
    results = `
      <div class="con_details" >
        <div>
           <h1>${data[0][0].whoMet}</h1>
           <h3> Fixed By: ${data[0][0].reg_date}<span>Secretary</span></h3>
           <p>${data[0][0].metDetail}</p>
         </div>
        <div class="mainInfo">
          <div class="infoChk">
            <h2>Serial No: <span>${data[0][0].uid}</span></h2> <br />
            <h2>Meeting Time: <span>${data[0][0].metTime}</span></h2><br />
            <h2>Meeting Date: <span>${data[0][0].metDate}</span></h2>
          </div>
          <div class="psnInfo">
            <h2>${data[1][0].User}</h2> <br />
            <h2>${data[1][0].Title}</h2> <br />
            <h2>${data[1][0].EduDegree}</h2> <br />
            <h2>${upper}</h2> <br /><br />
          </div>
        </div>
        <ul>
          <li><a href="edit.html?id=${data[0][0].uid}" class="edit">Edit</a></li>
          <li><a href="includes/delete.php?dltid=${data[0][0].uid}" class="del">Delete</a></li>
        </ul>
      </div>
    `;
    placeholder.innerHTML = results;
  });
}
conDetails(checkUserMetData);

function editMetContent(path) {
  let results = '';
  let getId = getURLValue('id');
  let placeholder = document.getElementById('editMetContent');
  path.then(data => {
    if (data[0][0].uid == getId) {
      let bName = data[2][0].BName;
      let upper = bName.charAt(0).toUpperCase() + bName.slice(1);
      document.getElementById("tblname").innerHTML = upper;
      document.getElementById("setTbl").value = data[0][0].tableData;
      results = `
      <input type="text" name="editID" value="${data[0][0].uid}" required class="input">
      <div>
        <label for="clt" class="label">Person Name :</label>
        <input type="text" name="username" value="${data[0][0].whoMet}" id="clt" required class="input">
      </div>
      <div class="fixGrid">
        <label for="time" class="label">Mobile Number :</label>
        <input type="text" name="metnum" value="${data[0][0].metNumber}" id="num" required class="input ">
      </div>
      <div>
        <label for="mail" class="label">Person Email :</label>
        <input type="email" name="memail" value="${data[0][0].metMail}" id="mail" value="" required class="input">
      </div>
      <div class="fixGrid">
        <label for="time" class="label">Meeting Date & Time :</label>
        <input type="datetime-local" name="metime" id="time" required class="input ">
      </div>
      <div class="fixRadio">
        <p class="label">Meeting Type :</p>
        <label><input type="radio" name="metype" value="normal"> Normal</label>
        <label><input type="radio" name="metype" value="urgent">Emergency</label>
      </div>
      <div>
        <label for="reason" class="label">Meeting Reason :</label>
        <input type="text" name="metReason" value="${data[0][0].metHed}" id="reason" required class="input">
      </div>
      <div class="cause">
        <label for="cause" class="label">Reason Details :</label>
        <textarea name="metCause" id="cause">${data[0][0].metDetail}</textarea>
      </div>
        `;
    }
    placeholder.innerHTML = results;
  });
}

editMetContent(checkUserMetData);








/*prb*/
function setTbl(path) {
  let slctTbl = document.getElementById("setTblName").value;

  path.then(data => data.map((itm) => {
    if (slctTbl == itm.BCode) {
      document.getElementById("tblname").innerHTML = itm.BName;
    }
  }));
}
setTbl(tblData);