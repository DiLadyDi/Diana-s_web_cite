'use strict';



const e = React.createElement;



class TurnsButton extends React.Component {

  constructor(props) {

    super(props);

    this.state = { pushed: false };

  }



  render() {

    if (this.state.pushed) {

      return '166 turns in one minute!!!';

    }



    return e(

      'button',  

      { onClick: () => this.setState({ pushed: true }) },

      'click here to get RECORD results'


    );

  }

}



const domContainer = document.querySelector('#turns_button_container');

ReactDOM.render(e(TurnsButton), domContainer);