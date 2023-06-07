let metdata = fetch('js/json/metdata.json')
  .then((response) => response.json())
  .then((data) => {
    return Promise.all(data.map(item => {
      return item;
    }));
  });


function getURLValue(value) {
  let url = window.location;
  let params = new URLSearchParams(url.search);
  let getVal = params.get(value);
  return getVal;
}


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





/*
fetch('js/json/metdata.json').then((responce) => {
  return responce.json();
}).then((data) => {
  let edId = getURLValue('id');
  edId = edId - 1;
  let results = '';
  let dataID = data[edId];


  let placeholder = document.getElementById('editContent');
  edit = `
  <input type="text" name="editID" id="userID" value="${dataID.uid}">
    <div>
      <label for="clt" class="label">Person Name :</label>
      <input type="text" name="username" id="clt" value="${dataID.whoMet}" required class="input">
    </div>
    <div>
      <label for="mail" class="label">Person Email :</label>
      <input type="email" name="memail" id="mail" value="${dataID.metMail}" required class="input">
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
      <input type="text" name="metReason" id="reason" value="${dataID.metHed}" required class="input">
    </div>
    <div class="cause">
      <label for="cause" class="label">Reason Details :</label>
      <textarea name="metCause" id="cause">${dataID.metDetail}</textarea>
    </div>
    `;
  placeholder.innerHTML = edit;
});*/