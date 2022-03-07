<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>expense traker</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <style>
	  @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap');

:root {
  --bg: #97BFB4;
  --text: #fff0f0;
  --line: #ebd4d4;
  --last: #835858;
  --box-shadow: 0 1px 5px rgba(250, 250, 250, 0.2),
    0 1px 5px rgba(255, 255, 255, 0.3);
}

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
body {
  font-family: "Ubuntu", cursive;
  background-image: url("background.jpg");
  background-repeat: no-repeat;
  background-size: auto;
  /* background-color: var(--bg); */
  color: var(--text);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin: 0;
  min-height: 100vh;
}
.container {
  margin: 30px auto;
  width: 80%;
  padding: 3%;
  /* border: 1px solid black; */
  background-color: #F5EEDC;
  background: rgba( 255, 255, 255, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
  border-radius: 10px;
  color: black;
}
h1 {
  letter-spacing: 1px;
  margin: 0;
}
h3 {
  border-bottom: 1px solid var(--line);
  padding: 10px;
  margin: 40px 0 10px;
}
h4 {
  margin: 0;
  text-transform: uppercase;
  color: var(--last);
}
p {
  color: var(--bg);
  font-weight: bold;
}
.inc-exp-container {
  background: rgba( 255, 255, 255, 0.4 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
  padding: 20px;
  box-shadow: var(--box-shadow);
  display: flex;
  justify-content: space-between;
  margin: 20px 0;
}
.inc-exp-container > div {
  flex: 1;
  text-align: center;
}
.inc-exp-container > div:first-of-type {
  border-right: 1px solid var(--last);
}
.money {
  font-size: 20px;
  letter-spacing: 1px;
  margin: 5px 0;
}
.money.plus {
  color: forestgreen;
}
.money.minus {
  color: crimson;
}
label {
  display: inline-block;
  margin: 10px 0;
  font-size: large;
  font-weight: bold;
  text-decoration: underline;
}
input[type="text"],
input[type="number"] {
  
  border: 1px solid var(--last);
  border-radius: 5px;
  display: block;
  font-size: 16px;
  padding: 10px;
  width: 100%;
}
.btn {
  border-radius: 10px;
  cursor: pointer;
  background-color: var(--line);
  box-shadow: var(--box-shadow);
  border-style: none;
  color: var(--bg);
  display: block;
  font-size: 16px;
  font-weight: bold;
  margin: 20px 0 20px;
  padding: 10px;
  width: 100%;
}

.btn:hover {
  background-color: #97BFB4;
  color:#eeee;
}

.btn:focus,
.delete-btn:focus {
  outline: none;
}
.list {
  list-style-type: none;
  padding: 0;
  margin-bottom: 40px;
}
.list li {
  background-color: var(--text);
  color: var(--bg);
  display: flex;
  justify-content: space-between;
  position: relative;
  padding: 10px;
  margin: 10px 0;
}
.list li.plus {
  border-right: 5px solid forestgreen;
}
.list li.minus {
  border-right: 5px solid crimson;
}
.delete-btn {
  cursor: pointer;
  background-color: var(--line);
  border: 0;
  font-size: 20px;
  line-height: 20px;
  padding: 2px 5px;
  position: absolute;
  top: 50%;
  left: 0;
  transform: translate(-100%, -50%);
  opacity: 0;
  transition: opacity 0.3s ease-in;
}
.list li:hover .delete-btn {
  opacity: 1;
}

@media screen and (min-width: 768px) {
  .container{
    width: 90%;
  }
}
  </style>
</head>

<body>

  <div class="container" style="margin-top: 5%">
    
    <h4 style="margin-top: 5%;">Your balance</h4>
    <h1 id="balance">0</h1>
    <div class="inc-exp-container">
      <div>
        <h4>income</h4>
        <p id="money-plus" class="money plus">+$0.00</p>
      </div>
      <div>
        <h4>expense</h4>
        <p id="money-minus" class="money minus">-$0.00</p>
      </div>
    </div>
    <h3>History</h3>
    <ul id="list" class="list">

    </ul>
    <h3>add new transaction</h3>
    <form action="" id="form">
      <div class="form-control">
        <label for="text">Name Your transaction</label>
        <input type="text" id="text" placeholder="please enter the text..." />
      </div>
      <div class="form-control">
        <label for="amount">amount <br />(Enter - for an expense & + for an income, for e.g. -10)</label>
        <input type="number" id="amount" placeholder="please enter the amount..." />
      </div>
      <button class="btn">Add transation</button>
    </form>
  </div>

  <script src="script.js" async defer></script>
</body>

</html>