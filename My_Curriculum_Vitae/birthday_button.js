'use strict';



const e = React.createElement;



class BirthdayButton extends React.Component {

  constructor(props) {

    super(props);

    this.state = { pushed: false };

  }



  render() {

    if (this.state.pushed) {

      return 'My birthday: 28th September';

    }



    return e(

      'button',  

      { onClick: () => this.setState({ pushed: true }) },

      'Birthday?'


    );

  }

}



const domContainer = document.querySelector('#birthday_button_container');

ReactDOM.render(e(BirthdayButton), domContainer);