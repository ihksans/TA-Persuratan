import React from 'react';
import ReactDOM from 'react-dom';
<<<<<<< HEAD
import Nama from './ComponentExample';
function User() {
    return (
        <>
=======

function User() {
    return (
>>>>>>> 31944adae3fc1e23567cdfbfb3b646e4e0256e33
        <div className="container mt-5">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card text-center">
<<<<<<< HEAD
                        <div className="card-header"><h2> Hallo Gais....</h2></div>

                        <div className="card-body">Ini Web inisiasi KoTa 203</div>
                        <Nama></Nama>
                        <div className="card-body">Bismillah Yu Bisa Yu....</div>
                        
                    </div>
                </div>
               
            </div>
            
        </div>
     
        </>
=======
                        <div className="card-header"><h2>React Component in Laravel</h2></div>

                        <div className="card-body">I'm tiny React component in Laravel app!</div>
                    </div>
                </div>
            </div>
        </div>
>>>>>>> 31944adae3fc1e23567cdfbfb3b646e4e0256e33
    );
}

export default User;

// DOM element
if (document.getElementById('user')) {
    ReactDOM.render(<User />, document.getElementById('user'));
}