function date() {
  let date = new Date().toLocaleDateString("en-GB", {
    day: "2-digit",
    month: "2-digit",
    year: "numeric"
  }).split('/');
  date = [date[0], date[1], date[2]].join("-");
  return date;
}

function getURLValue(value) {
  let url = window.location;
  let params = new URLSearchParams(url.search);
  let getVal = params.get(value);
  return getVal;
}

function shwTdsMetTimeUser(path) {
  let results = '';
  let newDate = date();

  let placeholder = document.getElementById('shwTdsMetTimeUser');
  path.then(data => data.map((itm) => {
    if (newDate == itm.metDate) {

      results += `
        <li>${itm.metTime}</li>
        <li>${itm.whoMet}</li>
      `;
    }
    placeholder.innerHTML = results;
  }));
}
shwTdsMetTimeUser(metdata);


function setTime(time, date) {
  let fulldate = '';
  let dtArr = [];

  let itmTime = time;
  let itmDate = date;
  dtArr = itmDate.split("-");
  itmDate = [dtArr[1], dtArr[0], dtArr[2]].join("-");
  itmDate = new Date(itmDate);
  itmDate = itmDate.toString().slice(0, 15);
  fulldate = [itmTime, itmDate].join(" ");
  return fulldate;
} //let useTime = setTime(itm.metTime, itm.metDate);


function shwTdsMeeting(path) {
  let sln = [];
  let results = '';
  let newDate = date();

  let placeholder = document.getElementById('shwTdsMeeting');
  path.then(data => data.map((itm) => {
    if (newDate == itm.metDate) {
      sln.push(itm.uid);
      results += `
      <div class="con_details">
        <h1>${itm.whoMet}</h1>
        <h3>${itm.reg_date} Fixed By: <span>Secretary</span></h3>
        <p>${itm.metDetail}</p>
        <h2>Meeting Time: <span>${itm.metTime}</span></h2>
        <ul>
          <li><a href="includes/delete.php?dltid=${itm.uid}" class="del">Delete</a></li>
        </ul>
      </div>
      `;
    }
    placeholder.innerHTML = results;
    document.getElementById('tdsPendCount').innerHTML = sln.length;
    document.getElementById('tdsProCount').innerHTML = sln.length;
  }));
}
shwTdsMeeting(metdata);


function shwPendind(path) {
  let sln = [];
  let results = '';
  let placeholder = document.getElementById('shwPendind');
  path.then(data => data.map((itm) => {
    sln.push(itm.uid);
    let useTime = setTime(itm.metTime, itm.metDate);
    let metHed = itm.metHed.substring(0, 12) + '...';
    results += `
      <li>${sln.length}</li>
      <li>${itm.whoMet}</li>
      <li>${itm.metTime}</li>
      <li>${metHed}</li>
      <li><a href="">Set Ok</a></li>
      `;
    placeholder.innerHTML = results;
    document.getElementById('pendCount').innerHTML = sln.length;
  }));

}
shwPendind(metdata);

function shwSuccess(path) {
  let sln = [];
  let results = '';
  let placeholder = document.getElementById('shwSuccess');
  path.then(data => data.map((itm) => {
    sln.push(itm.uid);
    let useTime = setTime(itm.metTime, itm.metDate);
    let metHed = itm.metHed.substring(0, 10) + '...';
    results += `
      <li>${sln.length}</li>
      <li>${itm.whoMet}</li>
      <li>${itm.metTime}</li>
      <li>${metHed}</li>
      <li><a href="">Success</a></li>
      `;
    placeholder.innerHTML = results;
    document.getElementById('tdsSuccCount').innerHTML = sln.length;
  }));
}
shwSuccess(shiftData);


function shwMember(path) {
  let results = '';
  let placeholder = document.getElementById('shwMember');
  path.then(data => data.map((itm) => {
    results += `
    <li><a href="members.php?user=${itm.uid}">${itm.User}</a></li>

    `;
    placeholder.innerHTML = results;
  }));
}
shwMember(userData);



function profileInfo(path) {
  let results = '';
  let user = getURLValue('user');
  let placeholder = document.getElementById('profileInfo');
  path.then(data => data.map((itm) => {
    if (user == itm.Usercode) {
      let register = itm.reg_date;
      register = register.split(" ");
      register = register[0].split("-").reverse().join("-");

      results = `
        <h1>${itm.User}</h1>
        <ul>
          <li>${itm.Title}</li>
          <li>${register}</li>
        </ul>
      `;
    }
    placeholder.innerHTML = results;
  }));
}
profileInfo(userData);


function profileConact(path) {
  let results = '';
  let user = getURLValue('user');
  let placeholder = document.getElementById('profileConact');
  path.then(data => data.map((itm) => {
    if (user == itm.Usercode) {
      results = `
        <li>Mobile NO:</li>
        <li>${itm.Number}</li>
        <li>Email: </li>
        <li>${itm.Email}</li>
        <li>Whatsapp:</li>
        <li>${itm.Whatsapp}</li>
      `;
    }
    placeholder.innerHTML = results;
  }));
}
profileConact(userData);


