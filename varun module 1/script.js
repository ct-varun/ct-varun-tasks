console.log("Welcome to my calculator");
window.onload = function () {
    document.getElementById("calculator-btn").onclick = function () {
        let operandOne = prompt("Enter the first operand");
        if (operandOne == null) {
            console.log("thank you");
            return;
        }
        while (operandOne.trim() == '' || isNaN(Number(operandOne)) || !Number.isFinite(Number(operandOne))) {
            console.log("input error! Please enter a number");
            operandOne = prompt("input error! Enter the first operand again");
            if (operandOne == null) {
                console.log("thank you");

                return;
            }
        }
        operandOne = Number(operandOne);
        console.log(`operand one is ${operandOne}`);
        let operator = prompt("Please enter the operator \n +, -, *, / \n are the available options");
        while (checkOperator(operator)) {
            if (operator == null) {
                console.log("thank you");

                return;
            }
            console.log("input error! Please enter a valid operator");
            operator = (prompt("input error! please enter the operator again"));
        }
        console.log(`operator is ${operator}`);
        let operandTwo = (prompt("Enter the second operand"));
        if (operandTwo == null) {
            console.log("thank you");
            return;
        }
        while (operandTwo == '' || isNaN(Number(operandTwo)) || !Number.isFinite(Number(operandTwo)) || (operator === '/' && Number(operandTwo) === 0)) {
            if (Number(operandTwo) === 0) {
                console.log("cannot divide by zero");
                operandTwo = prompt("input error! cannot divide by zero enter the second operand again");
            }
            else {
                console.log("input error! Please enter a number");
                operandTwo = prompt("input error! Enter the second operand again");
            }
            if (operandTwo == null) {
                console.log("thank you");
                return;
            }
        }
        operandTwo = Number(operandTwo);
        console.log(`operand two is ${operandTwo}`);
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
            default:
                console.log("error operator does not exist");
        }
    }
}
