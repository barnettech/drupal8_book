const htmlString = '<h1><b>I am a string with HTML from a react component!</b></h1>';
class Test extends React.Component {
  render() {
    return <div dangerouslySetInnerHTML={{ __html: htmlString }} />;
  }
}

ReactDOM.render(
  <Test />,
  document.getElementById('myreactapp')
);

