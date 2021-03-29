import React from 'react';
import ReactDOM from 'react-dom';
import Routers from '../components/Example';

export default function App() {
    return (
       <Routers/>
    );
}

if (document.getElementById('root')) {
    ReactDOM.render(<App />, document.getElementById('root'));
}
