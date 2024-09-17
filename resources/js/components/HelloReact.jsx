// resources/js/components/HelloReact.js

import React from 'react';
import ReactDOM from 'react-dom';

export default function HelloReact() {
    return (
        <h1>Hello React!</h1>
    );
}

if (document.getElementById('hello-react')) {
    //new version up to date
    root.render(<HelloReact />, document.getElementById('hello-react'));
}