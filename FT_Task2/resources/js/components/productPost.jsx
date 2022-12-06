import React, { Component } from 'react'
import ReactDOM from 'react-dom/client';
import axios from 'axios';
  
class AxioPost extends Component {
    constructor(props)
    {
        super(props)
this.state={
    pname:'',
    code:'',
    mdate:'',
    edate:''
}
    }

changeHandler = (e) =>{
    this.setState({[e.target.name]: e.target.value})
}
submitHandler = (e) =>{
    e.preventDefault()
    this.setState()
    console.log(this);
    axios.post('http://localhost:8000/api/product/create', this.state)
    .then(response=>{
console.log(response)
    })
.catch(error =>{
    console.log(error)
})
}
   

    render() {
      const {pcd,pname}=this.state
        return (
            <div >
                <div>products</div>
                    <form onSubmit={this.submitHandler}>
                        <div> <input type="text" name="pname" value={pname} onChange={this.changeHandler}/></div>
                        <div> <input type="text" name="code" value={code}  onChange={this.changeHandler} /></div>
                        <div> <input type="text" name="mdate" value={mdate}  onChange={this.changeHandler} /></div>
                        <div> <input type="text" name="edate" value={edate}  onChange={this.changeHandler} /></div>
                      

                        <div> <input type="submit" /></div>
                    </form>
                 
                </div>
           
        );
    }
}
  

export default AxioPost;



if (document.getElementById('axiopost')) {
    const Index = ReactDOM.createRoot(document.getElementById("axiopost"));

    Index.render(
        <React.StrictMode>
            <AxioPost/>
        </React.StrictMode>
    )
}
