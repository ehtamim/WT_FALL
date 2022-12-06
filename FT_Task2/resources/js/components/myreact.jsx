import React from 'react';
import ReactDOM from 'react-dom/client';

function Myreact() {
    return (
        <table>
        <tr>
          <th>Name</th>
        </tr>
        <tr>
          <td>John</td>
        </tr>
        <tr>
          <td>Elsa</td>
        </tr>
      </table>
    );
  
}
export default Myreact;

if (document.getElementById('root')) {
    const Index = ReactDOM.createRoot(document.getElementById("root"));

    Index.render(
        <React.StrictMode>
            <Myreact/>
        </React.StrictMode>
    )
}
