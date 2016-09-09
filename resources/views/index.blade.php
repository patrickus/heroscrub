@include('layout')
<body>
<div class="container">
    <div class="content">
        <div class="title">Hero Scrub</div>
        <div id="react-thingy"></div>
        <div id="example"></div>
        <script type="text/babel">
            var Hello = React.createClass({
                displayName: 'Hello',
                render: function() {
                    return React.createElement("div", null, "Hello ", this.props.name);
                }
            });

            ReactDOM.render(
                    React.createElement(Hello, {name: "World"}),
            document.getElementById('example'));
        </script>
    </div>
</div>
</body>
