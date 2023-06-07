function showIt() { // after 1 sec
  document.getElementById("into").classList.add("introbgm");
  document.getElementById("display").style.display = "block";
}
setTimeout(showIt, 1000);

function getURLValue(value) {
  let url = window.location;
  let params = new URLSearchParams(url.search);
  let getVal = params.get(value);
  return getVal;
}




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
selectMembers(userData);


function changePsn() {
  var slctPsn = document.getElementById("person");
  var slctValue = slctPsn.options[slctPsn.selectedIndex].value;
  setPsn(userData, slctValue);
  psnActvty(metdata, slctValue);
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
  let fulldate = '';
  let dtArr = [];
  let tmArr = [];
  let itmTime = time;
  tmArr = itmTime.split("T");
  let itmDate = date;
  dtArr = itmDate.split("-");
  itmDate = [dtArr[1], dtArr[0], dtArr[2]].join("-");
  itmDate = new Date(itmDate);
  itmDate = itmDate.toString().slice(0, 15);
  fulldate = [tmArr[1], itmDate].join(" ");
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
      <li><a href="">${useTime}</a></li>
      `;
    }
    placeholder.innerHTML = results;
  }));
}

function shwMetMembers(path) {
  let results = '';
  let placeholder = document.getElementById('empyMember');
  path.then(data => data.map((itm) => {
    results += `
    <li><a href="">${itm.User}</a></li>
    `;
    placeholder.innerHTML = results;
  }));
}
shwMetMembers(userData);


function shwMetData(path) {
  let results = '';
  let placeholder = document.getElementById('conMetData');
  path.then(data => data.map((itm) => {


    results += `
    <div class="con_details">
      <h1>${itm.whoMet}</h1>
      <h3>${itm.reg_date} <span>${itm.setApnt}</span></h3>
      <p>${itm.metDetail}</p>
      <h2>Meeting Time: <span>${itm.metTime}</span></h2>
      <ul>
        <li><a href="">Success</a></li>
        <li><a href="editing.php?id=${itm.uid}">Edit</a></li>
        <li><a href="includes/delete.php?dltid=${itm.uid}">Delete</a></li>
      </ul>
    </div>
    <hr />
    `;
    placeholder.innerHTML = results;
  }));
}
shwMetData(metdata);


function editMetData(path) {
  let results = '';
  let getId = getURLValue('id');
  let dataID = getId;
  let placeholder = document.getElementById('editContent');
  path.then(data => data.map((itm) => {
    if (itm.uid == dataID) {
      results = `
      <input type="text" name="editID" id="userID" value="${itm.uid}">
        <div>
          <label for="clt" class="label">Person Name :</label>
          <input type="text" name="username" id="clt" value="${itm.whoMet}" required class="input">
        </div>
        <div>
          <label for="mail" class="label">Person Email :</label>
          <input type="email" name="memail" id="mail" value="${itm.metMail}" required class="input">
        </div>
        <div class="fix_div">
          <label for="time" class="label">Meeting Date & Time :</label>
          <input type="datetime-local" name="metime" id="time" required class="input fix_inp">
        </div>
        <div class="fix_div fix_lab">
          <p class="label">Meeting Type :</p>
          <label class="type"><input type="radio" name="metype" value="normal"> Normal</label>
          <label class="type"><input type="radio" name="metype" value="important"> Important</label>
          <label class="type"><input type="radio" name="metype" value="urgent"> Urgent</label>
        </div>
        <div class="fix_div">
          <label for="reason" class="label">Meeting Reason :</label>
          <input type="text" name="metReason" id="reason" value="${itm.metHed}" required class="input">
        </div>
        <div class="cause">
          <label for="cause" class="label">Reason Details :</label>
          <textarea name="metCause" id="cause">${itm.metDetail}</textarea>
        </div>
        `;
    }
    placeholder.innerHTML = results;
  }));
}

editMetData(metdata);


function pndMeeting(path) {
  let sln = [];
  let results = '';
  let placeholder = document.getElementById('pending');
  path.then(data => data.map((itm) => {
    sln.push(itm.uid);
    let useTime = setTime(itm.metTime, itm.metDate);
    results += `
      <li>${sln.length}</li>
      <li>${itm.whoMet}</li>
      <li>${itm.metHed}</li>
      <li>${itm.metPson}</li>
      <li>${useTime}</li>
      <li><a href="">Set Ok</a></li>
      `;
    placeholder.innerHTML = results;
  }));
}
pndMeeting(metdata);

function successMeeting(path) {
  let sln = [];
  let results = '';
  let placeholder = document.getElementById('success');
  path.then(data => data.map((itm) => {
    sln.push(itm.uid);
    let useTime = setTime(itm.metTime, itm.metDate);
    results += `
      <li>${sln.length}</li>
      <li>${itm.whoMet}</li>
      <li>${itm.metHed}</li>
      <li>${itm.metPson}</li>
      <li>${useTime}</li>
      <li><a href="">Undo</a></li>
      `;
    placeholder.innerHTML = results;
  }));
}
successMeeting(metdata);



function userInfo(path) {
  let user = getURLValue('user');

  path.then(data => data.map((itm) => {
    if (itm.Usercode == user) {
      let register = itm.reg_date;
      register = register.split(" ");
      register = register[0].split("-").reverse().join("-");
      document.getElementById('usercode').innerHTML = itm.Usercode;
      document.getElementById('position').innerHTML = itm.Title;
      document.getElementById('userCode').innerHTML = itm.Usercode;
      document.getElementById('userPosition').innerHTML = itm.Title;
      document.getElementById('userReg').innerHTML = register;
      document.getElementById('mobile').innerHTML = itm.Number;
      document.getElementById('mail').innerHTML = itm.Email;
      document.getElementById('fb').innerHTML = itm.Facebook;
      document.getElementById('wts').innerHTML = itm.Whatsapp;
      document.getElementById('fullname').innerHTML = itm.User;
      document.getElementById('dsName').innerHTML = itm.Userdisplay;
      document.getElementById('gender').innerHTML = itm.Gender;
      document.getElementById('religious').innerHTML = itm.Religion;
      document.getElementById('eduIns').innerHTML = itm.EduInstitute;
      document.getElementById('eduDeg').innerHTML = itm.EduDegree;

    }
  }));
}
userInfo(userData);


function userEditInfo(path) {
  let user = getURLValue('user');

  path.then(data => data.map((itm) => {
    if (itm.Usercode == user) {
      let fullname = itm.User;
      fullname = fullname.split(" ");
      document.getElementById("mobile").value = itm.Number;
      document.getElementById("mail").value = itm.Email;
      document.getElementById("fb").value = itm.Facebook;
      document.getElementById("wts").value = itm.Whatsapp;
      document.getElementById("fname").value = fullname[0];
      document.getElementById("lname").value = fullname[1];
      document.getElementById("dsName").value = itm.Userdisplay;
      document.getElementById("gender").value = itm.Gender;
      document.getElementById("religious").value = itm.Religion;
      document.getElementById("eduIns").value = itm.EduInstitute;
      document.getElementById("eduDeg").value = itm.EduDegree;
    }
  }));
}
userEditInfo(userData);