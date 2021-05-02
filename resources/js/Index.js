import React from 'react';
import ReactDOM from 'react-dom';
import Application from './Application';
<<<<<<< HEAD

ReactDOM.render(<Application />, document.getElementById('root'));
=======
import {createStore} from 'redux';
import {Provider} from 'react-redux';
import rootReducer from './reducers';
import {addTokenByID} from './actions'
import {persistor, store} from './store';
import { PersistGate } from 'redux-persist/integration/react'

// const store = createStore(rootReducer);
// console.log('store.getState()', store.getState());
//  store.subscribe(()=>console.log('store', store.getState()));
// store.dispatch(addTokenByID('xxxxxx'));

ReactDOM.render(
<Provider store={store}>
    <PersistGate loading={null} persistor={persistor}>
        <Application />
    </PersistGate>
</Provider>
, document.getElementById('root'));
>>>>>>> df208185cd36890a2f09032b2b97ea90ca9e0394
