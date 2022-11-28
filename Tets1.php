<!-- <!DOCTYPE html>
<html>
     
<head>
    <title>
        How to call PHP function
        on the click of a Button ?
    </title>
</head>
 
<body style="text-align:center;">
     
    <h1 style="color:green;">
        GeeksforGeeks
    </h1>
     
    <h4>
        How to call PHP function
        on the click of a Button ?
    </h4>
     
    <?php
        // if(array_key_exists('button', $_POST)) {
        //     button1();
        // }
        // else if(array_key_exists('button2', $_POST)) {
        //     button2();
        // }
        // function button1() {
        //     echo "This is Button1 that is selected";
        // }
        // function button2() {
        //     echo "This is Button2 that is selected";
        // }
    ?>
 
    <form method="post">
        <input type="submit" name="button"
                class="button" value="Button1" />
         
        <input type="submit" name="button2"
                class="button" value="Button2" />
    </form>
</body>
 
</html> -->

<!-- 
<html>

<body>
    <input class="input" type="text" placeholder="fill me">
    <button class="button">Click Me</button>
</body>
<script>
const input = document.querySelector(".input");
const button = document.querySelector(".button");
button.disabled = true;
input.addEventListener("change", stateHandle);

function stateHandle() {
    if(document.querySelector(".input").value === "") {
        button.disabled = true;
    } else {
        button.disabled = false;
    }
}

button.addEventListener("click",() =>{
    console.log("You entered:", document.querySelector(".input").value);
})
</script>

</html> -->


<html>
<form>
  <input type="text">
  <input type="text">
  <input type="submit" disabled="disabled" value="Go">
</form>
<script></
var toggleSubmit = function() {
  var isDisabled = ![].some.call(document.querySelectorAll("input[type=text]"), function(input) {
    return input.value.length;
  });
  
  var submitBtn = document.querySelector("input[type=submit]");
  
  if (isDisabled) {
    submitBtn.setAttribute("disabled", "disabled");
  } else {
    submitBtn.removeAttribute("disabled");
  }
};

document.querySelector("form").addEventListener("input", toggleSubmit, false);
</html>