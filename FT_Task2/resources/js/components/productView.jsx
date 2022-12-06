import React, { Component } from 'react'
import ReactDOM from 'react-dom';
import axios from 'axios';

class productView extends Component {
  state = {
        posts: []
      }
    
      componentDidMount() {
        axios.get('http://localhost:8000/api/product/list')
        .then(response => {
          const posts = response.data;
          this.setState({posts});
         
        })
      }
   
        render(){
          return(
              <table class="table">
              <thead>
                  <tr class="bg-primary">
                      <th scope="col">Name</th>
                      <th scope="col">Code</th>
                      <th scope="col">Manufacture Date</th>
                      <th scope="col">Expire Date</th>
                  </tr>
              </thead>
              <tbody>
                  {this.state.posts && this.state.posts.map(post => 
                      <tr>
                          <td scope="row">{post.name}</td>
                          <td>{post.code}</td>
                          <td>{post.mdate}</td>
                          <td>{post.edate}</td>
                      </tr>)}
              </tbody>
          </table>
  
          )
      }



}
  
  export default productView;
  
if (document.getElementById('axioget')) {
  const Index = ReactDOM.createRoot(document.getElementById("axioget"));

  Index.render(
      <React.StrictMode>
          <productView/>
      </React.StrictMode>
  )
}
