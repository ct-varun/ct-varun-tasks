window.onload = function () {
    let bookStore = [{ id: 1, title: "war and peace", author: "leo_tolstoy", pages: 100, isRead: false },
    { id: 2, title: "the three musketers", author: "alexandre_dumas", pages: 100, isRead: true },
    { id: 3, title: "To kill a Mockingbird", author: "harper_lee", pages: 100, isRead: false },
    { id: 4, title: "The Trial", author: "franz_kafka", pages: 100, isRead: true },
    { id: 5, title: "utopia", author: "thomas_more", pages: 100, isRead: false },
    { id: 6, title: "the sun also rises", author: "ernest_hemingway", pages: 100, isRead: true },
    { id: 7, title: "the alchemist", author: "paulo_coelho", pages: 100, isRead: false },
    { id: 8, title: "the kite runner", author: "khaled_hosseini", pages: 100, isRead: true },
    { id: 9, title: "the autobiography of a yogi", author: "paramhansa_yogananda", pages: 100, isRead: false },
    { id: 10, title: "call it courage", author: "armstrong_perry", pages: 1, isRead: true }];

    document.getElementById("display-all-books-btn").onclick = function () {
        for (let item of bookStore) {
            console.log(item);
        }
    }

    document.getElementById("search-books-btn").onclick = function () {
        console.clear();
        let title = prompt("enter the title that you want to search");
        title = checkString(title);
        result = searchBook(title, bookStore);
        if (result.length >= 1) {
            for (let item of result) {
                console.log(item);
            }
        }
        else {
            console.log("no book found");
        }
    }


    document.getElementById("total-pages-btn").onclick = function () {
        console.clear();
        result = totalPages(bookStore);
        console.log(`total pages are ${result}`);
    }


    document.getElementById("pages-read-btn").onclick = function () {
        console.clear();
        result = pagesRead(bookStore);
        console.log(`pages read are ${result}`);
    }


    document.getElementById("mark-read-btn").onclick = function () {
        console.clear();
        book_id = prompt("Enter the book-id");
        checkNumber(book_id);
        readToggle(book_id, bookStore);
    }
    document.getElementById("sort-books-btn").onclick = function () {
        console.clear();
        result = sortBooks(bookStore);
        console.log("books are sorted according to their pages.");
        for (let item of result) {
            console.log(item);
        }
    }

    function displayBookCards(books) {
        const bookNames = books.map((obj) => {
            const author = obj.author.trim().split('_');
            let newNames = '';
            for (item of author) {
                newNames += item.charAt(0).toUpperCase() + item.slice(1) + " ";
            }
            newNames = newNames.slice(0, newNames.length - 1);
            return { title: obj.title, author: newNames };
        });
        return bookNames;
    }

    function totalPages(books) {
        const total = books.reduce(function (acc, curr) {
            return acc + curr.pages;
        }, 0);
        return total;
    }

    function pagesRead(books) {
        const pRead = books.reduce(function (acc, curr) {
            if (curr.isRead) {
                return acc + curr.pages;
            }
            else {
                return acc;
            }
        }, 0);
        return pRead;
    }

    function sortBooks(books) {
        // const sortedBooks = books.sort((a, b) => a.pages - b.pages);
        const sortedBooks = books.sort(sorting);
        function sorting(a, b) {
            if (a.pages > b.pages) {
                return 1;
            }
            else if (a.pages < b.pages) {
                return -1;
            }
            else {
                return 0;
            }
        }
        return sortedBooks;
    }

    function readToggle(bookid, books) {
        if (books.find((item) => item.id == bookid).isRead) {
            books.find((item) => item.id == bookid).isRead = false;
            console.log("changed to unread");
        }
        else {
            books.find((item) => item.id == bookid).isRead = true;
            console.log("changed to read");
        }
    }

    function searchBook(title, books) {
        const searchResult = books.filter((item) => item.title.includes(title));
        return searchResult;
    }

    function addBook(bookStore) {
        book = {};
        book.id = prompt("Enter the book id");
        book.id = checkNumber(book.id);
        book.title = prompt("Enter the book title");
        book.title = checkString(book.title);
        book.author = prompt("Enter the author");
        book.author = checkString(book.author);
        book.pages = prompt("Enter the number of pages in the book");
        book.pages = checkNumber(book.pages);
        book.isRead = false;
        let flag = 0;
        for (let item of bookStore) {
            if (item.id == book.id) {
                flag = 1;
            }
        }
        if (!flag) {
            bookStore.push(book);
            console.log("success");
        }
        else {
            console.log("some error occured check the book id");
        }

    }

    function removeBook(removeId, books) {
        let count = 0;
        for (item of books) {
            if (item.id == removeId) {
                count++;
            }
        }
        if (count) {
            const newBooks = books.filter((item) => item.id != removeId);//using filter but creates a new array
            bookStore = newBooks;

            console.log("success");
            // books.splice(books.findIndex((item) => {//using splice to remove elements from the real array
            //     return item.id == removeId;
            // }), 1);
            // console.log("successfull");
        }
        else {
            console.log("error try again please");
        }
    }

    function checkNumber(input) {
        if (input == null) {
            console.log("thank you");
            return;
        }
        while (input.trim() == '' || isNaN(Number(input)) || !Number.isFinite(Number(input))) {
            console.log("input error! Please enter a number");
            input = prompt("input error! Enter value again");
            if (input == null) {
                console.log("thank you");
                return;
            }
        }
        return Number(input);
    }

    function checkString(str) {
        if (str == null) {
            console.log("thank you");
            return;
        }
        while (str.trim() == '' || !isNaN(parseInt(str))) {
            str = prompt("invalid enter again");
            if (str == null) {
                console.log("thank you");
                return;
            }
        }
        return str;
    }
    document.getElementById("display-book-btn").onclick = function () {
        console.clear();
        let res;
        res = displayBookCards(bookStore);
        for (let item of res) {
            console.log(item);
        }
    }

    document.getElementById("add-book-btn").onclick = function () {
        console.clear();
        addBook(bookStore);
    }

    document.getElementById("remove-book-btn").onclick = function () {
        console.clear();
        book_id = prompt("enter the id of the book that you want to remove");
        checkNumber(book_id);
        removeBook(book_id, bookStore);
    }
}



