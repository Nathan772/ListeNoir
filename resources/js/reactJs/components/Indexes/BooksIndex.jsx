/*
mostly from : 

https://medium.com/@laravelprotips/creating-a-react-js-laravel-api-crud-a-simple-guide-02702f93d26f

*/
import React from 'react';
import { Component } from "react";
import axios from "axios"; // Don't forget to import axios!
console.log("hello, it's me Books Index.jsx")

//need to be shown later
class BooksIndex extends Component {
  constructor(props) {
    
    super(props);
    //array that will contain your books
    this.state = {
      books: [],
    };
  }

  fetchBooks() {
    //       //retrieve the value associated to the path
//       // the path is the path chosen for the getter in web.php (api is implicitly add)
    
    
      axios
      .get('api/books/list')
      .then((response) => this.setState({ books: response.data.data }));
  }











  componentDidMount() {
    this.fetchBooks();
  }









  renderBooks() {
    console.log("hello it's me, l'affichage des livres par reactJs");
    return this.state.books.map((book) => (
      <tr key={book.id}>
        <td className="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
          {book.title}
        </td>
        <td className="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
          {book.created_at}
        </td>
        <td className="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
          {book.updated_at}
        </td>
      </tr>
    ));
  }

  render() {
    return (
      <div className="overflow-hidden overflow-x-auto p-6 bg-white border-gray-200">
        <div className="min-w-full align-middle">
          <table className="min-w-full divide-y divide-gray-200 border">
            <thead>
              <tr>
                <th className="px-6 py-3 bg-gray-50">
                  <span className="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Name</span>
                </th>
                <th className="px-6 py-3 bg-gray-50">
                  <span className="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Email</span>
                </th>
                <th className="px-6 py-3 bg-gray-50">
                  <span className="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Address</span>
                </th>
                <th className="px-6 py-3 bg-gray-50">
                  <span className="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Website</span>
                </th>
                <th className="px-6 py-3 bg-gray-50"></th>
              </tr>
            </thead>
            <tbody className="table-body">
              {this.renderBooks()}
            </tbody>
          </table>
        </div>
      </div>
    );
  }
}



// class BooksIndex extends Component {
//   constructor(props) {
//     super(props);
//     //array that will contain your books
//     this.state = {
//       books: [],
//     };
//   }
//   fetchBooks() {
//     axios
//       //retrieve the value associated to the path
//       // the path is the path chosen for the getter (api is implicitly add)
//       .get('api/books')
//       .then((response) => this.setState({ books: response.data.data }));
//   }
//   componentDidMount() {
//     this.fetchBooks();
//   }
//   renderBooks() {
//     return this.state.books.map((book) => (
//       <tr key={book.id}>
//         <td className="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
//           {book.title}
//         </td>
//         <td className="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
//           {book.created_at}
//         </td>
//         <td className="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
//           {book.updated_at}
//         </td>
//       </tr>
//     ));
//   }

//   render() {
//     return (
//       <h1> test BooksIndex </h1>
//     );
//   }
// }
export default BooksIndex;
