import React, { Component } from 'react'
import axios from 'axios'

export default class UserDetail extends Component {

  state = {
    user: {}
  }

  componentDidMount(){
    var { id } = this.props.match.params;
    axios.get(`/user/${id}`)
    .then(res => {
      this.setState({
        user: res.data[0]
      })
      console.log(res.data)
    })
  }
  render() {
    var user = this.state.user;
    console.log(this.state.user.profile)
    return (
      <div>
        <p>{user.id}</p>
        {/* <p>{user.profile.avatar}</p> */}
        {/* {user.profile.avatar} */}
      </div>
    )
  }
}
