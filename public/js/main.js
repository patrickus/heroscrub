require('../bower-components/react');
require('react-dom');


var Hello = React.createClass({
    displayName: 'Hello',
    render: function() {
        return React.createElement("div", null, "Hello ", this.props.name);
    }
});
