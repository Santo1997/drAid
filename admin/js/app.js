let clock = () => {
  let date = new Date();
  let time = new Intl.DateTimeFormat('en-US', {
    dateStyle: 'medium',
    timeStyle: 'medium'
  }).format(date);

  let tm = time.split(",");
  date = [tm[0], tm[1]].join("-");
  document.getElementById("time").innerHTML = tm[2];
  document.getElementById("date").innerHTML = date;
}
setInterval(clock, 1000);

function shwHtmlTime(id) {
  var times = {},
    re = /^\d+(?=:)/;

  for (var i = 13, n = 1; i < 24; i++, n++) {
    times[i] = n < 10 ? "0" + n : n
  }
  document.getElementById(id)
    .onchange = function() {
      var time = this;
      value = time.value;
      match = value.match(re)[0];
      this.nextElementSibling.innerHTML =
        (match && match >= 13 ? value.replace(re, times[match]) : value) +
        (time.valueAsDate.getTime() < 43200000 ? " AM" : " PM")
    }
}
shwHtmlTime('from');
shwHtmlTime('to');

function shwHtmlDate(id) {
  document.getElementById(id)
    .onchange = function() {
      var date = this.value;
      this.nextElementSibling.innerHTML = date;
    }
}
shwHtmlDate('dfrom');
shwHtmlDate('dto');