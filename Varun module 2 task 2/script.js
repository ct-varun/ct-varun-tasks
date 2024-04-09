import { checkNumber, checkBoolean, checkString } from "./script2.js";
window.onload = function () {
  let bookStore = [
    {
      id: 1,
      title: "war and peace",
      author: "leo_tolstoy",
      pages: 100,
      isRead: false,
    },
    {
      id: 2,
      title: "the three musketers",
      author: "alexandre_dumas",
      pages: 200,
      isRead: true,
    },
    {
      id: 3,
      title: "To kill a Mockingbird",
      author: "harper_lee",
      pages: 500,
      isRead: false,
    },
    {
      id: 4,
      title: "The Trial",
      author: "franz_kafka",
      pages: 100,
      isRead: true,
    },
    {
      id: 5,
      title: "utopia",
      author: "thomas_more",
      pages: 100,
      isRead: false,
    },
    {
      id: 6,
      title: "the sun also rises",
      author: "ernest_hemingway",
      pages: 100,
      isRead: true,
    },
    {
      id: 7,
      title: "the alchemist",
      author: "paulo_coelho",
      pages: 100,
      isRead: false,
    },
    {
      id: 8,
      title: "the kite runner",
      author: "khaled_hosseini",
      pages: 100,
      isRead: true,
    },
    {
      id: 9,
      title: "the autobiography of a yogi",
      author: "paramhansa_yogananda",
      pages: 100,
      isRead: false,
    },
    {
      id: 10,
      title: "aall it courage",
      author: "armstrong_perry",
      pages: 500,
      isRead: true,
    },
  ];

  document.getElementById("display-all-books-btn").onclick = function () {
    console.clear();
    for (let item of bookStore) {
      console.log(item);
    }
  };

  // function getAuthor(bookStore, noOfRecords) {
  //     const resultArray = bookStore.filter((item) => item.author[0].toLowerCase() == 'a').map((obj, index) => obj.author).slice(0, noOfRecords);
  //     let resultTwo = [];
  //     for (let item in resultArray) {
  //         resultTwo[item] = resultArray[item];
  //         if (item == noOfRecords - 1) {
  //             break;
  //         }
  //     }
  // }

  document.getElementById("search-books-btn").onclick = function () {
    console.clear();
    let title = prompt("enter the title that you want to search");
    title = checkString(title);
    result = searchBook(title, bookStore);
    if (result.length >= 1) {
      for (let item of result) {
        console.log(item);
      }
    } else {
      console.log("no book found");
    }
  };

  document.getElementById("total-pages-btn").onclick = function () {
    console.clear();
    result = totalPages(bookStore);
    console.log(`total pages are ${result}`);
  };

  document.getElementById("pages-read-btn").onclick = function () {
    console.clear();
    result = pagesRead(bookStore);
    console.log(`pages read are ${result}`);
  };

  document.getElementById("mark-read-btn").onclick = function () {
    console.clear();
    book_id = prompt("Enter the book-id");
    checkNumber(book_id);
    readToggle(book_id, bookStore);
  };
  document.getElementById("sort-books-btn").onclick = function () {
    console.clear();
    result = sortBooks(bookStore);
    console.log("books are sorted according to their pages.");
    for (let item of result) {
      console.log(item);
    }
  };

  function displayBookCards(books) {
    const bookNames = books.map((obj) => {
      const author = obj.author.trim().split("_");
      let newNames = "";
      for (let item of author) {
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
      } else {
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
      } else if (a.pages < b.pages) {
        return -1;
      } else {
        return 0;
      }
    }
    return sortedBooks;
  }

  function readToggle(bookid, books) {
    let count = 0;
    for (let item of books) {
      if (item.id == bookid) count++;
    }
    if (count) {
      if (books.find((item) => item.id == bookid).isRead) {
        books.find((item) => item.id == bookid).isRead = false;
        console.log("changed to unread");
      } else {
        books.find((item) => item.id == bookid).isRead = true;
        console.log("changed to read");
      }
    } else {
      console.log("error check id of book");
    }
  }

  function searchBook(title, books) {
    let author = "leo";
    const searchResult = books.filter(
      (item) => item.title.includes(title) && item.author.includes(author)
    );
    return searchResult;
  }

  function addBook(bookStore) {
    let book = {};
    book.id = prompt("Enter the book id");
    book.id = checkNumber(book.id);
    let flag = 0;
    for (let item of bookStore) {
      if (item.id == book.id) {
        flag = 1;
      }
    }
    if (flag) {
      console.log("error check id of book");
      return;
    }
    book.title = prompt("Enter the book title");
    book.title = checkString(book.title);
    if (!book.title) {
      flag = 1;
    }
    book.author = prompt("Enter the author");
    book.author = checkString(book.author);
    if (!book.author) {
      flag = 1;
    }
    book.pages = prompt("Enter the number of pages in the book");
    book.pages = checkNumber(book.pages);
    if (!book.pages) {
      flag = 1;
    }
    book.isRead = prompt(
      "Enter true if the book is read otherwise enter false"
    );
    book.isRead = checkBoolean(book.isRead);
    if (!book.isRead) {
      flag = 1;
    }
    if (!flag) {
      bookStore.push(book);
      console.log("success");
    }
  }

  function removeBook(removeId, books) {
    let count = 0;
    for (let item of books) {
      if (item.id == removeId) {
        count++;
      }
    }
    if (count) {
      //   const newBooks = books.filter((item) => item.id != removeId); //using filter but creates a new array
      //   bookStore = newBooks;
      books.splice(
        books.findIndex((item) => {
          return item.id == removeId;
        }),
        1
      ); //using splice to remove elements from the real array
      console.log("successfull");
    } else {
      console.log("error try again please");
    }
  }

  document.getElementById("display-book-btn").onclick = function () {
    console.clear();
    let res;
    res = displayBookCards(bookStore);
    for (let item of res) {
      console.log(item);
    }
  };

  document.getElementById("add-book-btn").onclick = function () {
    console.clear();
    addBook(bookStore);
  };

  document.getElementById("remove-book-btn").onclick = function () {
    console.clear();
    let book_id = prompt("enter the id of the book that you want to remove");
    checkNumber(book_id);
    removeBook(book_id, bookStore);
  };

  const shortBooks = (books) =>
    books
      .filter((item) => item.pages < 200)
      .sort((a, b) => a.title.localeCompare(b.title));

  document.getElementById("short-books").onclick = function () {
    const shortBooksandSorted = shortBooks(bookStore);
    for (let item of shortBooksandSorted) {
      console.log(item);
    }
  };

  document.getElementById("edit-a-book").onclick = function () {
    console.clear();
    let idForEdit = prompt(
      "Enter the book id or cancel if you don't want to change"
    );
    idForEdit = checkNumber(idForEdit);
    let c = 0;
    if (idForEdit) {
      for (let i of bookStore) {
        if (i.id == idForEdit) {
          c++;
        }
      }
    }
    if (!c) {
      console.log("id is not present");
    } else {
      forEditing(idForEdit, bookStore);
    }
  };

  function forEditing(id, books) {
    const obj = books.filter((item) => item.id == id);
    let newId, newTitle, newAuthor, newPages, newIsRead;
    newId = prompt("Enter the book id or cancel if you don't want to change");
    newId = checkNumber(newId);
    if (newId) {
      obj[0].id = newId;
    }
    newTitle = prompt(
      "Enter the book title or cancel if you don't want to change"
    );
    newTitle = checkString(newTitle);
    if (newTitle) {
      obj[0].title = newTitle;
    }
    newAuthor = prompt(
      "Enter the author or cancel if you don't want to change"
    );
    newAuthor = checkString(newAuthor);
    if (newAuthor) {
      obj[0].author = newAuthor;
    }
    newPages = prompt(
      "Enter the number of pages in the book or cancel if you don't want to change"
    );
    newPages = checkNumber(newPages);
    if (newPages) {
      obj[0].pages = newPages;
    }
    newIsRead = prompt(
      "Enter true if the book is read otherwise enter false cancel if you don't want to change"
    );
    newIsRead = checkBoolean(newIsRead);
    if (newIsRead) {
      obj[0].isRead = newIsRead;
    }
  }

  function addPublishedDate(books) {
    // const publishedDate = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    let date;
    for (let i in books) {
      if (!books[i].date) {
        date = prompt(
          "enter the published date for the book" + " " + books[i].title
        );
        date = checkNumber(date);
        if (date) {
          books[i].date = date;
        }
      } else {
        console.log("date is already set for" + books[i].title);
      }
    }
  }

  document.getElementById("add-published-date").onclick = function () {
    addPublishedDate(bookStore);
  };

  const reverseValues = function (books) {
    let revAuthor;
    let revTitle;
    return books.map((item) => {
      revAuthor = item.author.split("").reverse().join("");
      revTitle = item.title.split("").reverse().join("");
      return { author: revAuthor, title: revTitle };
    });
  };

  document.getElementById("reverse-values").onclick = function () {
    const res = reverseValues(bookStore);
    for (let item of res) {
      console.log(item);
    }
  };
};
