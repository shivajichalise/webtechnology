// Analog Clock Js
const hourHand = document.querySelector('.hand-hour');
const minuteHand = document.querySelector('.hand-minute');
const secondHand = document.querySelector('.hand-seconds');


function getTime() {
  const now = new Date();

  const seconds = now.getSeconds();
  const secondsDegree = (((seconds / 60) * 360) + 90);
  secondHand.style.transform = `rotate(${secondsDegree}deg)`


  const minutes = now.getMinutes();
  const minutesDegree = (((minutes / 60) * 360) + 90);
  minuteHand.style.transform = `rotate(${minutesDegree}deg)`


  const hours = now.getHours();
  const hoursDegree = (((hours / 60) * 360) + 90);
  hourHand.style.transform = `rotate(${hoursDegree}deg)`
}

// Analog Clock Js


// Digital Clock
function showTime() {
  let time = new Date();
  let hour = time.getHours();
  let min = time.getMinutes();
  let sec = time.getSeconds();
  am_pm = "AM";

  if (hour > 12) {
    hour -= 12;
    am_pm = "PM";
  }
  if (hour == 0) {
    hr = 12;
    am_pm = "AM";
  }

  hour = hour < 10 ? "0" + hour : hour;
  min = min < 10 ? "0" + min : min;
  sec = sec < 10 ? "0" + sec : sec;

  let currentTime = hour + ":"
    + min + ":" + sec + " " + am_pm;

  document.getElementById("digitalclock")
    .innerHTML = currentTime;
}

showTime();


setInterval(() => {
  showTime(),
    getTime(),
    1000
});
//Digital Clock


//Todo Js

let todo = window.localStorage.getItem("todos");
let todoItems = todo != null ? JSON.parse(todo) : [];
renderHTML();

document.getElementById("add-task").addEventListener("keyup", (event) => {
  if (event.keyCode == 13) {
    let task = document.getElementById("add-task").value;
    var list = {
      name: task,
      isCompleted: false
    };
    todoItems.push(list);
    //console.log(tasks);
    document.getElementById("add-task").value = "";
    renderHTML();
    saveTodoLocal();
  }
});

function saveTodoLocal() {
  window.localStorage.setItem("todos", JSON.stringify(todoItems));
}

function renderHTML() {
  document.getElementById("task-list").innerHTML = "";
  todoItems.forEach(el => {
    let checked = el.isComplete ? "checked" : "";
    //console.log(el.name);
    if (el.isComplete) {
      document.getElementById("task-list").innerHTML += `<li> <input type="checkbox" onClick="markAsComplete('${el.name}');" ${checked} /> <del>${el.name}</del>  <button onClick="removeTask('${el.name}');" >[X]</button> </li>`;
    } else {
      document.getElementById("task-list").innerHTML += `<li> <input type="checkbox"  onClick="markAsComplete('${el.name}');"/> ${el.name} <button onClick="removeTask('${el.name}');">[X]</button></li>`;
    }
  });
}

function markAsComplete(name) {
  //console.log("sas");
  todoItems.forEach(el => {
    if (el.name == name) {
      el.isComplete = !el.isComplete;
      return true;
    }
  });
  saveTodoLocal();
  renderHTML();
}

function removeTask(name) {
  todoItems.pop(name);
  saveTodoLocal();
  renderHTML();
}

//Todo Js