function profileBasic(path) {
  let results = '';
  let user = getURLValue('user');
  let placeholder = document.getElementById('profileBasic');
  path.then(data => data.map((itm) => {
    if (user == itm.Usercode) {
      results = `
      <li>Full Name:</li>
      <li>${itm.User}</li>
      <li>Display Name:</li>
      <li>${itm.Usercode}</li>
      <li>Gender:</li>
      <li>${itm.Gender}</li>
      <li>Religion:</li>
      <li>${itm.Religion}</li>
      `;
    }
    placeholder.innerHTML = results;
  }));
}
profileBasic(userData);

function profileEdu(path) {
  let results = '';
  let user = getURLValue('user');
  let placeholder = document.getElementById('profileEdu');
  path.then(data => data.map((itm) => {
    if (user == itm.Usercode) {
      results = `
      <li>School/College/University:</li>
      <li>${itm.EduInstitute}</li>
      <li>Degree:</li>
      <li>${itm.EduDegree}</li>
      `;
    }
    placeholder.innerHTML = results;
  }));
}
profileEdu(userData);


function userEditInfo(path) {
  let user = getURLValue('user');

  path.then(data => data.map((itm) => {
    if (itm.Usercode == user) {
      let fullname = itm.User;
      fullname = fullname.split(" ");
      document.getElementById("mobile").value = itm.Number;
      document.getElementById("mail").value = itm.Email;
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
//end profile
function memInfo(path) {
  let results = '';
  let user = getURLValue('user');
  let placeholder = document.getElementById('memInfo');
  path.then(data => data.map((itm) => {
    if (user == itm.uid) {
      let register = itm.reg_date;
      register = register.split(" ");
      register = register[0].split("-").reverse().join("-");
      document.getElementById("membImg").src = `media/${itm.Image}`;
      results = `
        <h1>${itm.User}</h1>
        <ul>
          <li>${itm.Title}</li>
          <li>${register}</li>
        </ul>
      `;
    }
    placeholder.innerHTML = results;
  }));
}
memInfo(userData);


function contactInfo(path) {
  let results = '';
  let user = getURLValue('user');
  let placeholder = document.getElementById('contactInfo');
  path.then(data => data.map((itm) => {
    if (user == itm.uid) {
      results = `
        <li>Mobile NO:</li>
        <li>${itm.Number}</li>
        <li>Email: </li>
        <li>${itm.Email}</li>
        <li>Whatsapp:</li>
        <li>${itm.Whatsapp}</li>
      `;
    }
    placeholder.innerHTML = results;
  }));
}
contactInfo(userData);


function basicInfo(path) {
  let results = '';
  let user = getURLValue('user');
  let placeholder = document.getElementById('basicInfo');
  path.then(data => data.map((itm) => {
    if (user == itm.uid) {

      results = `
      <li>Full Name:</li>
      <li>${itm.User}</li>
      <li>School/College/University:</li>
      <li>${itm.EduInstitute}</li>
      <li>Degree:</li>
      <li>${itm.EduDegree}</li>
      <li>Gender:</li>
      <li>${itm.Gender}</li>
      <li>Religion:</li>
      <li>${itm.Religion}</li>
      `;
    }
    placeholder.innerHTML = results;
  }));
}
basicInfo(userData);




/*asdasdasdasdasdasdasdas

results = `
  <li>Mobile NO:</li>
  <li>${itm.Number}</li>
  <li>Email: </li>
  <li>${itm.Email}</li>
  <li>Whatsapp:</li>
  <li>${itm.Whatsapp}</li>
  `;


function date() {
  let date = new Date().toLocaleDateString().split('/');
  date = [date[1], date[0], date[2]].join("-");
  return date;
}



function shwTdsMetTimeUser(path) {
  let results = '';
  let newDate = date();
  let placeholder = document.getElementById('shwTdsMetTimeUser');
  path.then(data => data.map((itm) => {
    if (newDate == itm.metDate) {
      results += `
        <li>${itm.metTime}</li>
        <li>${itm.whoMet}</li>
      `;
    }
    placeholder.innerHTML = results;
  }));
}
shwTdsMetTimeUser(metdata);


function setTime(time, date) {
  let fulldate = '';
  let dtArr = [];

  let itmTime = time;
  let itmDate = date;
  dtArr = itmDate.split("-");
  itmDate = [dtArr[1], dtArr[0], dtArr[2]].join("-");
  itmDate = new Date(itmDate);
  itmDate = itmDate.toString().slice(0, 15);
  fulldate = [itmTime, itmDate].join(" ");
  return fulldate;
} //let useTime = setTime(itm.metTime, itm.metDate);


function shwTdsMeeting(path) {
  let results = '';
  let newDate = date();

  let placeholder = document.getElementById('shwTdsMeeting');
  path.then(data => data.map((itm) => {
    if (newDate == itm.metDate) {
      results += `
      <div class="con_details">
        <h1>${itm.whoMet}</h1>
        <h3>${itm.reg_date} Fixed By: <span>Secretary</span></h3>
        <p>${itm.metDetail}</p>
        <h2>Meeting Time: <span>${itm.metTime}</span></h2>
        <ul>
          <li><a href="" class="success">Success</a></li>
          <li><a href="" class="edit">Edit</a></li>
          <li><a href="" class="del">Delete</a></li>
        </ul>
      </div>
      `;
    }
    placeholder.innerHTML = results;
  }));
}
shwTdsMeeting(metdata);


function shwPendind(path) {
  let sln = [];
  let results = '';
  let placeholder = document.getElementById('shwPendind');
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
shwPendind(metdata);


dasdasd*/