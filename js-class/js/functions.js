function print_name(firstName, lastName) {
    console.log("Hello "+firstName + ' ' + lastName);
}
print_name("Tunde", "seriki"); 

document.querySelector("#submit").addEventListener("click", function(){  calculate(); });

function calculate(){
    let value1 = document.querySelector("#value1").value;
    let value2 = document.querySelector("#value2").value;
    let operator = document.querySelector("#operator").value;
    let answer = document.querySelector("#answer");

    switch (operator) {
        case "+":
            answer.innerHTML = parseInt(value1) + parseInt(value2);
            break;
            case "-":
              answer.innerHTML = parseInt(value1) - parseInt(value2);
            break;
            case "*":
            answer.innerHTML = parseInt(value1) * parseInt(value2);
            break;

        default:
            answer.innerHTML = "No value";
            break;
    }

    document.querySelector("#selected").removeAttribute("selected");
    document.querySelector("#selected").setAttribute("selected", "");

//     if(operator == "+"){
//          answer.innerHTML = parseInt(value1) + parseInt(value2);
//     }
//     if(operator == "*"){
//         answer.innerHTML = parseInt(value1) * parseInt(value2);
//    }
//    if(operator == "-"){
//     answer.innerHTML = parseInt(value1) - parseInt(value2);
// }

}