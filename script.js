window.onload = function () {
    document.getElementById('text-analyzer-btn').onclick = function () {
        console.clear();
        let paragraph = prompt("Enter a paragraph for analyzing");
        if (paragraph === null) {
            console.log("thank you");
            return;
        }
        let command = prompt("Enter a command from \n avg-word-length, word-count, special-char-count, consonant-count, vowel-count, digit-count, alpha-count, char-count, all. \n you can enter exit to cancel");
        if (command === null) {
            console.log("thank you");
            return;
        }
        command = command.toLowerCase();
        while (command != 'avg-word-length' && command != 'word-count' && command != 'special-char-count' && command != 'consonant-count' && command != 'vowel-count' && command != 'digit-count' && command != 'alpha-count' && command != 'char-count' && command != 'all') {
            if (command == 'exit') {
                console.log("thank you");
                return;
            }
            if (command === null) {
                console.log("thank you");
                exit;
            }
            command = prompt("Invalid command! enter a command again from avg-word-length, word-count, special-char-count, consonant-count, vowel-count, digit-count, alpha-count, char-count");
            command = command.toLowerCase();
        }
        let result;
        const vowels = ['a', 'e', 'i', 'o', 'u'];
        console.log("text input was '", paragraph, "'");
        paragraph = paragraph.trim().toLowerCase();
        console.log("welcome to analyzer");
        switch (command) {
            case 'char-count':
                result = characterCount(paragraph);
                console.log("characters count is", result);
                break;
            case 'alpha-count':
                result = alphabetCount(paragraph);
                console.log("alphabets count is", result);
                break;
            case 'digit-count':
                result = digitsCount(paragraph);
                console.log("digits count is", result);
                break;
            case 'vowel-count':
                result = vowelCount(paragraph);
                console.log("vowel count is", result);
                break;
            case 'consonant-count':
                result = consonantCount(paragraph);
                console.log("consonants count is", result);
                break;
            case 'special-char-count':
                result = specialCharCount(paragraph);
                console.log("special characters count is", result);
                break;
            case 'word-count':
                result = wordCount(paragraph);
                console.log("words count is", result);
                break;
            case 'avg-word-length':
                result = avgWordLength(paragraph);
                console.log("average word length is", result);
                break;
            case 'all':
                console.log("applying all analyzations");
                result = characterCount(paragraph);
                console.log("characters count is", result);
                result = alphabetCount(paragraph);
                console.log("alphabets count is", result);
                result = digitsCount(paragraph);
                console.log("digits count is", result);
                result = vowelCount(paragraph);
                console.log("vowel count is", result);
                result = consonantCount(paragraph);
                console.log("consonants count is", result);
                result = specialCharCount(paragraph);
                console.log("special characters count is", result);
                result = wordCount(paragraph);
                console.log("words count is", result);
                result = avgWordLength(paragraph);
                console.log("average word length is", result);
                break;
            default:
                console.log("invalid command");
        }


        function wordCount(paragraph) {
            let p = paragraph.split(/[\s,\t,\n]+/);
            // let newStr = str.replace(/\s+/g, ' ');
            if (p.length === 1 && p[0] === '') {
                return 0;
            }
            return p.length;
        }


        function avgWordLength(paragraph) {
            let p = paragraph.split(/[\s,\t,\n]+/);
            let sum = 0, avg = 0;
            for (let item of p) {
                sum = sum + item.length;
            }
            if (p.length == 0) {
                avg = 0;
            }
            else {
                avg = sum / p.length;
            }
            return avg;
        }


        function specialCharCount(paragraph) {
            const specialCharacters = ['_', '$', '%'];
            let count = 0;
            for (let item of paragraph) {
                if (specialCharacters.includes(item)) {
                    count++;
                }
            }
            return count;
        }


        function digitsCount(paragraph) {
            const numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
            let count = 0;
            for (let item of paragraph) {
                if (numbers.includes(item)) {
                    count++;
                }
            }
            return count;
        }


        function vowelCount(paragraph) {
            let count = 0;
            for (let item of paragraph) {
                if (vowels.includes(item)) {
                    count++;
                }
            }
            return count;
        }


        function characterCount(paragraph) {
            let p = paragraph.replaceAll(" ", "");
            return p.length;
        }


        function alphabetCount(paragraph) {
            let count = 0;
            for (let item in paragraph) {
                if ((paragraph.charCodeAt(item) >= 97 && paragraph.charCodeAt(item) <= 122)) // (item >= 'a' && item <= 'z')
                {
                    count++;
                }
            }
            return count;
        }


        function consonantCount(paragraph) {
            // let alphabets = alphabetCount(paragraph);
            // let vowels = vowelCount(paragraph);
            // let consonants = alphabets - vowels;
            let count = 0;
            for (item of paragraph) {
                if ((item >= 'a' && item <= 'z') && (!vowels.includes(item)))
                    count++;
            }
            return count;
        }
    }
}