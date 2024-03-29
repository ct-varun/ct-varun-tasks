console.log("Welcome to my calculator");
window.onload = function () {
    document.getElementById("calculator-btn").onclick = function () {
        //console.clear();
        // console.log("Welcome to my calculator");
        //operandOne
        let operandOne = Number(prompt("Enter the first operand"));
        while (isNaN(operandOne) || !Number.isFinite(operandOne)) {
            console.log("input error! Please enter a number");
            operandOne = Number(prompt("input error! Enter the first operand again"));
        }
        console.log(`operand one is ${operandOne}`);
        //operator
        let operator = prompt("Please enter the operator \n +, -, *, / \n are the available options");
        while (checkOperator(operator)) {
            console.log("input error! Please enter a valid operator");
            operator = (prompt("input error! please enter the operator again"));
        }
        console.log(`operator is ${operator}`);

        //operandTwo
        let operandTwo = Number(prompt("Enter the second operand"));
        while (isNaN(operandTwo) || !Number.isFinite(operandTwo) || (operator === '/' && operandTwo === 0)) {
            if (operandTwo === 0) {
                console.log("cannot divide by zero");
                operandTwo = Number(prompt("input error! cannot divide by zero enter the second operand again"));
            }
            else {
                console.log("input error! Please enter a number");
                operandTwo = Number(prompt("input error! Enter the second operand again"));
            }
        }
        console.log(`operand two is ${operandTwo}`);

        //functions
        function checkOperator(operator) {
            if (operator == '+' || operator == '-' || operator == '*' || operator == '/' || operator == '%') {
                return 0;
            }
            else {
                return 1;
            }
        }

        function add(a, b) {
            return Number(a + b);
        }

        function subtract(a, b) {
            return a - b;
        }

        function multiply(a, b) {
            return a * b;
        }

        function divide(a, b) {
            return a / b;
        }

        // function modulus(a, b){
        //     return a % b;
        // }

        //switch

        let result;
        switch (operator) {
            case '+':
                result = add(operandOne, operandTwo);
                if (isNaN(result)) {
                    console.log("error occured! illegal mathematical operation");
                    //alert("error occured! llegal mathematical operation");
                }
                else {
                    console.log(`\n ${operandOne} ${operator} ${operandTwo} = ${result}`);
                    //alert(`${operandOne} ${operator} ${operandTwo} = ${result}`);
                }
                break;

            case '-':
                result = subtract(operandOne, operandTwo);
                if (isNaN(result)) {
                    console.log("error occured! illegal mathematical operation");
                    //alert("error occured! llegal mathematical operation");
                }
                else {
                    console.log(`boom \n ${operandOne} ${operator} ${operandTwo} = ${result}
                hello`);
                    //alert(`${operandOne} ${operator} ${operandTwo} = ${result}`);
                }
                break;

            case '*':
                result = multiply(operandOne, operandTwo);
                if (isNaN(result)) {
                    console.log("error occured! illegal mathematical operation");
                    //alert("error occured! llegal mathematical operation");
                }
                else {
                    console.log(`${operandOne} ${operator} ${operandTwo} = ${result}`);
                    //alert(`${operandOne} ${operator} ${operandTwo} = ${result}`);
                }
                break;

            case '/':
                result = divide(operandOne, operandTwo);
                if (isNaN(result)) {
                    console.log("error occured! illegal mathematical operation");
                    //alert("error occured! illegal mathematical operation");
                }
                else {
                    console.log(`${operandOne} ${operator} ${operandTwo} = ${result}`);
                    //alert(`${operandOne} ${operator} ${operandTwo} = ${result}`);
                }
                break;
            // case '%':
            // result=modulus(operandOne, operandTwo);
            // if (isNaN(result)) console.log("illegal mathematical operation");
            // console.log(`${operandOne} ${operator} ${operandTwo} = ${result}`);
            // break;

            default:
                console.log("error operator does not exist");
        }
    }
}


//extra

// let a=10, b=10;
// function calc(a,b,func){
//     return func(a,b);
// }
// function add(a, b){
//         return Number(a + b);
//     }
// const res=calc(a,b,add);
// console.log(res);
