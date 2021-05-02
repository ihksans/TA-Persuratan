// import React,{useState} from 'react'
// import {loginAuth} from '../../service/auth'

// const Login = () =>{
//     const [formInput, setFormInput] = useState({username: '', password: ''})

//     const updateFormInput = e => {
//         e.persist()
//         setFormInput(prevState => ({...prevState, [e.target.name]: e.target.value}))
//     }
//     const signIn = e => {
//         e.preventDefault()
//         loginAuth(formInput)
//     }
//     return (
//         <>
//         <p>Login</p>

//         <form className="mt-8" action="#" method="POST">
//         <div className=" justify-center">

//                     <div className="rounded-md shadow-sm">
//                         <div>
//                             <input aria-label="Username" name="username" type="username" required
//                                    onChange={updateFormInput}
//                                    className="appearance-none rounded-none relative block w-50% px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5"
//                                    placeholder="username" />
//                         </div>
//                         <div className="-mt-px">
//                             <input aria-label="Password" name="password" type="password" required
//                                    onChange={updateFormInput}
//                                    className="appearance-none rounded-none relative block w-50% px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5"
//                                    placeholder="Password" />
//                         </div>
//                     </div>

//                     <div className="mt-6">
//                         <button type="submit"
//                                 onClick={signIn}
//                                 className="group relative w-1/12 flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
//                                   <span className="absolute left-0 inset-y-0 flex items-center pl-3">
//                                     <svg
//                                         className="h-5 w-5 text-indigo-500 group-hover:text-indigo-400 transition ease-in-out duration-150"
//                                         fill="currentColor" viewBox="0 0 20 20">
//                                       <path fillRule="evenodd"
//                                             d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
//                                             clipRule="evenodd" />
//                                     </svg>
//                                   </span>
//                             Sign In
//                         </button>
//                     </div>
//                     </div>
//                 </form>
//         </>
//     )
// }
// export default Login;



import React,{Component} from 'react'
import api from '../../service/api'
import { connect } from 'react-redux';
import {logIn, notLoggedIn} from '../../service/token'
import {addTokenByID} from '../../actions'


class Login extends Component {
    constructor(props){
        super(props);
        this.state = {
            username: "",
            password: ""
        }
        this.handleSubmit = this.handleSubmit.bind(this);
        this.handleUsername = this.handleUsername.bind(this);
        this.handlePassword = this.handlePassword.bind(this);
    }
    setToken(token){
        console.log("setToken:"+ token);
        this.props.addTokenByID(token);
    }
    handleSubmit(e){
        e.preventDefault();
       
        let formInput = new FormData;
        formInput.append("username",this.state.username);
        formInput.append("password",this.state.password);
        api().get('/sanctum/csrf-cookie').then(() => {
            api().post('api/login', formInput).then(response => {
                if (response.data.error) {
                    console.log(response.data.error)
                    notLoggedIn;
                    
                } else {
                    logIn(response.data.content.access_token);
                    this.setToken(response.data.content.access_token);
                    window.location.assign("/")
                }
            })
        })
    }
    handleUsername(e){
        let value = e.target.value;
        this.setState ({
            username : value
        })
    }
    handlePassword(e){
        let value = e.target.value;
        this.setState({
            password : value
        })
    }
    render(){
        return(
            <>
            <form className="mt-8" action="#" method="POST">
                <div className=" justify-center">
                        <div className="rounded-md shadow-sm">
                                <div>
                                    <input aria-label="Username" name="username" type="username" required
                                            onChange={this.handleUsername}
                                            className="appearance-none rounded-none relative block w-50% px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5"
                                        placeholder="username" />
                            </div>
                            <div className="-mt-px">
                                <input aria-label="Password" name="password" type="password" required
                                        onChange={this.handlePassword}
                                        className="appearance-none rounded-none relative block w-50% px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5"
                                        placeholder="Password" />
                            </div>
                        </div>

                        <div className="mt-6">
                            <button type="submit"
                                    onClick={this.handleSubmit}
                                    className="group relative w-1/12 flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                        <span className="absolute left-0 inset-y-0 flex items-center pl-3">
                                        <svg
                                            className="h-5 w-5 text-indigo-500 group-hover:text-indigo-400 transition ease-in-out duration-150"
                                            fill="currentColor" viewBox="0 0 20 20">
                                        <path fillRule="evenodd"
                                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                clipRule="evenodd" />
                                        </svg>
                                    </span>
                                Sign In
                            </button>
                        </div>
                </div>
             </form>
            </>
        )
    }
}

             

export default connect(null, {addTokenByID})(Login);