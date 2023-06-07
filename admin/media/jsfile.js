function showIt() {
  document.getElementById("intro").classList.add("introbgm");
  document.getElementById("display").style.display = "block";
}
setTimeout(showIt, 1000); // after 1 sec

document.querySelector('#person').addEventListener('change', function() {
  if (person.value === "santo") {
    document.getElementById("show_person").innerHTML = 'Hasibur Hossain Santo';
  } else if (person.value === "shimu") {
    document.getElementById("show_person").innerHTML = 'Farhana Akhter Shimu';
  } else if (person.value === "orpa") {
    document.getElementById("show_person").innerHTML = 'Rabeya Orpa';
  } else if (person.value === "rafat") {
    document.getElementById("show_person").innerHTML = 'Anzir Rahman Rafat';
  }
});


async function getMetData() {
  try {
    const path = 'metdata.json';
    const responce = await fetch(path);
    const data = await responce.json();
    let metData = data.itms;
    let results = '';
    let placeholder = document.getElementById('conMetData');
    metData.map((itm) => {
      console.log(itm.uid);
      results += `
      <div class="con_details">
        <h1>${itm.whoMet}</h1>
        <h3>${itm.reg_date}<span>${itm.setApnt}</span></h3>
        <p>${itm.metDeta}</p>
        <h2>Meeting Time: <span>${itm.metTime}</span></h2>
        <ul>
          <li><a href="">Success</a></li>
          <li><a href="editing.html">Edit</a></li>
          <li><a href="">Delete</a></li>
        </ul>
      </div>
      <hr />
      `;
    });
    placeholder.innerHTML = results;

  } catch (error) {
    console.log(error)
  }
}

getData();