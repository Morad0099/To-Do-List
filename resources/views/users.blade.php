
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  

    <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />

    <meta name="apple-mobile-web-app-title" content="CodePen">

    <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />



  
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>


  <title>Todo-list</title>

    <link rel="canonical" href="https://codepen.io/nicoHDL/pen/wvRRmNW">
  <script src="https://kit.fontawesome.com/8535745612.js" crossorigin="anonymous"></script>
  
  
  
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');


*, *:before, *:after{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    font-family: 'Poppins', sans-serif;
}
.container{
    width: 100%;
    min-height: 100vh;
    background: linear-gradient(135deg, #153677, #4e085f);
    padding: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.todo-app{
    width: 100%;
    max-width: 540px;
    background-color: #fff;
    padding: 40px 30px 70px;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    align-items: left;
    gap: 2rem;
}
.app-title{
    display: flex;
    gap: 1rem;
    align-items: center;
}
.app-title h2, .app-title i{
    color: #002765;
}
.app-title i{
    font-size: 26px;
}
.row{
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #edeef0;
    border-radius: 30px;
}
input{
    width: 100%;
    border: none;
    outline: none;
    background-color: transparent;
    padding: 12px;
    font-size: 17px;
    padding-left: 20px;
}
button{
    border: none;
    cursor: pointer;
    outline: none;
    padding: 15px 50px;
    border-radius: 30px;
    background-color: #ff5945;
    color: #fff;
    font-size: 18px;
    transition: all .25s ease;
}
button:hover{
    filter: brightness(.8);
}

@media screen and (max-width: 400px) {
    button{
        padding: 15px;
        border-radius: 0 30px 30px 0;
    }
}

ul{
    list-style: none;
}
ul li{
    font-size: 17px;
    padding: 12px 8px 12px 50px;
    margin-top: 5px;
    user-select: none;
    cursor: pointer;
    position: relative;
}
ul li::before{
    position: absolute;
    content: '';
    width: 24px;
    height: 24px;
    border-radius: 50%;
    left: 0;
    border: 2px solid #ff5945;
}
ul .checked{
    color: #555;
    text-decoration: line-through;
}
ul .checked::before{
    background-color: #ff5945;
}
span {
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 30px;
    height: 30px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #555;
    font-size: 18px;
    transition: all .2s ease;
}
span:hover{
    background-color: #c9c9c9;
    color: #fff;
}

.navbar {
      display: flex;
      justify-content: space-between;
      padding: 10px;
      background-color: #002765;
      color: white;
    }

    .navbar a {
      color: white;
      text-decoration: none;
      padding: 10px;
    }
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
</head>

<body translate="no">

  
  <body>
    <div class="navbar">
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Contact</a>
      <a href="{{route('logout')}}">Logout</a>
    </div>

    <div class="container">
        <div class="todo-app">
            <div class="app-title">
                <h2>To-do app</h2>
                <i class="fa-solid fa-book-bookmark"></i>
            </div>
            <div class="row">
                <input type="text" id="input-box" placeholder="add your tasks">
                <button>Add</button>
            </div>
            <ul id="list-container">
            </ul>
        </div>
    </div>




    <script src="script.js"></script>
</body>
  
      <script id="rendered-js" >
const inputBox = document.getElementById("input-box");
const button = document.querySelector("button");
const list = document.getElementById("list-container");


function addTask() {
  if (inputBox.value === '') {
    alert("you must write something!");
  } else {
    let li = document.createElement("li");
    li.innerHTML = inputBox.value;
    console.log(inputBox.value);
    list.appendChild(li);
    inputBox.value = '';
    let span = document.createElement("span");
    span.innerHTML = "x";
    li.appendChild(span);
    
  }
  saveData();
}
list.addEventListener("click", e => {
  if (e.target.tagName === "LI") {
    e.target.classList.toggle("checked");
    saveData();
  } else if (e.target.tagName === "SPAN") {
    e.target.parentElement.remove();
    saveData();
  }
});

button.addEventListener("click", addTask);

function saveData() {
  localStorage.setItem("data", list.innerHTML);
  
}
function showTask() {
  const savedData = localStorage.getItem("data");
  if (savedData) {
    
    list.innerHTML = savedData;
  }
}
window.addEventListener("load", showTask);
//# sourceURL=pen.js
    </script>

  
</body>

</html>
